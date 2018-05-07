<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_chat extends CI_Controller {

	
	public function chat()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('chat_dashboard', $data);
	}
}
