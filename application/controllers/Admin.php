<?php

class Admin extends Tord_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->user['role'] !== 'administrator')
		{
			$this->redirect('');
		}
	}

	public function index()
	{
		$this->loadView('admin/index');
	}


}