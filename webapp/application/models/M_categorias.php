<?php
if (!defined('BASEPATH'))    exit('No	direct	script	access	allowed');

class M_categorias extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_categorias()
    {
        $query = $this->db->query("SELECT * FROM categorias");

        return $query->result(); 
    }
}
