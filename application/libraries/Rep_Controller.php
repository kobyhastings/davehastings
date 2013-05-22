<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rep_Controller extends MY_Controller {

	public $rep = array();

	function __construct() {
		parent::__construct();
		$this->load->model('rep_model');
		$this->load->model('membership_model');
		$this->data['meta_title'] = "Rep Dashboard";
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
		$exceptions = array( 'rep/register');
		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->rep_model->isRegistered() == FALSE) {
				redirect('rep/register');
			}
			else {
				// get the loggedin reps info
				$userID = $this->session->userdata('userID');
				$this->rep = $this->rep_model->get_by(array('repUserID'=>$userID), TRUE);

				//load rep group model
				$this->load->model('rep_group_model');
				// get rep groups where the owner id is equal the repID of the loggedin rep
				$group = $this->rep_group_model->get_by(array('ownerRepID'=>$this->rep->repID), TRUE);

				// set a constant for the rep nav to know what to display
				$this->data['has_rep_group'] = FALSE;

				// assume no ownership but if there is set a has_rep_group to true instead of false;
				!count($group) || $this->data['has_rep_group'] = TRUE;

				// set a constant for the navigation
				$this->data['in_rep_group'] = FALSE;
				// assume the rep isn't in a group but if he/she is set in group to true
				$this->rep->repGroupID == NULL ||  $this->data['in_rep_group'] = TRUE;

			}
		}
	}

}

/* End of file Rep_Controller.php */
/* Location: ./application/libraries/Rep_Controller.php */