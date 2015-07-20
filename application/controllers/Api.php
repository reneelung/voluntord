<?php

class Api extends Tord_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->loadLibrary('json');
	}

	public function index()
	{
		$this->json->output(array('title' => 'API!'));
	}
}
