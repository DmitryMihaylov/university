<?php
	require_once("config.php");
	require_once("Account.php");
	$login = $_POST['authUsername'];
	$pass = $_POST['authPassword'];
	

	$db = new mysqli('localhost', 'root', '','university');
	$result = $db->query("SELECT * FROM `users` WHERE `username`='$login' AND `password`='$pass'");
	$user = $result->fetch_assoc();
	if(count($user)==0)
	{
		echo "Пользователь не найден";
		exit();
	}
	else
	{
		echo $user['username'];
		exit();
	}

?>