<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends Admin_Controller {
	

	function __construct(){
	    parent::__construct();
		$this->load->model('Dataguru_m','main_model');
		$this->data['ctrl']='data_guru';
		$this->data['base_url']=base_url($this->data['ctrl']);
		$this->data['nama_page']='Data Guru';
	}
	public function index(){

		$this->data['keterangan_page']='Data Pengajar dan Pengelola di MTs. Ibnu Husain. ';
		$this->data['link_tambah']=$this->data['base_url'].'/edit';
		
		$dt_tabel=$this->main_model->get();

		// id_guru,nip	nama,alamat,telp,email,jabatan,foto,username,password,hak_akses
		$this->data['tb_head']='<th style="width:20px">ID</th>';
		$this->data['tb_head'].='<th>NIP</th>';
		$this->data['tb_head'].='<th>Nama</th>';
		$this->data['tb_head'].='<th>Alamat</th>';
		$this->data['tb_head'].='<th>Telp</th>';
		$this->data['tb_head'].='<th>E-Mail</th>';
		$this->data['tb_head'].='<th>Jabatan</th>';
		$this->data['tb_head'].='<th>Foto</th>';
		$this->data['tb_head'].='<th>Username</th>';
		$this->data['tb_head'].='<th>Password</th>';
		$this->data['tb_head'].='<th>Hak Akses</th>';
		$this->data['tb_head'].='<th>Edit</th>';
		$this->data['tb_head'].='<th>Hapus</th>';


		$linkedit=$this->data['base_url'].'/edit/';
		$linkhapus=$this->data['base_url'].'/hapus/';
		
		$dt_tabel=$this->main_model->get();
		
		foreach($dt_tabel as $rows){
			$row='<tr>';
			$row.='<td>'.$rows['id_guru'].'</td>';
			$row.='<td>'.$rows['nip'].'</td>';
			$row.='<td>'.$rows['nama'].'</td>';
			$row.='<td>'.$rows['alamat'].'</td>';
			$row.='<td>'.$rows['telp'].'</td>';
			$row.='<td>'.$rows['email'].'</td>';
			$row.='<td>'.$rows['jabatan'].'</td>';
			$row.='<td>'.$rows['foto'].'</td>';
			$row.='<td>'.$rows['username'].'</td>';
			$row.='<td>'.$rows['password'].'</td>';
			$row.='<td>'.$rows['hak_akses'].'</td>';
			$row.='<td><a href="'.$linkedit.$rows['id_guru'].'">Edit</a></td>';
			$row.='<td><a href="'.$linkhapus.$rows['id_guru'].'">Hapus</a></td>';
			$row.='</tr>';

			$this->data['dt_main'][]=$row;
		}

		$this->_tampilkan('templates/sbadmin2/table_v',$this->data);
	}

}