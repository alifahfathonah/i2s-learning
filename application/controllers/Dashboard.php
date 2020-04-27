<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
	

	function __construct(){
	    parent::__construct();
		$this->load->model('Dashboard_m','main_model');
		$this->data['ctrl']='dashboard';
		$this->data['nama_page']='Dashboard';
	}
	public function index(){

		$this->data['keterangan_page']='Selamat Datang di Website MTs. Ibnu Husain. ';
		$this->data['link_edit']=base_url('dashboard/edit/1');
		
		$dt_tabel=$this->main_model->getid(1);

		$this->data['tulisan']=$dt_tabel['isi'];
		$this->_tampilkan('templates/sbadmin2/dashboard_v',$this->data);
	}

	function edit($id){
		$this->data['nama_page']='Dashboard';
		$this->data['keterangan_page']='Selamat Datang di Website MTs. Ibnu Husain. ';
		$this->data['link_edit']=base_url('dashboard/edit/1');
		$this->data['target']='dashboard/simpan/'.$id;

		$this->load->library('myform');
		$row=$this->main_model->getid($id);

		//id_dsb,nama,isi 
		$this->data['fields'][]=$this->myform->ftext('ID','id_dsb',$row['id_dsb']);
		$this->data['fields'][]=$this->myform->ftext('Kelompok','kelompok',$row['kelompok']);
		$this->data['fields'][]=$this->myform->ftext('Nama Field','nama',$row['nama']);
		$this->data['fields'][]=$this->myform->ftarea('Tulisan','isi',$row['isi']);

		$this->data['fields'][]=$this->myform->fsubmit('btn-sm btn-primary');
		
		$this->data['tname']='isi';

	
		$this->_tampilkan('templates/sbadmin2/form_v',$this->data);
	}

	function simpan($id){
		$dt=$this->input->post();
		$this->main_model->update($id,$dt);
		$this->index();

	}

	function test_form(){
		$this->data['nama_page']='Dashboard';
		$this->data['keterangan_page']='Selamat Datang di Website MTs. Ibnu Husain. ';
		$this->data['link_edit']=base_url('dashboard/edit/1');
		$this->data['target']='';

		$this->load->library('myform');
		
		$this->data['fields'][]=$this->myform->ftext('Username','username',set_value('username'));

		$this->data['fields'][]=$this->myform->ftext('Tanggal','tgl','','date');
		
		$this->data['fields'][]=$this->myform->ftext('File','file','','file');
		
		$this->data['fields'][]=$this->myform->fcbx('My Checkbox','ON','c1','on',$disabled='');
		
		$this->data['fields'][]=$this->myform->fcbx('My Checkbox2','OFF','c2','off',$disabled='disabled');

		$this->data['fields'][]=$this->myform->fradio_tag();
		
		$this->data['fields'][]=$this->myform->fradio('Radio1','r1','1',$checked='checked');
		$this->data['fields'][]=$this->myform->fradio('Radio2','r1','2');
		$this->data['fields'][]=$this->myform->fradio('Radio3','r1','3');
		
		$this->data['fields'][]=$this->myform->fradio_tag('end');
		$opt=array(
			array('value'=>'1','label'=>'kesatu'),
			array('value'=>'2','label'=>'kedua'),
			array('value'=>'3','label'=>'ketiga'),
		);
		$this->data['fields'][]=$this->myform->fselect("dipilihh",'pilih',$opt);
		
		$this->data['fields'][]=$this->myform->ftarea('Soal','soal','wer ewer ewerewer ewer');
		
		$this->data['fields'][]=$this->myform->fsubmit('btn-sm btn-primary');

	
		$this->_tampilkan('templates/sbadmin2/form_v',$this->data);
	}


}



