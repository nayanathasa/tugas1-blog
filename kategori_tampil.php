<center><h2>Daftar Kategori</h2></center>
<div class="tambah">
<a href="dashboard.php?page=kategori_input">Tambah</a>
</div>

<?php 

include "app/Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>

<table>
	<tr>
		<td>NO</td>
		<td>NAMA</td>
		<td>KETERANGAN</td>
		<td>EDIT</td>
		<td>DELETE</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['kat_id']; ?></td>
		<td><?php echo $row['kat_nama']; ?></td>
		<td><?php echo $row['kat_text']; ?></td>
		<td><a href="index.php?page=kategori_edit&id=<?php echo $row['kat_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=kategori_proses&delete-id=<?php echo $row['kat_id']; ?>">Delete</a></td>
	</tr>	
	<?php } ?>
</table>