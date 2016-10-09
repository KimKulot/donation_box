<?php require('../templates/header.php'); ?>

<?php 
$params = $_GET;
?>

<?php $count = 1; ?>
<table border="1px">
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($params as $param): ?>
			<tr> 
				<td><?= $count++; ?></td>
				<td><?= $param['firstname'];?></td>
				<td><?= $param['lastname'];?></td>
				<td>
					<a href="<?= '../../../controller/users/update.php?id=' . $param['id']; ?> ">Edit</a>|
					<a href="<?= '../../../controller/users/delete.php?id=' . $param['id']; ?> ">Delete</a>
				</td>

			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<br>
	<button><a href="<?= '../users/add.php' ?>">Add new user</a></button>


<?php require('../templates/footer.php'); ?>