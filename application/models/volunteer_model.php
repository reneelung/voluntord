<?php

class Volunteer_model extends Tord_Model {

	public function records($user_id)
	{
		$this->db->select('date, hours, notes');
		$this->db->where('user_id', $user_id);

		return $this->db->get('volunteer_hours')->result_array();
	}

}