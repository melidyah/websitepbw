<?php
class delete_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    function delete($namatable, $data)
    {
        $res = $this->db->delete($namatable, $data);
        return $res;
    }
}
?>
