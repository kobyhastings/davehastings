<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_Controller extends MY_Controller {

	public $supplier = array();

	function __construct() {
		parent::__construct();
		$this->load->model('supplier_model');
		$this->load->model('membership_model');
		$this->data['meta_title'] = "Supplier Dashboard";
		$this->data['site_name'] = "Supplier Dashboard";
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
		$exceptions = array( 'supplier/register');
		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->supplier_model->isRegistered() == FALSE) {
				redirect('supplier/register');
			}
			else {
				$userID = $this->session->userdata('userID');
				$this->supplier = $this->supplier_model->get_by(array('supplierUserID'=>$userID), TRUE);
			}
		}
	}

}

/* End of file Supplier_Controller.php */
/* Location: ./application/libraries/Supplier_Controller.php */