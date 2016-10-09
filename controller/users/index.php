<?php
	require('../../models/user.php');

	$user = new user;
    $data['users'] = $user->index();
    $redirect = "../../view/admin/users/index.php?".http_build_query($data['users']);
    header( "Location: $redirect" );

    
    exit();

    

    