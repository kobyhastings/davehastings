<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data['main_content'] = 'admin/index';
		$this->load->view('admin/includes/template', $data);
	}

	public function blog($start = 0) {
		$data['main_content'] = 'admin/blogposts';

		$this->load->library('pagination');
		$config['base_url'] = base_url() . '/index.php/admin/home/index/';
		$config['total_rows'] = count($this->db->get('blogposts')->num_rows());
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();

		$this->db->order_by('id', 'desc');
		$data['posts'] = $this->db->get('blogposts', $config['per_page'], $start)->result();

		$this->load->view('admin/includes/template', $data);
	}

	public function savePost() {
		$post = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'date' => date('m/d/Y')
			);

		$this->db->insert('blogposts', $post);
		redirect('admin/home/blog');
	}

	public function updatePost($id) {
		$post = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content')
			);

		$this->db->where('id', $id);
		$this->db->update('blogposts', $post);
		redirect('admin/home/blog');
	}

	public function editPost($id) {
		$data['main_content'] = 'admin/edit-blog-post';
		$this->db->where('id', $id);
		$data['post'] = $this->db->get('blogposts')->row();
		$this->load->view('admin/includes/template', $data);
	}

	public function deletePost($id) {
		$this->db->where('id', $id);
		$this->db->delete('blogposts');
		redirect('admin/home/blog');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */