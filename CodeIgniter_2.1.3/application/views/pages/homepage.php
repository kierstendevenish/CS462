This is <?php echo $username; ?>'s homepage.
<br>
<a href='pages/account'>My Account</a><br><br>
Json: 
<?php 	
	foreach ($json['users'] as $user)
	{
		echo "Id: " . $user['id'] . "<br>Username: " . $user['username'] . "<br>Password: " . $user['password'];
	} 
?>
