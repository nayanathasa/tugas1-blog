<center><h2>Daftar Album</h2></center>
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
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
	<tr>
		<td><?php echo $row['album_id']; ?></td>
		<td><?php echo $row['album_nama']; ?></td>
		<td><?php echo $row['album_text']; ?></td>
		<td><?php echo $row['PHOTO']; ?></td>
	</tr>	
	<?php } ?>
</table>