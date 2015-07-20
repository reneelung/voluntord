<?php

class Volunteer extends Tord_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->loadModel('volunteer_model');

		$this->data['records'] = $this->volunteer_model->records(1);

		$this->loadView('volunteer/index');
	}
}
