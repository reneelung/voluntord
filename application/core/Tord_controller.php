<?php

class Tord_Controller extends Public_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->account_model->is_logged_in())
		{
			$this->user = $this->session->get('user_data');
		}
		else
		{
			$this->redirect('');
		}
	}

}