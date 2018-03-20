<?php
class insert_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    function getData(){
        $res = $this->db->get('comment');
        return $res->result_array();
    }

    function form_insert($table, $data){
        //$this->db->set($data);
        $res = $this->db->insert($table,$data);
        return $res;
    }


}
?>
