<?php
class Mread extends CI_Model{
  public function get(){
      $this->load->database();
      $query =$this->db->query('select* from comment order by `id` DESC');
      return $query->result();

  }

    function report(){
        $this->load->database();
        $query = $this->db->query("SELECT MONTH(date) AS bulan, COUNT(*) AS nilai from comment GROUP BY MONTH(date); ");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
