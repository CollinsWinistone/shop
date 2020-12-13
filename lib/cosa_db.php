<?php

/**
*this class models a database connection to be used throughout the site
*It trys to connect to the datbase and returns a datbase object to the *calling object
*
**/

class Database
{
	private static $dsn = 'mysql:host=localhost:8080;dbname=dary';
	private static $username = 'root';
	private static $password = '';
	private static $db;

	public function __construct() {}

	public static function getDB()
	{
		if(!isset(self::$db))
		{
			try
			{
				self::$db = new PDO(self::$dsn,self::$username,self::$password);
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
			}
		}

		return self::$db;
	}

	public function test()
	{
		echo "just worked properly";
	}
}

?>