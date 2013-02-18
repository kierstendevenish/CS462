<?php 

class UserModel extends CI_Model {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function checkExists($username = "", $json = "")
	{
		foreach ($json['users'] as $user)
		{
			if ($username == $user['username'])
			{
				return true;
			}
		}

		return false;	
	}

	function addUser($username = "", $password = "", $json = "")
	{
		if ($username != "" && $username != "")
		{
			$id = $this->getNewId($json);
			array_push($json['users'], array("id" -> $id, "username" = $username, "password" = $password));
		}
	}

	function getNewId($json = "")
	{
		
	}
}
