<?php 

include_once "app/Controller.php";
include_once "app/Album.php";

$id = $_GET['id'];

$album = new Album();
$row = $album->edit($id);
$lst = $album->listPhoto();

?>

<h2>EDIT ALBUM</h2>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_nama" value="<?php echo $row['album_nama']; ?>"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="album_text"><?php echo $row['album_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>PHOTO</td>
			<td><select name="photo_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['photo_id']; ?>"<?php echo $row['photo_id']==$ls['photo_id'] ? " selected" : ""; ?>><?php echo $ls['photo_title']; ?></option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>