<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Load the session library
        $this->load->helper('url'); // Optional: for redirecting
    }

	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{
		$this->load->view('registration');
	}
	public function about_us()
	{
		$this->load->view('about-us');
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function contact_us()
	{
		$this->load->view('contact-us');
	}
	public function privacy_policy()
	{
		$this->load->view('privacy-policy');
	}
	public function terms_use()
	{
		$this->load->view('terms-use');
	}
	public function developers()
	{
		$this->load->view('developers');
	}
	
}
