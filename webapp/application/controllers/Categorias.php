<?php
defined('BASEPATH')    or exit('No	direct	script	access	allowed');

class Categorias extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function get_categorias(){
           
       $this->load->model('M_categorias');
       $results = $this->M_categorias->get_all_categorias(); 
     
       $categorias = array();
       
       foreach($results as $key => $result){
         $categorias[$key]['id'] =  $result->id;
         $categorias[$key]['categorias'] =  $result->categorias;
       }
       
       echo json_encode($categorias); 
    } 
}
