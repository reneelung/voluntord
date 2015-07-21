<?php

class Account extends Tord_Controller {

	
	public function index()
	{
		$this->data['set_password'] = false;
		$this->data['user'] = $this->user;
		$this->data['user']['role'] = $this->account_model->get_user_role($this->user['id']);

		$this->loadView('account/index');
	}
}
