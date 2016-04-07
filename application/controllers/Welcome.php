<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $data['title'] = "My unique title tag!";
        $data['page_id'] = "My Clever Page id";
        $data['guts'] = '<p>I am the creamy filling inside!</p>';
		$this->load->view('welcome_message', $data);
	}
}
