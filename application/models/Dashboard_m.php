<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends MY_Model
{

    public function __construct()
    {
            // Memanggil konstruktor CI_Model
            parent::__construct();
            $this->_table = "dashboard";
            $this->_pkey="id_dsb";
    }

}