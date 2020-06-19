<center><h2>Daftar Post</h2></center>
<div class="tambah">
<a href="dashboard.php?page=post_input">Tambah</a>
</div>

<?php 

include "app/Post.php";

$post = new Post();
$rows = $post->tampil();

?>

<table>
	<tr>
		<td>NO</td>
		<td>TANGGAL</td>
		<td>SLUG</td>
		<td>JUDUL</td>
		<td>KETERANGAN</td>
		<td>KATEGORI</td>
		<td>EDIT</td>
		<td>DELETE</td>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
	<tr>
		<td><?php echo $row['post_id']; ?></td>
		<td><?php echo $row['post_date']; ?></td>
		<td><?php echo $row['post_slug']; ?></td>
		<td><?php echo $row['post_title']; ?></td>
		<td><?php echo $row['post_text']; ?></td>
		<td><?php echo $row['KAT']; ?></td>
		<td><a href="index.php?page=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=post_proses&delete-id=<?php echo $row['post_id']; ?>">Delete</a></td>
	</tr>	
	<?php } ?>
</table>