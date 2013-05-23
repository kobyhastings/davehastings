<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership_model extends MY_Model {
	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_order_by = 'username';
	

	/*--------------------------------------------------------------------------
		function()	
	--------------------------------------------------------------------------*/
	public function login() {
		$user = $this->get_by(array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		), TRUE);

		if (count($user) == 1) {
			$data = array(
				'username' => $user->username,
				'user_id' => $user->id, 
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata( $data );
			return TRUE;
		}

		return FALSE;
	}

	/*--------------------------------------------------------------------------
		function()	
	--------------------------------------------------------------------------*/
	public function logout() {
		$this->session->sess_destroy();
	}
	/*--------------------------------------------------------------------------
		function()	
	--------------------------------------------------------------------------*/
	public function loggedin() {
		return (bool) $this->session->userdata('is_logged_in');
	}
	
	/*--------------------------------------------------------------------------
		get_new() gets an empty user instance	
	--------------------------------------------------------------------------*/
	public function get_new() {
		$user = new stdClass();
		$user->id = NULL;
		$user->username = '';
		$user->password = '';
		$user->email = '';
		$user->active = 1;
		$user->role_id = '';

		return $user;
	}

	function getUserRoleName($id) {
		$this->db->where('role_id', $id);
		$query = $this->db->get('roles');
		return $query->row()->name;
	}
}

/* End of file membership_model.php */
/* Location: ./application/models/membership_model.php */
