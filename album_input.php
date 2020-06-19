<?php 

include_once "app/Controller.php";
include_once "app/Album.php";

$album = new Album();
$lst = $album->listPhoto();

?>

<h2>TAMBAH ALBUM</h2>
<form method="POST" action="album_proses.php">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_nama"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="album_text"></textarea></td>
		</tr>
		<tr>
			<td>PHOTO</td>
			<td><select name="photo_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['photo_id']; ?>"><?php echo $ls['photo_title']; ?></option>
					<?php } ?>
				</select></td></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>