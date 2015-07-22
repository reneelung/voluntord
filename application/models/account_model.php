<?php

class Account_model extends Tord_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function get_user($data)
	{
		$this->db->select('*');
		$this->db->where('username', $data['username']);
		$user = $this->db->get('users')->row_array();

		if ($user) { 
			return array_merge($user, array('role' => $this->_get_user_role($user['id'])));
		}
		else 
		{
			return false;
		}
	}

	public function update_user($data)
	{
		$this->db->update('users', $data);
		$updated = $this->get_user($data);
		$this->login_user($updated);
	}

	public function login_user($user)
	{
		$this->session->set('logged_in', true);
		$this->session->set('user_data', $user);
		$this->user = $user;
	}

	public function logout_user($user)
	{
		$this->session->destroy();
		unset($this->user);
	}

	public function is_logged_in()
	{
		if (array_key_exists('logged_in', $_SESSION))
		{
			if ($this->session->get('logged_in'))
			{
				return true;
			}			
		}
		else
		{
			return false;
		}
	}

	function _encrypt($plain_text)
	{
		return PASSWORD_SALT_PRE.$plain_text.PASSWORD_SALT_POST;
	}

	function _get_user_role($id)
	{
		$rtn =  $this->db->select('key')
						 ->from('roles')
						 ->join('user_roles', 'user_roles.role_id = roles.id')
						 ->join('users', 'users.id = user_roles.user_id')
						 ->where('users.id', $id)
						 ->get()->first_row();

		if ($rtn)
		{
			return $rtn->key;
		}		
	}

	public function is_admin($id=null)
	{
		if (!$id)
		{
			$user = $this->session->get('user_data');
			$id = $user['id'];
		}

		return $this->_get_user_role($id) == 'administrator';
	}
}