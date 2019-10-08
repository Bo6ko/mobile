<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Missing extends CI_Controller {

	public function __construct() {
		parent::__construct();
		redirect( '/' );
	}
}