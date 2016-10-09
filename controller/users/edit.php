<?php
	require('../../models/user.php');

	$user = new user;
	
	$user->edit($_POST['firstname'], $_POST['lastname'], $_POST['id']);

	if($user->success){
		header('Location: ../../controller/users/index.php');
	}else{
		echo "data Updated denied";
	}