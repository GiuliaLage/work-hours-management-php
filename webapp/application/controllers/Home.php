<?php
defined('BASEPATH')	OR exit('No	direct	script	access	allowed');

class Home extends CI_Controller	{

    public function index(){

        $user = $this->session->userdata('user_id');
         
        if(!empty($user))
        {
            
            $this->template->show('home');
        }
        else{

            header("Location: http://localhost/Helloby-Webapp/webapp/");
        }

       

    }
}