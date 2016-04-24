<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function index() {
		$this->middle = 'page/home';
		$this->layout();
	}

	public function about() {
		$this->middle = 'page/about';
		$this->layout();
	}

	public function contact() {
		$this->middle = 'page/contact';
		$this->layout();
	}

	public function services() {
		$this->middle = 'page/services';
		$this->layout();
	}
}



