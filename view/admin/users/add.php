
<?php require('../templates/header.php'); ?>

	<form action="../../../controller/users/add.php" method="POST">
		Firstname<input type="text" name="firstname"><br>
		Lastname<input type="text" name="lastname"><br>
		<input type="submit">
	</form>

<?php require('../templates/footer.php'); ?>
