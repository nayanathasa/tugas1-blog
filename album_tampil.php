<center><h2>Daftar Album</h2></center>
<div class="tambah">
<a href="dashboard.php?page=album_input">Tambah</a>
</div>
<?php 

include "app/Album.php";

$album = new Album();
$rows = $album->tampil();

?>

<table>
	<tr>
		<td>NO</td>
		<td>NAMA</td>
		<td>KETERANGAN</td>
		<td>PHOTO</td>
		<td>EDIT</td>
		<td>DELETE</td>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
	<tr>
		<td><?php echo $row['album_id']; ?></td>
		<td><?php echo $row['album_nama']; ?></td>
		<td><?php echo $row['album_text']; ?></td>
		<td><?php echo $row['PHOTO']; ?></td>
		<td><a href="index.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=album_proses&delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
	</tr>	
	<?php } ?>
</table>