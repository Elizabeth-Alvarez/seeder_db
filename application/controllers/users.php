<?php

class Users extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('User');
  }

	public function index()
	{
		$this->load->view('index');
	}

  public function get_users(){
		$arr = $this->User->get_users();
		echo json_encode($arr);
	}

  public function filter() {
    $data = $this->User->filter_users();
    echo json_encode($data);
  }

}
