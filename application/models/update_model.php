<?php
class update_model extends CI_Model
{
    public function getComment($where=""){
      $data = $this->db->query('SELECT * FROM comment'.$where);
      return $data->result_array();
    }

    function __construct() {
        parent::__construct();
    }
    function updateData($namatable,$data,$where)
    {

        $res = $this->db->update($namatable, $data, $where);
        return $res;
    }
}
?>
