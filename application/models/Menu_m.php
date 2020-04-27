<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_m extends MY_Model
{

    public function __construct()
    {
            // Memanggil konstruktor CI_Model
            parent::__construct();
            $this->_table = "menu";
            $this->_pkey="id_menu";
    }

}