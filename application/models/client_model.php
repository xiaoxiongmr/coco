<?php

class Client_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_client_list($iDisplayStart,$end,$order_column,$order_dir){
        
        $responce        = new stdClass(); 
        $this->db->limit($end-$iDisplayStart,$iDisplayStart);   
        $this->db->order_by('id', $order_dir);    
        $_data = $this->db->get('client');
        
        $responce->rows = array();
        foreach ($_data->result_array() as $i => $task) {
            $responce->rows[$i] = $task;
        }        
        return $_data->result_array();
    }

    public function get_client_list_total(){
        $total = $this->db->count_all('client');
        return $total;
    }
}