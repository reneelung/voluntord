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
		$user = $this->db->get('users')->result_array();

		if ($user) { 
			return $user[0];
		}
		else 
		{
			return false;
		}
	}

	public function update_user($data)
	{
		return $this->db->update('users', $data);
	}

	public function login_user($user)
	{
		$this->session->set('logged_in', true);
		$this->session->set('user_data', $user);
		$this->user = $user;
	}

	function _refresh_user($user)
	{
		$refreshed = $this->get_user($user['username']);
		$this->login_user($refreshed);
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

	public function update_password($plain_text)
	{
		$encrypted = $this->_encrypt($plain_text);
		$this->db->where('id', $this->user['id']);
		$this->db->update('users', array('password_hash' => $encrypted));
		$this->_refresh_user($this->user);

		return $this;
	}

	function _encrypt($plain_text)
	{
		return PASSWORD_SALT_PRE.$plain_text.PASSWORD_SALT_POST;
	}
}