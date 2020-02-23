<?php
defined('BASEPATH')    or exit('No	direct	script	access	allowed');

class Cadastro extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        $this->load->view("cadastro");
    }
    public function create_user()
    {
        $data = array();
        $result = false;
        $data['message_list'] = array();
        $data['status'] = false;

        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if (
            empty($nome) ||
            empty($email) ||
            empty($password)
        ) {

            $data['message_list']['#error'] = '* Todos os campos devem ser preenchidos.';
            $data['status'] = false;
        } 
        else {
            
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->load->model('M_cadastro');
            $result = $this->M_cadastro->create_user($nome, $email, $password);

            if ($result == 0) {

                $data['message_list']['#error'] = '*Já existe um cadastro com o email informado.';
                $data['status'] = false;
                $data['error_email'] = true;
            
            } else if ($result) {
                $data['result'] = $result;
                $data['status'] = true;
                $data['message_list']['#user_message'] = 'Usuário cadastrado com sucesso!';
            }
        }
        echo json_encode($data);
    }
}
