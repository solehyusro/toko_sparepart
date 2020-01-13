<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
	function insert_data()
	{
		$kata = $this->input->post('kata');
		if ($kata == null) {
			$this->session->set_flashdata(
				'msg',
				'<div class="alert alert-danger">
						<h4>Oppss</h4>
						<p>Tidak ada kata dinput.</p>
					</div>'
			);
			$this->load->view('alert');
		} else {
			$this->session->set_flashdata(
				'msg',
				'<div class="alert alert-success">
						<h4>Berhasil </h4>
						<p>Anda berhasil input kata ' . $kata . '.</p>
					</div>'
			);
			$this->load->view('alert');
		};
	}
}
