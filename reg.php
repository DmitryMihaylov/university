<?php
	require_once("config.php");
	require_once("Account.php");
	$account = new Account($con);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	
	if ($email1 != $email2) {
		echo "Emailы не совпадают";
		exit();
	}
	elseif ($password1 != $password2) {
		echo "Пароли не совпадают";
		exit();
	}
	else
	{
		$mysql = new mysqli('localhost', 'root', '','university');
		$mysql->query("INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES('$firstname', '$lastname', '$username', '$email1', '$password1')");
		echo "Успешно добавлен новый пользователь";
		$mysql->close();
	}
?>