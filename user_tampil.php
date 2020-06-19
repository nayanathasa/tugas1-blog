<center><h2>Daftar Kategori</h2></center>
<div class="tambah">
<a href="dashboard.php?page=user_input">Tambah</a>
</div>
	
<?php

include "app/User.php";

$user = new User();
$rows = $user->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>NAMA LENGKAP</th>
		<th>ROLE</th>
		<th>EDIT</th>
		<th>HAPUS</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['user_name']; ?></td>
			<td><?php echo $row['user_email']; ?></td>
			<td><?php echo $row['user_nama_lengkap']; ?></td>
			<td>
				<?php 
				if($row['user_role'] == 1) {
					echo "Administrator";
				} else {
					echo "Operator";
				}
				?>				
			</td>
			<td><a href="index.php?page=user_edit&id=<?php echo $row['user_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=user_proses&delete-id=<?php echo $row['user_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>