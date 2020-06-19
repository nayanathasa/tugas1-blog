<?php 

include_once "app/Controller.php";
include_once "app/Photos.php";

$id = $_GET['id'];

$photo = new Photos();
$row = $photo->edit($id);
$lst = $photo->listPost();

?>

<h2>EDIT PHOTO</h2>
<form method="POST" action="photo_proses.php">
	<input type="hidden" name="photo_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="photo_date" value="<?php echo $row['photo_date']; ?>"></td>
		</tr>
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="photo_title" value="<?php echo $row['photo_title']; ?>"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="photo_text"><?php echo $row['photo_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>POST</td>
			<td>
				<select name="post_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['post_id']; ?>"<?php echo $row['post_id']==$ls['post_id'] ? " selected" : ""; ?>><?php echo $ls['post_title']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>