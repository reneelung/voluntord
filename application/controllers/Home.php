<?php

class Home extends Tord_Controller {

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
				header ("Location: ".BASE_URL."account/");
			}
		}

		$this->loadView('login');
	}

	public function logout()
	{
		$this->session->destroy();
		print_r($_SESSION);
	}

}
