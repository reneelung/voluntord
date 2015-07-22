<?php

class Account extends Tord_Controller {

	
	public function index()
	{
		$this->data['set_password'] = false;
		$this->data['user'] = $this->user;		

		$this->loadView('account/index');
	}
}
