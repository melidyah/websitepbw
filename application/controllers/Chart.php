<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mread');
    }
    public function index()
    {
        $data['report'] = $this->mread->report();
        $this->load->view('report', $data);
    }

    public function report(){
    	$this->load->helper('url_helper');
    	$data = array(
              "report"=> $this->mread->report());
    	var_dump($data);
      $this->load->view('report', $data);
    	}

}
