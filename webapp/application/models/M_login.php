<?php
if (!defined('BASEPATH'))    exit('No	direct	script	access	allowed');

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($email)
    {
        $query = $this->db->query("SELECT * 
                          FROM users
                          WHERE email = '{$email}'");
        
        return $query->row();
    }
}