<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}

	public function index()
	{
		if ($_GET['s'] != null) {
			$db = $this->home_m->get_betta($_GET['s']);
			if ($db->num_rows() > 0) {
				$data = [
					'row' => $db->row(),
					'select' => $this->home_m->get_betta(),
				];
				$this->template->load('template', 'home', $data);
			} else {
				$this->session->set_flashdata('return', 'Kode Betta Tidak terdaftar pada sistem...');
				redirect();
			}
		} else {
			$db = $this->home_m->get_betta();
			$data = [
				'select' => $db,
			];
			$this->template->load('template', 'home', $data);
		}
	}

	function galery()
	{
		$data['row'] = $this->home_m->get_betta();
		$this->template->load('template', 'galery', $data);
	}

	function auth()
	{
		$this->load->view('admin/login');
	}

	function auth_proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->home_m->get_enroll($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->id_user,
					'email' => $row->email_user,
					'nama' => $row->nama_user,
					'_token' =>  random_string('alnum', 25),
				);
				$this->session->set_userdata($params);
				redirect('admin/beranda');
			} else {
				$this->session->set_flashdata('login', 'Enroll yang dimasukkan salah!, silahkan coba kembali...');
				$this->session->set_flashdata('data', $post['enroll']);
				redirect('auth');
			}
		} else {
			redirect('auth');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
