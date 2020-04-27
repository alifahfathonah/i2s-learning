<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datasiswa_m extends MY_Model
{

    public function __construct()
    {
            // Memanggil konstruktor CI_Model
            parent::__construct();
            $this->_table = "data_siswa";
            $this->_pkey="id_siswa";
    }

}