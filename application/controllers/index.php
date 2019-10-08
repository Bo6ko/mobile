<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

        redirect('vehicule/view', 'refresh');

        //$this -> smarty -> assign('content', $this -> smarty -> fetch('public/' . $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
		//$this -> smarty -> display('public/main.htm');
	}

}