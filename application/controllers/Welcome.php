<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
        parent::__construct();
        // Load form validation library
        $this->load->library('form_validation');
    }

	public function index()
    {
        $this->load->view('registration_view');
    }
	public function verification(){

		$phoneValue = $_POST['user_number'];

		if (preg_match('/^[0-9]{10}$/', $phoneValue)) {
			$this->load->view('otp_verification_view');
		} else {
			echo "Invalid phone number!";
		}		
		
	}
}
