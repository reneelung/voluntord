<?php

class Account extends Tord_Controller {

	
	public function index()
	{
		$this->data['set_password'] = false;
		$this->data['user'] = $this->user;

		if (!$this->user['password_hash'])
		{
			$this->data['set_password'] = true;
		}

		if ($this->post_data)
		{
			$this->account_model->update_password($this->post_data['password']);
		}

		$this->loadView('account/index');
	}
}
