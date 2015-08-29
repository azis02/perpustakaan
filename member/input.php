<?php
session_start();

include "../include/conn.php";
$sql_1 = mysql_query("SELECT `id`,`nama` FROM `penulis`");
$sql_2 = mysql_query("SELECT `id`,`nama` FROM `penerbit`");
$sql_3 = mysql_query("SELECT `id`,`nama` FROM `kategori`");
$id = $_GET['id'];



$id_buku = $_POST ['id_buku'];
$id_user = $_POST ['id_user'];
$tanggal_pinjam = $_POST ['tanggal_pinjam'];
$lama = $_POST ['lama'];
$tanggal_kembali = $_POST ['tanggal_kembali'];
$status_peminjaman = $_POST ['status_peminjaman'];
 
$error = 0;

if (trim($id_buku)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($id_user)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($tanggal_pinjam)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($lama)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($tanggal_kembali)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($status_peminjaman)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
if($error==0)
{

	$sql = "INSERT INTO peminjaman SET
			id_buku = '$id_buku',
			id_user = '$id_user',
			tanggal_pinjam = '$tanggal_pinjam',
			lama = '$lama',
			tanggal_kembali = '$tanggal_kembali',
			status_peminjaman = '$status_peminjaman'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$id_buku</b>";
	
}

?>
<?php
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpustakaan",$conn);
		$sql_1 = mysql_query("SELECT * FROM `buku`");
?>
<?php include "../layout/header.php" ?>
<div id="content" class="container">
	<div class="row">
		<div id="main_content" class="col-sm-8">
			<div id="input-penerbit">

<form action="" method="post" name="form1" target="_self" id="form1">
					<table class="table table-hover">
						<tr>
							<td colspan="2"><h2>Input Data Peminjam</h2></td>
						</tr>
						
						</tr>
						<tr>
							<td>ID BUKU </td>
							<td>
								<label>
									:&nbsp<input name="id_buku" type="text" id="id"  value="<?php print $id; ?>"size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>ID USER</td>
							<td>
								<label>
									:&nbsp<input name="id_user" type="text" id="id_user" value="<?php print $_SESSION[username]; ?>" size="50" maxlength="20" />
								</label>
							</td>
						</tr>
						<tr>
							<td>TANGGAL PINJAM</td>
							<td>
								<label>
									:&nbsp<input name="tanggal_pinjam" type="date" id="tanggal_pinjam" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>LAMA</td>
							<td>
								<label>
									:&nbsp<input name="lama" type="text" id="lama" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>TANGGAL KEMBALI</td>
							<td>
								<label>
									:&nbsp<input name="tanggal_kembali" type="date" id="tanggal_kembali" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>STATUS PEMINJAMAN</td>
							<td>
								<label>
									:&nbsp<input name="status_peminjaman" type="text" id="status_peminjaman" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<label>
									<input type="submit" name="submit" id="submit" value="SAVE DATA" />
								</label>
							</td>
						</tr>
					</table>
				</form>

<?php include "../layout/footer.php";	?>