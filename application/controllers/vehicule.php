<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vehicule extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function view() {

        $this -> smarty -> assign('content', $this -> smarty -> fetch('public/' . $this -> router -> fetch_class() . '/' . $this -> router -> fetch_method() . '.htm'));
        $this -> smarty -> display('public/main.htm');
    }

}