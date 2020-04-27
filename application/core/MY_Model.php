
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $_table;
    protected $_pkey;

    public function get()
    {
        return $this->db->get($this->_table)->result_array();
    }
    
    public function getid($id)
    {
        return $this->db->get_where($this->_table, [$this->_pkey => $id])->row_array();
    }

    public function tambah($dt)
    {
        return $this->db->insert($this->_table, $dt);
    }

    public function update($id,$dt)
    {
        return $this->db->update($this->_table, $dt , array($this->_pkey => $id));
    }

    public function hapus($id)
    {
        return $this->db->delete($this->_table, array($this->_pkey => $id));
    }
}