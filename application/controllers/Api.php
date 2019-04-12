<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');

class Api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    //function for product list
    function cartOperation_post() {
        $product_id = $this->post('product_id');
        $quantity = $this->post('quantity');

        if ($this->checklogin) {
            $session_cart = $this->Product_model->cartOperation($product_id, $quantity, $this->user_id);
            $session_cart = $this->Product_model->cartData($this->user_id);
        } else {
            $session_cart = $this->Product_model->cartOperation($product_id, $quantity);
            $session_cart = $this->Product_model->cartData();
        }

        $this->response($session_cart['products'][$product_id]);
    }

    function cartOperation_get() {
        if ($this->checklogin) {
            $session_cart = $this->Product_model->cartData($this->user_id);
        } else {
            $session_cart = $this->Product_model->cartData();
        }
        $this->response($session_cart);
    }

    function cartOperationDelete_get($product_id) {
        if ($this->checklogin) {
            $cartdata = $this->Product_model->cartData($this->user_id);
            $cid = $cartdata['products'][$product_id]['id'];
            $this->db->where('id', $cid); //set column_name and value in which row need to update
            $this->db->delete('cart'); //
        } else {
            $session_cart = $this->session->userdata('session_cart');
            unset($session_cart['products'][$product_id]);
            $this->session->set_userdata('session_cart', $session_cart);
        }
    }

    function cartOperationPut_get($product_id, $quantity) {
        if ($this->checklogin) {
            $cartdata = $this->Product_model->cartData($this->user_id);
            $total_price = $cartdata['products'][$product_id]['price'] * $quantity;
            $total_quantity = $quantity;
            $cid = $cartdata['products'][$product_id]['id'];
            $this->db->set('quantity', $total_quantity);
            $this->db->set('total_price', $total_price);
            $this->db->where('id', $cid); //set column_name and value in which row need to update
            $this->db->update('cart'); //
        } else {
            $session_cart = $this->session->userdata('session_cart');
            $session_cart['products'][$product_id]['quantity'] = $quantity;
            $price = $session_cart['products'][$product_id]['price'];
            $session_cart['products'][$product_id]['total_price'] = $quantity * $price;
            $this->session->set_userdata('session_cart', $session_cart);
        }
    }

    //Product 
    public function SearchSuggestApi_get($keyword) {
        $query = $this->db->select('title, id, file_name')->from('products')->where("keywords LIKE '%$keyword%' or title LIKE '%$keyword%' ")->get();
        $searchobj = $query->result_array();

        $pquery = "select title, file_name, id from (
                    (SELECT title, file_name, id from products where keywords like '%$keyword%' )
                   union 
                   (SELECT title, file_name, id from products where title like '%$keyword%')
                    ) as search group by id   
                  ";
        $attr_products = $this->Product_model->query_exe($pquery);


        $this->response($searchobj);
    }

    public function SearchSuggestApiJUI_get() {
        $getdata = $this->get();
        $keyword = $getdata['term'];
        $query = $this->db->select('title, id')->from('products')->where("keywords LIKE '%$keyword%'")->get();
        $searchobj = $query->result_array();
        $this->response($searchobj);
    }

    //ProductList APi
    public function productListApi_get($category_id) {
        $attrdatak = $this->get();
        $products = [];
        $countpr = 0;
        $pricequery = "";

        if (isset($attrdatak["minprice"])) {
            $mnpricr = $attrdatak["minprice"] - 1;
            $mxpricr = $attrdatak["maxprice"] + 1;
            unset($attrdatak["minprice"]);
            unset($attrdatak["maxprice"]);
            $pricequery = " and (price between '$mnpricr' and '$mxpricr') ";
        }

        foreach ($attrdatak as $key => $atv) {
            if ($atv) {
                $countpr += 1;
                $key = str_replace("a", "", $key);
                $val = str_replace("-", ", ", $atv);
                $query_attr = "SELECT product_id FROM product_attribute
                           where  attribute_id in ($key) and attribute_value_id in ($val)
                           group by product_id";
                $queryat = $this->db->query($query_attr);
                $productslist = $queryat->result();
                foreach ($productslist as $key => $value) {
                    array_push($products, $value->product_id);
                }
            }
        }
        //print_r($products);

        $productdict = [];

        $productcheck = array_count_values($products);


        //print_r($productcheck);

        foreach ($productcheck as $key => $value) {
            if ($value == $countpr) {
                array_push($productdict, $key);
            }
        }

        $proquery = "";
        if (count($productdict)) {
            $proquerylist = implode(",", $productdict);
            $proquery = " and pt.id in ($proquerylist) ";
        }

        $categoriesString = $this->Product_model->stringCategories($category_id) . ", " . $category_id;
        $categoriesString = ltrim($categoriesString, ", ");

        $product_query = "select pt.id as product_id, pt.*
            from products as pt where pt.category_id in ($categoriesString) $pricequery $proquery and status = 1 order by display_index desc";
        $product_result = $this->Product_model->query_exe($product_query);

        $productListSt = [];

        $productListFinal = [];

        $pricecount = [];

        foreach ($product_result as $key => $value) {
            $value['attr'] = $this->Product_model->singleProductAttrs($value['product_id']);
            array_push($productListSt, $value['product_id']);
            array_push($pricecount, $value['price']);
            array_push($productListFinal, $value);
        }

        $attr_filter = array();
        $pricelist = array();
        if (count($productListSt)) {
            $pricelist = array('maxprice' => max($pricecount), 'minprice' => min($pricecount));


            $productString = implode(",", $productListSt);


            $attr_query = "select count(cav.id) product_count, '' as checked, cav.attribute_value, cav.id, pa.attribute, pa.attribute_id from product_attribute as pa
        join category_attribute_value as cav on cav.id = pa.attribute_value_id
        where pa.product_id in ($productString)
        group by cav.id";
            $attr_result = $this->Product_model->query_exe($attr_query);


            foreach ($attr_result as $key => $value) {
                $filter = $value['attribute'];
                if (isset($attr_filter[$filter])) {
                    array_push($attr_filter[$filter], $value);
                } else {
                    $attr_filter[$filter] = [];
                    array_push($attr_filter[$filter], $value);
                }
            }
        }

        $this->output->set_header('Content-type: application/json');
        $productArray = array('attributes' => $attr_filter,
            'products' => $productListFinal,
            'product_count' => count($product_result),
            'price' => $pricelist);
        $this->response($productArray);
    }

    //ProductList APi
    public function productListSearchApi_get($searchkey) {
        $attrdatak = $this->get();
        $products = [];
        $countpr = 0;
        $searchtext = $searchkey;

        if (isset($attrdatak["minprice"])) {
            $mnpricr = $attrdatak["minprice"] - 1;
            $mxpricr = $attrdatak["maxprice"] + 1;
            unset($attrdatak["minprice"]);
            unset($attrdatak["maxprice"]);
            $pricequery = " and (price between '$mnpricr' and '$mxpricr') ";
        }

        foreach ($attrdatak as $key => $atv) {
            if ($atv) {
                $countpr += 1;
                $key = str_replace("a", "", $key);
                $val = str_replace("-", ", ", $atv);
                $query_attr = "SELECT product_id FROM product_attribute
                           where  attribute_id in ($key) and attribute_value_id in ($val)
                           group by product_id";
                $queryat = $this->db->query($query_attr);
                $productslist = $queryat->result();
                foreach ($productslist as $key => $value) {
                    array_push($products, $value->product_id);
                }
            }
        }
        //print_r($products);

        $productdict = [];

        $productcheck = array_count_values($products);


        //print_r($productcheck);

        foreach ($productcheck as $key => $value) {
            if ($value == $countpr) {
                array_push($productdict, $key);
            }
        }

        $proquery = "";
        if (count($productdict)) {
            $proquerylist = implode(",", $productdict);
            $proquery = " and pt.id in ($proquerylist) ";
        }

        $categoriesString = $this->Product_model->stringCategories($category_id) . ", " . $category_id;
        $categoriesString = ltrim($categoriesString, ", ");

        $product_query = "
                       
    select * from(
    (select pt.id as product_id, pt.* from products as pt where keywords like '%$searchtext%') 
    union
    (select pt.id as product_id, pt.* from products as pt where title like '%$searchtext%' )
        ) as pt where pt.id > 0 

                "
                . " $pricequery $proquery";
        $product_result = $this->Product_model->query_exe($product_query);

        $productListSt = [];

        $productListFinal = [];

        $pricecount = [];

        foreach ($product_result as $key => $value) {
            $value['attr'] = $this->Product_model->singleProductAttrs($value['product_id']);
            array_push($productListSt, $value['product_id']);
            array_push($pricecount, $value['price']);
            array_push($productListFinal, $value);
        }

        $attr_filter = array();
        $pricelist = array();
        if (count($productListSt)) {
            $pricelist = array('maxprice' => max($pricecount), 'minprice' => min($pricecount));


            $productString = implode(",", $productListSt);


            $attr_query = "select count(cav.id) product_count, '' as checked, cav.attribute_value, cav.id, pa.attribute, pa.attribute_id from product_attribute as pa
        join category_attribute_value as cav on cav.id = pa.attribute_value_id
        where pa.product_id in ($productString)
        group by cav.id";
            $attr_result = $this->Product_model->query_exe($attr_query);


            foreach ($attr_result as $key => $value) {
                $filter = $value['attribute'];
                if (isset($attr_filter[$filter])) {
                    array_push($attr_filter[$filter], $value);
                } else {
                    $attr_filter[$filter] = [];
                    array_push($attr_filter[$filter], $value);
                }
            }
        }
        ob_clean();
        $this->output->set_header('Content-type: application/json');
        $productArray = array('attributes' => $attr_filter,
            'products' => $productListFinal,
            'product_count' => count($product_result),
            'price' => $pricelist);
        $this->response($productArray);
    }

    //category list api
    function categoryMenu_get() {
        $categories = $this->Product_model->productListCategories(0);
        $this->response($categories);
    }

    //order detail get
    function orderDetails_get($order_id) {
        $order_details = $this->Product_model->getOrderDetails($order_id);
        $this->response($order_details);
    }

    function order_mail_get($order_id, $order_no) {
        $subject = "Order Confirmation - Your Order with www.bespoketailorshk.com [$order_no] has been successfully placed!";
        $this->Product_model->order_mail($order_id, $subject);
    }

    function order_mailcheck_get($order_id, $order_no) {
        $this->db->where('order_id', $order_id);
        $query = $this->db->get('user_order_log');
        $orderlog = $query->result_array();
        if (count($orderlog)) {
            $this->response(array('checkpre' => '1'));
        } else {
            $this->response(array('checkpre' => '0'));
        }
    }

    function order_mailchecksend_get($order_id, $order_no) {
        $subject = "Order Confirmation - Your Order with www.bespoketailorshk.com [$order_no] has been successfully placed!";
        $this->Product_model->order_mail($order_id, $subject);
    }

    function orderMailVender_get($order_id) {
        $this->Product_model->order_mail_to_vendor($order_id);
        $this->response("hell");
    }

    function cartOperationShirt_get() {
        if ($this->checklogin) {
            $session_cart = $this->Product_model->cartData($this->user_id);
        } else {
            $session_cart = $this->Product_model->cartData();
        }

        $tempss = array();
        foreach ($session_cart['products'] as $key => $value) {

            $tempss[$key] = $value;
            $tempss[$key]['folder'] = $value['folder'];


            $prodct_details = $this->Product_model->productDetails($value['product_id']);
            $tempss[$key]['file_name2'] = $prodct_details['file_name2'];
        }
        $session_cart['products'] = $tempss;
        $this->response($session_cart);
    }

    function cartOperationShirtSingle_get($product_id) {
        $prodct_details = $this->Product_model->productDetails($product_id);
//        $prodct_details['folder'] = $prodct_details['title'];
        $this->response($prodct_details);
    }

    //function for product list
    function cartOperationCustom_post() {
        $product_id = $this->post('product_id');
        $quantity = $this->post('quantity');
        $custome_id = $this->post('custome_id');
        $customekey = $this->post('customekey');
        $customevalue = $this->post('customevalue');

        if ($this->checklogin) {
            $session_cart = $this->Product_model->cartOperationCustom($product_id, $quantity, $custome_id, $customekey, $customevalue, $this->user_id);
            $session_cart = $this->Product_model->cartData($this->user_id);
        } else {
            $session_cart = $this->Product_model->cartOperationCustom($product_id, $quantity, $custome_id, $customekey, $customevalue);
            $session_cart = $this->Product_model->cartData();
        }

        $this->response($session_cart['products'][$product_id]);
    }

    //get appinment class
    function getAppointment_get() {
        $query = $this->db->get('appointment_entry');
        $appointment_entry = $query->result_array();

        $this->db->select("country");
//        $this->db->where('status', 'active');
        $this->db->group_by("country");
        $this->db->order_by("country asc");
        $query = $this->db->get('appointment_entry');
        $appointment_country = $query->result_array();
        $appointment_final_data = array();
        $country_city_array = array();




        //array of cities
        $appointment_city_data = array();
        $this->db->select("city_state, days, hotel, address,country");
//            $this->db->where('status', 'active');
        $this->db->group_by("city_state");
        $this->db->group_by("days");
        $this->db->order_by("city_state asc");
        $query = $this->db->get('appointment_entry');

        $appointment_city_dates = $query->result_array();
        foreach ($appointment_city_dates as $key => $value) {

            $country = $value["country"];
            if (isset($country_city_array[$country])) {
                array_push($country_city_array[$country], array(
                    "city_state" => $value["city_state"],
                    "city_days" => $value["city_state"] . ", " . $value["days"]));
            } else {
                $country_city_array[$country] = [array(
                "city_state" => $value["city_state"],
                "city_days" => $value["city_state"] . ", " . $value["days"])];
            }

            //time data from dates
            $this->db->select("date, from_time, to_time");
//            $this->db->where('status', 'active');
            $this->db->where('city_state', $value["city_state"]);
            $this->db->order_by("start_date asc");
            $query = $this->db->get('appointment_entry');
            $appointment_date_time = $query->result_array();
            $appointment_city_data[$value['city_state']] = array(
                'hotel' => $value["hotel"],
                'address' => $value["address"],
                'days' => $value["days"],
                'dates' => $appointment_date_time
            );
        }
        $appointment_final_data["country_data"] = $appointment_country;
        $appointment_final_data['city_hotel_data'] = $appointment_city_data;
        $appointment_final_data["country_city"] = $country_city_array;

        $this->response($appointment_final_data);
    }

    public function getStyleGallary_get($styleurl) {
        $stylearray = array(
            'MensCustomSuits' => [
                array(
                    "style_no" => "901",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/1.jpg",
                ),
                array(
                    "style_no" => "902",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/2.jpg",
                ),
                array(
                    "style_no" => "903",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/3.jpg",
                ),
                array(
                    "style_no" => "904",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/4.jpg",
                ),
                array(
                    "style_no" => "905",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/5.jpg",
                ),
                array(
                    "style_no" => "906",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/6.jpg",
                ),
                array(
                    "style_no" => "907",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/7.jpg",
                ),
                array(
                    "style_no" => "908",
                    "title" => "SUPER 130'S",
                    "short_description" => "SUPER 130'S MADE IN ITALY",
                    "image" => "mens/suits/15.jpg",
                ),
            ],
            "MensCustomShirts" => [
                array(
                    "style_no" => "801",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/1.jpg",
                ),
                array(
                    "style_no" => "802",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/2.jpg",
                ),
                array(
                    "style_no" => "803",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/3.jpg",
                ),
                array(
                    "style_no" => "804",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/4.jpg",
                ),
                array(
                    "style_no" => "805",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/5.jpg",
                ),
                array(
                    "style_no" => "806",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/6.jpg",
                ),
                array(
                    "style_no" => "807",
                    "title" => "2 PLY 100% COTTON",
                    "short_description" => "2 PLY 100% COTTON MADE IN ITALY",
                    "image" => "mens/shirts/7.jpg",
                ),
            ]
        );
        $this->response($stylearray[$styleurl]);
    }

    public function setStyleEnquiry_post() {
        $stylearray = array(
            'image' => $this->post('image'),
            'short_description' => $this->post('short_description'),
            'title' => $this->post('title'),
            'style_no' => $this->post('style_no'),
        );
        $styleSessionData = $this->session->userdata('session_style');
        if (isset($styleSessionData[$this->post('style_no')])) {
            
        } else {
            $styleSessionData[$this->post('style_no')] = $stylearray;
        }
        $this->session->set_userdata('session_style', $styleSessionData);
        $this->response($styleSessionData);
    }

    public function removeStyleEnquiry() {
        $style_no = $this->post('style_no');
        $styleSessionData = $this->session->userdata('session_style');
        unset($styleSessionData[$style_no]);
        $this->session->set_userdata('session_style', $styleSessionData);
        $this->response($styleSessionData);
    }

}

?>