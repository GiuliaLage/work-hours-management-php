<?php
defined('BASEPATH')    or exit('No	direct	script	access	allowed');

class Ponto extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }

    public function save_ponto()
    {

       $ponto_id = $this->input->post('id');
        
       $data =  $this->input->post('data');
       $hour = $this->input->post('hour');
       $categoria = $this->input->post('categorias');
       $user_id = $this->session->userdata('user_id');
        
       $this->load->model('M_ponto');
       $result = $this->M_ponto->save_ponto($data,$hour,$categoria,$user_id,$ponto_id);

        echo json_encode($result);
    }

    public function get_ponto()
    {

        $user_id = $this->session->userdata('user_id');

        $this->load->model('M_ponto');
        $result = $this->M_ponto->get_ponto($user_id);
        
        $data['result'] = $result;

        echo json_encode($data);
    }
}
