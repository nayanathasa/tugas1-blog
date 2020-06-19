<center><h2>Daftar Photo</h2></center>
<div class="tambah">
<a href="dashboard.php?page=photo_input">Tambah</a>
</div>

<?php 

include "app/Photos.php";

$photo = new Photos();
$rows = $photo->tampil();

?>

<table>
	<tr>
		<td>NO</td>
		<td>TANGGAL</td>
		<td>JUDUL</td>
		<td>KETERANGAN</td>
		<td>POST</td>
		<td>EDIT</td>
		<td>DELETE</td>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
	<tr>
		<td><?php echo $row['photo_id']; ?></td>
		<td><?php echo $row['photo_date']; ?></td>
		<td><?php echo $row['photo_title']; ?></td>
		<td><?php echo $row['photo_text']; ?></td>
		<td><?php echo $row['POST']; ?></td>
		<td><a href="index.php?page=photo_edit&id=<?php echo $row['photo_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=photo_proses&delete-id=<?php echo $row['photo_id']; ?>">Delete</a></td>
	</tr>	
	<?php } ?>
</table>