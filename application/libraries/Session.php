<?php

class Session {

	public function start()
	{
		return session_start();
	}

	public function destroy()
	{
		return session_destroy();
	}

	public function set($key, $value)
	{
		$_SESSION[$key] = $value;

		return $_SESSION;
	}

	public function get($key)
	{
		if (array_key_exists($key, $_SESSION))
		{
			return $_SESSION[$key];
		}

	}

}