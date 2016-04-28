<?php

class StaticPropertyDataProvider
{
	/** @var \User */
	public static $user;

	public static function init()
	{
		self::$user = new User();
	}
}

class User
{
	/**
	 * @return \AccessToken
	 */
	public function getAccessToken()
	{
		return new AccessToken();
	}
}

class AccessToken
{
	/**
	 * return boolean
	 */
	public function isValid()
	{
		true;
	}
}
