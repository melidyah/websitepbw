<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('insert_model');
        $this->load->model('update_model');
        $this->load->model('delete_model');

    }
	public function index()
	{
    $data = $this->insert_model->getData();
		$this->load->view('index', array('data'=> $data));
	}

  public function insert(){
    $data = array(
      'name' => $_POST['name'],
      'comment' => $_POST['comment']
    );

    $result = $this->insert_model->form_insert('comment',$data);
    if($result >= 1)
    {
      redirect(base_url());
    }
}
    public function delete($id){
      $where = array('id'=>$id);
      $res = $this->delete_model->delete('comment',$where);
      if($res>=1){
        redirect(base_url());
      }
}
    public function edit($id){
      // $data = array(
      //   'name' => $_POST['name'],
      //   'comment' => $_POST['comment']
      // );
      $art = $this->update_model->getComment(" where id = '$id'");
      $data = array(
        "id" => $art[0]['id'],
        "name" => $art[0]['name'],
        "comment" => $art[0]['comment']
      );
      $this->load->view('edit', $data);

      // $where = array('id'=>$id);
      // $result = $this->update_model->updateData('comment',$data, $where);
      // if($result >= 1)
      // {
      //   redirect(base_url());
      // }
    }

    public function halaman_edit(){
      $this->load->view('edit');
    }

    public function update(){
      $data = array(
        'name' => $this->input->post('name'),
        'comment' => $this->input->post('comment')
      );

      $where = array('id' => $this->input->post('id'));
      $result = $this->update_model->updateData('comment',$data, $where);
      if ($result > 0){
        redirect(base_url());
      }



    }
}
