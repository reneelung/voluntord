<?php

class Tord_Controller extends CI_Controller {
	
	protected $data;

	public function __construct()
	{
		parent::__construct();
		
		$this->post_data = $this->input->post();
		$this->form_data = $this->input->get();

		$this->loadLibrary('session');
		$this->loadModel('account_model');

		$this->session->start();
		//echo "Parent Controller: Tord_Controller<br/><br/>";

		if ($this->account_model->is_logged_in())
		{
			$this->user = $this->session->get('user_data');
		}
	}

	public function loadView($view)
	{
		$this->load->view($view, $this->data);
	}

	public function loadLibrary($library)
	{
		$this->load->library($library);
	}

	public function loadModel($model)
	{
		$this->load->model($model);
	}

	public function redirect($path)
	{
		header("Location: ".BASE_URL.$path."/");
	}

}