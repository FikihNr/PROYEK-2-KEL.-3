<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pelajar extends CI_Controller {

	
	public function pelajar()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/v_input_pelajar', $data);
	}
}
