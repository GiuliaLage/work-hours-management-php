<?php
if (!defined('BASEPATH'))    exit('No	direct	script	access	allowed');

class M_ponto extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save_ponto($data, $hour, $categoria_id, $user_id, $ponto_id)
    {  
        $data = strtr($data, '/', '-');
        $data =  date('Y-m-d', strtotime($data));
        $hour = date('H:i:s', strtotime($hour));

       
        if (empty($ponto_id)) {

        
            $query = $this->db->query("INSERT INTO pontos (`user_id`, `data`, `hora`, `categoria_id`) 
            VALUES ('{$user_id}', '{$data}', '{$hour}', '{$categoria_id}')");

            if ($query) {

                return true;

            } 
            else {
                
                return false;
            }
        } 
        else
        {
            $query = $this->db->query("UPDATE pontos
                                    SET data = '{$data}',
                                        hora = '{$hour}',
                                        categoria_id = '{$categoria_id}'
                                    WHERE user_id = '{$user_id}'
                                    AND id = '{$ponto_id}'");

            if ($query) {
             
                return true;
            } 
            else {
                
               
                return false;
            }
        }
    }


    public function get_ponto($user_id)
    {
        $query = $this->db->query("SELECT p.id, 
                                          p.user_id, 
                                          DATE_FORMAT(p.data, '%d/%m/%Y') as data,
                                          p.hora, 
                                          c.id as categoria_id,
                                          c.categorias 
                                    FROM pontos as p 
                                    JOIN categorias as c on p.categoria_id = c.id 
                                    WHERE p.user_id = {$user_id}
                                    ORDER BY p.data DESC");

        return $query->result();
    }
}
