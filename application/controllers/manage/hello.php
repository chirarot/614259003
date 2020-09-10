<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	function __construct()
{	
	parent::__construct();

	echo "my Constucter"."</br>";
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function show($name=null,$lastname=null)
	{
		echo "WTF!!".$name."".$lastname;
			$this->_display();
	}
	public function _display(){
		
		echo "</br>"."Software Engineeing";
		$data[name]="somkiat";
		$data[email]="oreo@gmail.com";
		$this->load->view("Hello View",$data);
	}
}
