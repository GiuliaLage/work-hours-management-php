<?php
if (!defined('BASEPATH'))    exit('No	direct	script	access	allowed');

class M_cadastro extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_user($nome,$email,$password){
    
    $result = false;
    
    $query = $this->db->query("SELECT COUNT(*) AS QTD FROM users WHERE email = '{$email}'");
  
    if($query->row('QTD') == '1'){

        return 0; 
    }

    $query = $this->db->query("INSERT INTO users (nome,email,password)
                                VALUES ('{$nome}','{$email}','{$password}')");

    if($query){
       
        $result = true; 
    }
    else{
        
        $result = false;
    }                   
    
    return $result;
    
    }
}