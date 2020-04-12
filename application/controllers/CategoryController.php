<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$categories=$this->db->get('tblcategory')->result();
		$this->load->view('category_list', compact('categories'));
	}

	public function add()
	{
		$this->load->view('category_add');
	}

	public function store()
	{
		$name = $this->input->post('name');
		$desc = $this->input->post('description');
		
		$data = array (
			'name' => $name,
			'img' => $this->uploadImage(),
			'description' => $desc
		);

		// var_dump($data);
		// die;
		$this->db->insert('tblcategory', $data);
		redirect('Category/index');
	}

	public function uploadImage()
	{
		$config['upload_path'] = './assets/img/category';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 2048;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('img')) {
			return $this->upload->data('file_name');
		}
		else
		{
			return 'default.png';
		}
	}
}
