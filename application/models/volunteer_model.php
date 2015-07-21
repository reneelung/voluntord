<?php

class Volunteer_model extends Tord_Model {

	public function records($opt=array())
	{
		$this->db->select('date, hours, notes');

		if ($opt['user_id'])
		{
			$this->db->where('user_id', $opt['user_id']);
		}

		if ($opt['date'])
		{
			$this->db->where('date', $opt['date']);
		}		

		return $this->db->get('volunteer_hours')->result_array();
	}

}