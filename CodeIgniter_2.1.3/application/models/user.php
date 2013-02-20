<?php

Class User extends CI_Model
{

	function login($username, $password)
	{
		$db = new PDO('sqlite:./application/db/flowershop');
		$result = $db->query("SELECT * FROM Users WHERE username='" . $username . "' AND password='" . $password . "' LIMIT 1;");


		if($result -> num_rows() == 1)
		{
		     return $result;
		}
		else
		{
		     return false;
		}
	}
}
?>

