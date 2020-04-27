<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	protected $link_tmpl;
	protected $data_user=array();

	function __construct(){
	    parent::__construct();
	    $this->link_tmpl=base_url('template/sbadmin2/');
	}

	function _cekadminsession(){
		if($this->session->userdata('is_login')!=NULL){
			$level=$this->session->userdata('is_login');
			$this->data_user=$this->session->userdata('user');
			if($level!="guru"){
				redirect('/login_admin');
			}
		}else{
			redirect('/login_admin');
		}
	}

	function _ceksiswasession(){
		if($this->session->userdata('is_login')!=NULL){
			$level=$this->session->userdata('is_login');
			$this->data_user=$this->session->userdata('user');
			if($level!="siswa"){
				redirect('/login');
			}
		}else{
			redirect('/login');
		}
	}

	function _tampilkan($main_view,$dt_view){
		$this->load->model('menu_m');
		$dt['rows']=$this->menu_m->get();
		$dt['link_tmpl']=$this->link_tmpl;
		$dt['main_v']=$this->load->view($main_view,$dt_view,TRUE);
		$this->load->view('templates/sbadmin2/page_v',$dt);
	}
}

/**
 * 
 */
class Admin_Controller extends MY_Controller{
	protected $data=array();
	function __construct()
	{
		parent::__construct();
		$this->_cekadminsession();
		$this->data['link_kcfinder']=base_url('template/kcfinder-2.51');
	}
}

class Siswa_Controller extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->_ceksiswasession();
	}
}