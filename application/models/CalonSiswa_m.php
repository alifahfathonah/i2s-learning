<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CalonSiswa_m extends MY_Model
{

    public function __construct()
    {
            // Memanggil konstruktor CI_Model
            parent::__construct();
            $this->_table = "calon_siswa";
            $this->_pkey="calon_id";
    }

}