<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mendaftar extends CI_Controller {


	public function index()
	{
		$this->load->view('mendaftar_v');
	}

	public function procs(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('hp','Nomor HP','numeric',array('numeric' => 'harus diisi hanya angka'));
 
		if($this->form_validation->run()){
			$dtpostin=$this->input->post();
			$dtpostin['calon_id']=uniqid();
			date_default_timezone_set('Asia/Jakarta');
			$date = date('Y-m-d', time());
			$dtpostin['tgl_daftar']=$date;
			unset($dtpostin['submit']);
			$this->load->model('CalonSiswa_m','m');
			$this->m->save($dtpostin);
			$this->load->view('sukses_v');
		}else{
			$this->load->view('mendaftar_v');
		}



		$dtpost=$this->input->post();

		$dtin=array();
	}
}
