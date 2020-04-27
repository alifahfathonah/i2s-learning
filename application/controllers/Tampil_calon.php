<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil_calon extends Admin_Controller {

	
	function __construct(){

	    parent::__construct();
		$this->load->model('CalonSiswa_m','main_model');
		$this->data['ctrl']='dashboard';
		$this->data['nama_page']='Dashboard';


	}
	public function index(){

		
		$this->data['keterangan_page']='Berikut merupakan data masuk dari PPDB Online 2020. ';
		$this->data['keterangan_page'].=' Silahkan lanjut untuk proses diterima atau tidak.';
		$this->data['tb_head']='<th>Nama</th>';
		$this->data['tb_head'].='<th>Alamat</th>';
		$this->data['tb_head'].='<th>Asal Sekolah</th>';
		$this->data['tb_head'].='<th>HP</th>';
		$this->data['tb_head'].='<th>Detail</th>';
		$this->data['tb_head'].='<th>Hapus</th>';
		
		$this->data['dt_main']=array();
		$this->data['link_tambah']=current_url().'/edit/';
		$linkdetail=current_url().'/edit/';
		$linkhapus=current_url().'/hapus/';
		
		$dt_tabel=$this->main_model->get();
		
		foreach($dt_tabel as $rows){
			$row='<tr>';
			$row.='<td>'.$rows['nama'].'</td>';
			$row.='<td>'.$rows['alamat'].'</td>';
			$row.='<td>'.$rows['asal_sekolah'].'</td>';
			$row.='<td>'.$rows['hp'].'</td>';
			$row.='<td><a href="'.$linkdetail.$rows['calon_id'].'">Detail</a></td>';
			$row.='<td><a href="'.$linkhapus.$rows['calon_id'].'">Hapus</a></td>';
			$row.='</tr>';

			$this->data['dt_main'][]=$row;
		}

		$this->_tampilkan('templates/sbadmin2/table_v',$this->data);
	}

	function edit($id=NULL){
		$this->data['nama_page']='Data Pendaftar Baru';
		$this->data['keterangan_page']='Edit data pendaftar baru';
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('calon_id', 'ID Calon', 'trim|required');
		$this->form_validation->set_rules('hp', 'Nomor HP', 'trim|required|numeric');
		

		if ($this->form_validation->run() == FALSE) {
			if($id){
				$this->data['row']=$this->main_model->getid($id);
				$this->data['target']="";
			}else{
				/*calon_id	nama	jk	tmplahir	tgllahir	alamat	hp	asal_sekolah	NISN	alamat_sekolah	nama_ayah	nama_ibu	tgl_daftar	status_diterima*/
				$this->data['target']=base_url('tampil_calon/edit');

			$this->_tampilkan('templates/sbadmin2/form_v',$this->data);
		} else {
			$dtin=$this->input->post();
			unset($dtin['mysubmit']);
			if($id){
				$this->main_model->update($id,$dtin);
			}else{
				$this->main_model->save($dtin);
			}
			$this->index();
		}
	}

	function hapus($id){
		$this->main_model->delete($id);
		$this->index();
	}

}



