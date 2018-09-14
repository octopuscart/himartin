<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        $data[] = array();
        $cf_name = $this->input->post('cf_name');
        $cf_email = $this->input->post('cf_email');
        $cf_subject = $this->input->post('cf_subject');
        $cf_message = $this->input->post('cf_message');
        $cf_anti_spam = $this->input->post('cf_anti_spam');

        $data['checksent'] = 0;
        $this->email->from($cf_email, $cf_name);
        $this->email->to('sales@shanielfashions.com');
        $this->email->subject('New Enquiry From Website:- ' . $cf_subject);
        $this->email->message($cf_message);
        if ($cf_email) {
            if ($cf_anti_spam == 8) {
                try {
                    $this->email->send();
                    $data['checksent'] = 1;
                    $data['status'] = "Mail Sent!!!";
                } catch (Exception $e) {
                    $e->getMessage();
                }
            } else {
                $data['checksent'] = 2;
                $data['status'] = "Unable to Send Mail.";
            }
        }
        $this->load->view('Pages/contactus', $data);
    }

    public function contactustest() {
        $data[] = array();
    }

    public function clients() {
        $data[] = array();
        $this->load->view('Pages/clients', $data);
    }

}
