<?php require('../templates/header.php'); ?>

<?php 
$users = $_GET;
?>

<?php foreach ($users as $user): ?>
	
	<form action="../../../controller/users/edit.php" method="post">
		<input type="hidden" name="id" value="<?= $user['id']; ?>" >
		firstname: <input type="text" name="firstname" value="<?= $user['firstname']; ?>"><br>
		lastname: <input type="text" name="lastname" value="<?= $user['lastname']; ?>"><br>
		<input type="submit">
	</form>	

<?php endforeach ?>

<?php require('../templates/footer.php'); ?>