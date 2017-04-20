<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->logedIn==false)
		{
			redirect('/');
			return false;
		}
	}

	function index()
	{
		echo 'Jika halaman ini muncul, artinya alamat url yang anda akses salah';
	}
}