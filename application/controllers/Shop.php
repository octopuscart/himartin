<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->session_user = $this->session->userdata('admin_login');
    }

    public function error404() {
        $this->load->view('errors/error_404');
    }

    public function index() {
        $baselink = 'http://' . $_SERVER['SERVER_NAME'];
        if ($baselink == site_url) {
            
        } else {
//            redirect(site_url);
        }
        $this->db->select("country, date");
        $this->db->select("country, hotel, address, days");
//        $this->db->where('status', 'active');
        $this->db->group_by("country");
        $this->db->order_by("DATE(date)<DATE(NOW()) asc");
        $this->db->order_by("IF(MONTH(date) < MONTH(NOW()), MONTH(date) + 12, MONTH(date)),
 DAY(date) desc");

        $query = $this->db->get('appointment_entry');
        $appointment_country = $query->result_array();



        $cdate = date("Y-m-d");
//test date
//$cdate = "2019-04-22"; 


        $yourip = json_decode(file_get_contents("https://api.ipify.org?format=json&callback=DisplayIP"));

        $ip = $yourip->ip;

        $locationdata = json_decode(file_get_contents("http://ip-api.com/json/" . $ip));

        $countryc = $locationdata->country;

        $data["country"] = $countryc;

        $this->db->select("country, hotel, address, days, city_state");
        $this->db->where('date=', $cdate);
        $this->db->order_by("date asc");
// $this->db->group_by("country");
        $this->db->limit(2);
        $query = $this->db->get('appointment_entry');

        $appointment_current_country1 = $query->result_array();

        $appointment_current_country = [];
        $appointment_current_country2 = [];

        foreach ($appointment_current_country1 as $key => $value) {
            $countrydb = $value['country'];


            $this->db->select("date");
            $this->db->where('country=', $countrydb);
            $this->db->where('date>=', $cdate);
            $this->db->order_by("date asc");
            $query = $this->db->get('appointment_entry');
            $appointment_country_date = $query->result_array();


            $d_first = reset($appointment_country_date);
            $d_last = end($appointment_country_date);

            $value['first_date'] = $d_first['date'];
            $value['last_date'] = $d_last['date'];

            array_push($appointment_current_country2, $value);

            if ($value['country'] == $countryc) {
                array_push($appointment_current_country, $value);
            } else {
                
            }
        }
        if (count($appointment_current_country)) {
            $appointment_current_country = $appointment_current_country;
        } else {
            $appointment_current_country = $appointment_current_country2;
        }

        $applicable_class = count($appointment_current_country) == 1 ? 'onecountry' : 'twocoutry';
        $data['applicable_class'] = $applicable_class;

//        $appointment_current_country = count($appointment_current_country) > 0 ? $appointment_current_country[0] : false;

        $data['appointment_current_country'] = $appointment_current_country;

        $countrylist = array();

        $countryimage = array(
            "Belgium" => "belgium.jpg",
            "Australia" => "australia.jpg",
            "U.S.A" => "usa.jpg",
            "Canada" => "canada.jpg",
            "Hong Kong" => "canada.jpg",
            "New Zealand" => "newzealand.jpg",
            "Netherlands" => "netherlands.jpg",
            "Germany" => "germany.jpg",
            "Switzerland" => "sweetzerland.jpg",
            "Norway" => "norway.jpg"
        );
        foreach ($appointment_country as $key => $value) {
            $countrylist[$value['country']] = $countryimage[$value['country']];
        }
        unset($countrylist['Hong Kong']);

        $data['countryimages'] = $countryimage;

        $data['countrylist'] = $countrylist;

        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        if (isset($_POST['submit'])) {
            $referral = array(
                "name" => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'friend_email' => $this->input->post('friend_email'),
                'friend_name' => $this->input->post('friend_name'),
            );
// print_r($appointment);
//$this->db->insert('referral', $referral);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('friend_email');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('friend_email'));
                $this->email->cc($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Welcome to " . site_name;
                $orderlog = array(
                    'log_type' => 'Referred ',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Referred',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $referral;
                $htmlsmessage = $this->load->view('Email/referral', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect(site_url("/"));
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect(site_url("/"));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }


        $this->load->view('home', $data);
    }

    public function contactus() {
        $data['checksent'] = 0;


        if (isset($_POST['sendmessage'])) {
            if ($this->input->post('anti_spam') == 8) {
                
            } else {
                redirect('contact-us?error=cw');
            }
            $web_enquiry = array(
                'last_name' => "",
                'first_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('full_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;

                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                $this->email->message($htmlsmessage);

                $this->email->print_debugger();
                $send = $this->email->send();
                if ($send) {
                    $data['checksent'] = 1;
                } else {
                    $data['checksent'] = 2;
                    $error = $this->email->print_debugger(array('headers'));
                }
            }

//redirect('contact-us');
        }
        $this->load->view('Pages/contactus', $data);
    }

    public function aboutus() {
        $this->load->view('Pages/aboutus');
    }

    public function faqs() {
        $this->load->view('Pages/faqs');
    }

    public function locallogin() {

        $data['usertype'] = $this->session_user;
        if (isset($_POST['submit'])) {
            $password = $this->input->post('password');
            if ($password = "Hongout@HKBT") {
                $this->session->set_userdata('admin_login', array("user_type" => "admin"));
                redirect("admin");
            } else {
                
            }
        }

        if (isset($_GET['logout'])) {
            $this->session->set_userdata('admin_login', array());
            redirect("admin");
        }


        $this->load->view('Pages/locallogin', $data);
    }

    public function subscribe() {
        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                'email' => $this->input->post('email'),
            );
// print_r($appointment);
            $this->db->insert('appointment_list', $appointment);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Thank you for your subscription";
                $orderlog = array(
                    'log_type' => 'Thank You For Subscribing',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Subscribing User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $appointment;
                $htmlsmessage = $this->load->view('Email/subscribing', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect(site_url("/"));
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect(site_url("/"));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
        $this->load->view('Pages/subscribe');
    }

    public function appointment() {
        $timeslot = [
            "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM",
            "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM", "08:00 PM",
            "09:00 PM",
        ];

        $data['timeslot'] = $timeslot;

        $appointmentdetailslocal = [array(
        "type" => "local",
        "id" => "au0_app",
        "country" => "Hong Kong",
        "city_state" => "Kowloon,  T. S. T.",
        "hotel" => "SHOWROOM",
        "address" => "Shop No. 30, G/F, <br/>Mirador Mansion, 1-J Mody Road, <br/> 54-64 Nathan Road, Tsim Sha Tsui,<br/> Kowloon, Hong Kong",
        "days" => "",
        "start_date" => "",
        "end_date" => "",
        "contact_no" => " +(852) 2369 1196",
        "dates" => [
            array("date" => date("Y-m-d"), "timing1" => "09:00 AM", "timing2" => "09:00 PM"),
            array("date" => "Sun", "timing1" => "09:00 AM", "timing2" => "07:00 PM"),
        ]
            ),];

        $data['appointmentdetailslocal'] = $appointmentdetailslocal;





        $appointmentdetails = [

            array(
                "type" => "globle",
                "id" => "au1_app",
                "country" => "Australia",
                "city_state" => "Melbourne",
                "hotel" => "Holiday Inn Melbourne on Flinders",
                "address" => "575 Flinders Lane,<br/>  Melbouurne, Victoria 3000,<br/> Austraila",
                "days" => "11th Feb - 12th Feb 2019",
                "start_date" => "11-02-2019",
                "end_date" => "12-02-2019",
                "contact_no" => "+61 0424 715 368",
                "dates" => [
                    array("date" => "11th Feb 2019", "timing1" => "09:00 AM", "timing2" => "08:00 PM"),
                    array("date" => "12th Feb 2019", "timing1" => "09:00 AM", "timing2" => "02:00 PM"),
                ]
            ),
            array(
                "type" => "globle",
                "id" => "au2_app",
                "country" => "Australia",
                "city_state" => "Canberra",
                "hotel" => "Diplomat Hotel",
                "address" => "2 Hely St, Griffith ACT 2603,<br/> Australia",
                "days" => "13th Feb - 14th Feb 2019",
                "start_date" => "13-02-2019",
                "end_date" => "14-02-2019",
                "contact_no" => "+61 0424 715 368",
                "dates" => [
                    array("date" => "13th Feb 2019", "timing1" => "09:00 AM", "timing2" => "08:00 PM"),
                    array("date" => "14th Feb 2019", "timing1" => "09:00 AM", "timing2" => "02:00 PM"),
                ]
            ),
            array(
                "type" => "globle",
                "id" => "au3_app",
                "country" => "Australia",
                "city_state" => "Sydney",
                "hotel" => "Holiday Inn Potts Point-Sydney",
                "address" => "203 Victoria St, <br/>Potts Point NSW 2011,<br/> Australia",
                "days" => "15th Feb - 17th Feb 2019",
                "start_date" => "15-02-2019",
                "end_date" => "17-02-2019",
                "contact_no" => "+61 0424 715 368",
                "dates" => [
                    array("date" => "15th Feb 2019", "timing1" => "09:00 AM", "timing2" => "08:00 PM"),
                    array("date" => "16th Feb 2019", "timing1" => "09:00 AM", "timing2" => "08:00 PM"),
                    array("date" => "17th Feb 2019", "timing1" => "09:00 AM", "timing2" => "02:00 PM"),
                ]
            ),
            array(
                "type" => "globle",
                "id" => "au4_app",
                "country" => "Australia",
                "city_state" => "Brisbane",
                "hotel" => "Holiday Inn Express Brisbane Central",
                "address" => "168 Wharf St, <br/>Spring Hill QLD 4000,<br/> Australia",
                "days" => "18th Feb - 19th Feb 2019",
                "start_date" => "18-02-2019",
                "end_date" => "19-02-2019",
                "contact_no" => "+61 0424 715 368",
                "dates" => [
                    array("date" => "18th Feb 2019", "timing1" => "09:00 AM", "timing2" => "08:00 PM"),
                    array("date" => "19th Feb 2019", "timing1" => "09:00 AM", "timing2" => "02:00 PM"),
                ]
            ),
            array(
                "type" => "globle",
                "id" => "au5_app",
                "country" => "Australia",
                "city_state" => "Adelaide",
                "hotel" => "Holiday Inn Express Adelaide City Centre",
                "address" => "30 Blyth St, <br/>Adelaide SA 5000,<br/> Australia",
                "days" => "20th Feb - 21st Feb 2019",
                "start_date" => "20-02-2019",
                "end_date" => "21-02-2019",
                "contact_no" => "+61 0424 715 368",
                "dates" => [
                    array("date" => "20th Feb 2019", "timing1" => "09:00 AM", "timing2" => "08:00 PM"),
                    array("date" => "21st Feb 2019", "timing1" => "09:00 AM", "timing2" => "02:00 PM"),
                ]
            ),
            array(
                "type" => "globle",
                "id" => "au6_app",
                "country" => "Australia",
                "city_state" => "Perth",
                "hotel" => "Holiday Inn Perth City Centre",
                "address" => "778/788 Hay St, <br/>Perth WA 6000, <br/>Australia",
                "days" => "22nd Feb 2019",
                "start_date" => "22-02-2019",
                "end_date" => "22-02-2019",
                "contact_no" => "+61 0424 715 368",
                "dates" => [
                    array("date" => "22nd Feb 2019", "timing1" => "09:00 AM", "timing2" => "04:00 PM"),
                ]
            ),
        ];
        //$appointmentdetails = [];

        $ausappointment = $this->Product_model->AppointmentDataByCountry("Australia");

        $data['appointmentdata'] = $ausappointment;

        $usasappointment = $this->Product_model->AppointmentDataByCountry("U.S.A");

        $data['appointmentdatausa'] = $usasappointment;
        $allappointment = $this->Product_model->AppointmentDataAll();
        $data['appointmentdatausa'] = $allappointment;

        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                "city_state" => $this->input->post('city_state'),
                "hotel" => $this->input->post('hotel'),
                "address" => $this->input->post('address'),
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => $this->input->post('no_of_person'),
                'referral' => $this->input->post('referral'),
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Local",
            );

            $this->db->insert('appointment_list', $appointment);
            $appointment['contact_no2'] = $this->input->post('contact_no2');


            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_sender, $sendername);
                $this->email->reply_to(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = email_sender_name . " Appointment : " . $appointment['select_date'] . " (" . $appointment['select_time'] . ")";
                $orderlog = array(
                    'log_type' => 'Appointment',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Appointment User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);

                $subject = $subjectt;
                $this->email->subject($subject);

                $appointment['appointment'] = $appointment;


                $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        echo json_encode("send");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        echo json_encode($error);
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/appointment');
        }
        $this->load->view('pages/appointment', $data);
    }

    public function lookbook() {
        $data['active_block'] = 'mens';
        $this->load->view('Pages/lookbook', $data);
    }

    public function lookbook_style($styleid) {


        $stylearray = array(
            'MensCustomSuits' => array("gender" => "Mens", "title" => "Mens Custome Suits"),
            "MensCustomShirts" => array("gender" => "Mens", "title" => "Mens Custome Shirts"),
            'MensCustomJackets' => array("gender" => "Mens", "title" => "Mens Custome Jackets"),
            'MensCustomVests' => array("gender" => "Mens", "title" => "Mens Custome Vests"),
            'MensCustomPants' => array("gender" => "Mens", "title" => "Mens Custome Pants"),
            'MensCustomTuxedo' => array("gender" => "Mens", "title" => "Mens Custome Tuxedo Suts"),
            'MensCustomTopCoat' => array("gender" => "Mens", "title" => "Mens Custome Top Coats"),
            'WomensCustomShirts' => array("gender" => "Womens", "title" => "Womens Custome Shirt"),
            'WomensCustomDress' => array("gender" => "Womens", "title" => "Womens Custome Dress"),
            'WomensCustomSuits' => array("gender" => "Womens", "title" => "Womens Custome Suits"),
            'WomensCustomPants' => array("gender" => "Womens", "title" => "Womens Custome Pants"),
            'WomensCustomTopCoat' => array("gender" => "Womens", "title" => "Womens Custome Top Coats"),
        );
        $configuration = $this->config->load('seo_config');

        $seotitle_n = $stylearray[$styleid]['title'];

        $seotitle_o = $this->config->item("seo_title");

        $seotitle = str_replace("Custom Made Suits, Shirts, Tuxedos", $seotitle_n, $seotitle_o);

        $this->config->set_item('seo_title', $seotitle);


        if ($this->session_user) {
            $checklogin = true;
        } else {
            $checklogin = false;
        }


        $data['checklogin'] = $checklogin;



        $data['active_block'] = $styleid;
        $data['active_gender'] = $stylearray[$styleid];
        $this->load->view('Pages/lookbook_style', $data);
    }

    public function stylingTips() {
        $query = $this->db->get('style_tips');
        $data['stylebook'] = $query->result_array();
        $this->load->view('Pages/stylebook', $data);
    }

    public function stylingTipsTag() {
        $tag = $this->input->get('tag');
        $this->db->where("tag like '%$tag%'");
        $query = $this->db->get('style_tips');

        $tagblock = $query->result_array();

        $data['stylebook'] = $tagblock;

        $this->load->view('Pages/stylebook', $data);
    }

    function styleTipsDetails($style_index, $title) {

        if ($this->session_user) {
            $checklogin = true;
        } else {
            $checklogin = false;
        }

        if (isset($_POST['submit'])) {
            $blogdata = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description')
            );
            $this->db->set($blogdata);
            $this->db->where('id', $style_index); //set column_name and value in which row need to update
            $this->db->update('style_tips');
            redirect("styleTips/".$style_index."/".$title);
        }


        $data['checklogin'] = $checklogin;


        $this->db->where('id', $style_index);
        $query = $this->db->get('style_tips');

        $styleobj = $query->row();
        $data['styleobj'] = $styleobj;

        $configuration = $this->config->load('seo_config');

//$seotitle_o = $this->config->item("seo_title");

        $seotitle1 = "Hong Kong Bespoke Tailors | " . $styleobj->title;
        $seodescription = $styleobj->description;

        $this->config->set_item('seo_title', $seotitle1);
        $this->config->set_item('seo_desc', $seodescription);


        $this->db->from('style_tips');
        $this->db->order_by("id", "desc");
        $this->db->limit(5);
        $query = $this->db->get();
        $stylebook = $query->result_array();


        $data['stylebook'] = $stylebook;

        $this->db->from('style_tips');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        $stylebook1 = $query->result_array();

        $tagarray1 = array();
        foreach ($stylebook1 as $key => $value) {
            $tags = $value['tag'];
            $tagarray = explode(", ", $tags);
            foreach ($tagarray as $key1 => $value1) {
                $tagarray1[$value1] = [];
            }
        }

        $data['tagsarray'] = $tagarray1;



        $this->load->view('Pages/stylebookdeails', $data);
    }

}
