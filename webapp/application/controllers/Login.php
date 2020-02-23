<?php
defined('BASEPATH')    or exit('No	direct	script	access	allowed');

class Login extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }

    public function index()
    {
      $this->load->view("login");
    
    }
    public function get_user()
    {
        $result = false; 
        $data["error_list"] = array();
        $data["status"]= false;
        
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        
        if (empty($email)) {
            $data["error_list"]['#error'] = "O email deve ser preenchido";
        } else {
            $this->load->model("M_login");
            $result = $this->M_login->get_user($email);
        }

        if($result)
        {
            if(password_verify($password, $result->password)) 
            {
                $this->session->set_userdata("user_id", $result->id);
               $this->session->set_userdata("user_name", $result->nome);
                
                $data["status"]= true;
            } else {
                $data["error_list"]['#error']= "* credenciais invalidas.";    
            }    
        }
        else
        {
            $data["error_list"]['#error'] = "* credenciais invalias.";  
        }
        echo json_encode($data);

        
    }

    public function logout(){
        
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_name');
      
        $this->load->view('login');
    }
}
