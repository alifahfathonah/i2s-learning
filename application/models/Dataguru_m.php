<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru_m extends MY_Model
{

    public function __construct()
    {
            // Memanggil konstruktor CI_Model
            parent::__construct();
            $this->_table = "data_guru";
            $this->_pkey="id_guru";
    }


    function cek_username($username){
    	$this->db->where('username',$username);
    	return $this->db->get($this->_table)->row_array();
    }


}