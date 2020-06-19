<?php 

include_once "app/Controller.php";
include_once "app/Post.php";

$id = $_GET['id'];

$post = new Post();
$row = $post->edit($id);
$lst = $post->listCategory();

?>

<h2>EDIT POST</h2>
<form method="POST" action="post_proses.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>SLUG</td>
			<td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>"></td>
		</tr>
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="post_title" value="<?php echo $row['post_title']; ?>"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="post_text"><?php echo $row['post_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>KATEGORI</td>
			<td>
				<select name="kat_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['kat_id']; ?>"<?php echo $row['kat_id']==$ls['kat_id'] ? " selected" : ""; ?>><?php echo $ls['kat_nama']; ?></option>
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