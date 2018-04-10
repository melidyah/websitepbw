<?php
class download_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    function getData(){
        $res = $this->db->get('comment');
        return $res->result_array();
    }
}
?>
