<?php defined('BASEPATH')OR Exit ('no direct script access allowed');

class Laundry extends CI_Controller 
{
	public function index()
	{
		$data['row'] = $this->laundry_m->post();
		$this->template->load('template');
	}
}
