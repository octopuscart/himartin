<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $baselink = 'http://' . $_SERVER['SERVER_NAME'];
        if ($baselink == site_url) {
            
        } else {
//            redirect(site_url);
        }
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

        $data = [];
        $data['sentemail'] = "0";
        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                "city_state" => $this->input->post('city_state'),
                "hotel" => $this->input->post('hotel'),
                "address" => $this->input->post('address'),
                'last_name' => "",
                'first_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'contact_no' => $this->input->post('contact_no'),
                'select_time' => $this->input->post('select_time'),
                'select_date' => $this->input->post('select_date'),
                'no_of_person' => "",
                'referral' => "",
                'datetime' => date("Y-m-d H:i:s a"),
                'appointment_type' => "Global",
            );
            // print_r($appointment);
            $this->db->insert('appointment_list', $appointment);
            $appointment['city_days'] = $this->input->post('city_days');
            $appointment['remark'] = $this->input->post('remark');
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('full_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
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
                    $data['sentemail'] = "1";
                    $data['message'] = "Hello " . $sendernameeq . "<br/> Your appointment has been booked. <br/>Thanks";
                    if ($send) {
                        
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
        $this->load->view('Pages/appointment', $data);
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
            'WomensCustomShirts' => array("gender" => "Womens", "title" => "Womens Custome Suits"),
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



        $data['active_block'] = $styleid;
        $data['active_gender'] = $stylearray[$styleid];
        $this->load->view('Pages/lookbook_style', $data);
    }

    public function stylingTips() {
        $query = $this->db->get('style_tips');
        $data['stylebook'] = $query->result_array();
        $this->load->view('Pages/stylebook', $data);
    }

    function styleTipsDetails($style_index, $title) {
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
