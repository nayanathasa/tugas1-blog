<?php 

include_once "app/Controller.php";
include_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$row = $kat->edit($id);

?>

<h2>EDIT KATEGORI</h2>
<form method="POST" action="kategori_proses.php">
	<input type="hidden" name="kat_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="kat_nama" value="<?php echo $row['kat_nama']; ?>"></td>
		</tr>
		<tr>
			<td>KETERANGAN</td>
			<td><textarea name="kat_text"><?php echo $row['kat_text']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>