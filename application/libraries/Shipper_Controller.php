<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipper_Controller extends MY_Controller {

	public $shipper = array();

	function __construct() {
		parent::__construct();
		$this->load->model('shipper_model');
		$this->load->model('membership_model');
		$this->data['meta_title'] = "Shipper Dashboard";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		
		//Login Check
		$exceptions = array( 'public/login/index', 'public/login/logout');
		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->membership_model->loggedin() == FALSE) {
				redirect('public/login');
			}
		}

		//Supplier registration check
		$exceptions = array( 'shipper/register');
		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->shipper_model->isRegistered() == FALSE) {
				redirect('shipper/register');
			}
			else {
				$userID = $this->session->userdata('userID');
				$this->shipper = $this->shipper_model->get_by(array('shipperUserID'=>$userID), TRUE);
			}
		}
	}
}

/* End of file Shipper_Controller.php */
/* Location: ./application/libraries/Shipper_Controller.php */