<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Produc');
	}

	public function index()
	{
		$data = [
			'produc' => $this->Produc->get(),
		];
		$this->template->load('template','welcome_message',$data);
	}
}
