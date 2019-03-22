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
        $timeslot = [
            "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM",
            "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM", "08:00 PM",
            "09:00 PM",
        ];
        $data['timeslot'] = $timeslot;
        $appointmentdetailslocal = [
            array(
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
        $data['appointmentdata'] = $appointmentdetails;
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
        $this->load->view('Pages/appointment', $data);
    }

}
