<?php
	require('../../models/user.php');

	$user = new user;
	
	$user->insert($_POST['firstname'], $_POST['lastname']);

	if($user->success){
		header('Location: ../../controller/users/index.php');
	}else{
		echo "data Inserted denied";
	}