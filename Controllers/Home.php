<?php

namespace App\Controllers;

class Home extends BaseController {

	function __construct($foo = null) {

	}

	public function index() {
		return view('home');
	}
}
