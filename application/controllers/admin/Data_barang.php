<?php

class Data_barang extends CI_Controller{

	public function index()
	{
		$data['barang'] = $this->rental_model->get_data('ksb')->result();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');
		
	}

	public function tambah_barang()
	{
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');


	}

}

?>