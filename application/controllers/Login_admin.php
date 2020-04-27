<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends MY_Controller {

	function __construct(){
	    parent::__construct();
		$this->load->model('Dataguru_m','main_model');
	}
	public function index(){
		$dts['pesan_error']="";
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');
		if ($this->form_validation->run()){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($row=$this->main_model->cek_username($username)){
				$realpass=$row['password'];
				if($password==$realpass){
					$this->session->set_userdata('is_login','guru');
					$this->session->set_userdata('user',$row);
					redirect('/tampil_calon', 'refresh');
				}else{
					$dts['pesan_error']="<div class='text-danger'>Username benar, Password SALAH!</div>";
				}
			}else{
				$dts['pesan_error']="<div class='text-danger'>Username $username belum terdaftar!</div>";
			}
		}
		$dts['tmpl']=$this->link_tmpl;
		$this->load->view('templates/sbadmin2/login_v',$dts);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login_admin','refresh');
	}

}

