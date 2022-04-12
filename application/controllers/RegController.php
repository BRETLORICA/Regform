<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegController extends CI_Controller {

	public function index()
	{
		$this->load->view('RegView');
	}
}
