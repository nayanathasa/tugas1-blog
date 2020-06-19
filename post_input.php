<?php 

include_once "app/Controller.php";
include_once "app/Post.php";

$post = new Post();
$lst = $post->listCategory();

?>

<h2>TAMBAH POST</h2>
<form method="POST" action="post_proses.php">
	<table>
		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="post_date"></td>
		</tr>
		<tr>
			<td>SLUG</td>
			<td><input type="text" name="post_slug"></td>
		</tr>
		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="post_title"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="post_text"></textarea></td>
		</tr>
		<tr>
			<td>KATEGORI</td>
			<td>
				<select name="kat_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['kat_id']; ?>"><?php echo $ls['kat_nama']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>