<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_menu extends MY_Controller {
	protected $ctrl;
	function __construct(){
	    parent::__construct();
	    $this->ctrl='panel menu';
		$this->load->model('menu_m','main_model');
	}


	function index(){
		$dts['ctrl']=$this->ctrl;
		$dts['nama_page']='Setting Panel Menu';
		$dts['keterangan_page']='Menambah atau mengurangi Panel Menu dan atur link URL';
		$dts['link_tambah']=current_url().'/edit';
		$dts['tb_head']='<th>Urutan</th>';
		$dts['tb_head'].='<th>Caption</th>';
		$dts['tb_head'].='<th>Keterangan</th>';
		$dts['tb_head'].='<th>Link</th>';
		$dts['tb_head'].='<th>Icon</th>';
		$dts['tb_head'].='<th style="width:30px">Edit</th>';
		$dts['tb_head'].='<th style="width:30px">Hapus</th>';
		
		$dts['dt_main']=array();
		
		$linkedit=base_url('panel_menu').'/edit/';
		$linkhapus=base_url('panel_menu').'/hapus/';
		
		$dt_tabel=$this->main_model->get();
		
		foreach($dt_tabel as $rows){
			$row='<tr>';
			$row.='<td>'.$rows['id_menu'].'</td>';
			$row.='<td>'.$rows['caption'].'</td>';
			$row.='<td>'.$rows['deskripsi'].'</td>';
			$row.='<td>'.$rows['link'].'</td>';
			$row.='<td>'.$rows['icon'].'</td>';
			$row.='<td><a href="'.$linkedit.$rows['id_menu'].'">Edit</a></td>';
			$row.='<td><a href="'.$linkhapus.$rows['id_menu'].'" onClick="return confirm(\'Yakin Hapus?\')">Hapus</a></td>';
			$row.='</tr>';

			$dts['dt_main'][]=$row;
		}

		$this->_tampilkan('templates/sbadmin2/table_v',$dts);
	}

	function edit($id=NULL){
		$dts['ctrl']=$this->ctrl;
		$dts['nama_page']='Setting Panel Menu';
		$dts['keterangan_page']='Menambah atau mengurangi Panel Menu dan atur link URL';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_menu', 'Nomor Urut', 'trim|required');
		$this->form_validation->set_rules('caption', 'Caption', 'trim|required');
		

		if ($this->form_validation->run() == FALSE) {
			if($id){
				$dts['row']=$this->main_model->getid($id);
				$dts['target']=base_url('panel_menu/edit/'.$id);
			}else{
				$dts['target']=base_url('panel_menu/edit');
				$dts['row']=array(
					'id_menu'	=>set_value('id_menu'),
					'caption'	=>set_value('caption'),
					'deskripsi'	=>set_value('deskripsi'),
					'link'	=>set_value('link'),
					'icon'	=>set_value('icon')
					);
			}
			$dts['fields']=explode(',', 'id_menu,caption,deskripsi,link,icon');
			$this->_tampilkan('templates/sbadmin2/form_v',$dts);
		} else {
			$dtin=$this->input->post();
			unset($dtin['mysubmit']);
			if($id){
				$this->main_model->update($id,$dtin);
			}else{
				$this->main_model->simpan($dtin);
			}
			$this->index();
		}
	}

	function hapus($id){
		$this->main_model->delete($id);
		$this->index();
	}



}

// id_menu	caption	deskripsi	link	icon