<?php

class Public_Controller extends CI_Controller {

	protected $data;

	public function __construct()
	{
		parent::__construct();
		
		$this->post_data = $this->input->post();
		$this->form_data = $this->input->get();

		$this->loadLibrary('session');
		$this->loadModel('account_model');

		$this->session->start();
	}
	
	public function loadView($view)
	{
		$header = $this->load->view('templates/header', $this->data, true);
		$footer = $this->load->view('templates/footer', $this->data, true);
		$main_view = $this->load->view($view, $this->data, true);

		echo $header.$main_view.$footer;
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