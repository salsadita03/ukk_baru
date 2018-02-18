<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>CRUDnya DITA</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>User Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Fullname</th>
			<th>Level</th>
			<th>action</th>
		</tr>
		<?php 
		$userid= 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $u->userid ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->fullname ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('crud/edit/','Edit'); ?>
                  <?php echo anchor('crud/hapus/','Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>