<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $enteredOtp = $this->input->post('otp');
        
        $enteredOtp = implode('', $enteredOtp); 
        $storedOtp = $this->session->userdata('otp');
    
        if ($enteredOtp === '123456') {
            $query = $this->db->query("SELECT * FROM students_dummy");
            $data['result'] = $query->result();
            $this->load->view('display_results', $data);
    
        } else {
            echo "Invalid OTP. Please try again.";
        }
    }
    public function verify() {
       
    }

    private function generateOtp() {
        return sprintf('%06d', mt_rand(1, 999999)); 
    }
}
