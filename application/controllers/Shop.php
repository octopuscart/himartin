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

        $this->load->view('home', $data);
    }

    public function contactus() {
        $data['checksent'] = '';
        $this->load->view('Pages/contactus', $data);
    }

    public function aboutus() {
        $this->load->view('Pages/aboutus');
    }

    public function appointment() {

        $data = [];
    
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
                echo $htmlsmessage = $this->load->view('Email/appointment', $appointment, true);
//                if (REPORT_MODE == 1) {
//                    $this->email->message($htmlsmessage);
//                    $this->email->print_debugger();
//                    $send = $this->email->send();
//                    if ($send) {
//                        echo json_encode("send");
//                    } else {
//                        $error = $this->email->print_debugger(array('headers'));
//                        echo json_encode($error);
//                    }
//                } else {
//                    echo $htmlsmessage;
//                }
            }
            redirect('Shop/appointment');
        }
        $this->load->view('Pages/appointment', $data);
    }

}
