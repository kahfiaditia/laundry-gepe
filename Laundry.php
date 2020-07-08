<?php defined('BASEPATH')OR Exit ('no direct script access allowed');

class Laundry extends CI_Controller 
{
	public function index()
	{
		$this->template->load('template');
	}
}