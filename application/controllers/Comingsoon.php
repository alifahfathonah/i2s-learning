<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comingsoon extends CI_Controller {


	public function index()
	{
		$dtsend['tdir']=base_url('template/comingsoon_03/');
		$dtsend['timg']='logo.png';
		$this->load->view('comingsoon_v',$dtsend);
	}


		public function amanahjaya()
	{
		$dtsend['tdir']=base_url('template/comingsoon_03/');
		$dtsend['timg']='aj2.png';
		$this->load->view('comingsoon_v',$dtsend);
	}


}
