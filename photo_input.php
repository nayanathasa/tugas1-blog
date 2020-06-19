<?php 

include_once "app/Controller.php";
include_once "app/Photos.php";

$photo = new Photos();
$lst = $photo->listPost();

?>

<h2>TAMBAH PHOTO</h2>
<form method="POST" action="photo_proses.php">
	<table>
		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="photo_date"></td>
		</tr>
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="photo_title"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="photo_text"></textarea></td>
		</tr>
		<tr>
			<td>FILE (JPG)</td>
			<td><input type="file" name="photo_file"></td>
		</tr>
		<tr>
			<td>POST</td>
			<td><select name="post_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['post_id']; ?>"><?php echo $ls['post_title']; ?></option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>