<?php

class Home extends Public_Controller {

	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		if ($this->form_data)
		{
			$user = $this->account_model->get_user($this->form_data);

			if ($user)
			{
				$this->account_model->login_user($user);
				$this->redirect('account');
			}
		}

		$this->loadView('login');
	}

	public function logout()
	{
		$this->session->destroy();
		$this->redirect('');
	}

}
