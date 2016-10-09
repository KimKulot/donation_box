<?php
	require('../../models/user.php');

	$user = new user;
	
	$data['users'] = $user->update($_GET['id']);

    $redirect = "../../view/admin/users/form_edit.php?".http_build_query($data['users']);
    header( "Location: $redirect" );

    
    exit();