<?php
	require('../../models/user.php');

	$user = new user;

	$user->delete($_GET['id']);

    if($user->success){
		header('Location: ../../controller/users/index.php');
	}else{
		echo "data Inserted denied";
	}
