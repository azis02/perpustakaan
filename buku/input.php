<?php
include "../include/conn.php";
$sql_1 = mysql_query("SELECT `id`,`nama` FROM `penulis`");
$sql_2 = mysql_query("SELECT `id`,`nama` FROM `penerbit`");
$sql_3 = mysql_query("SELECT `id`,`nama` FROM `kategori`");


$Judul = $_POST ['judul'];
$ISBN = $_POST ['isbn'];
$Sinopsis = $_POST ['sinopsis'];
$Sampul = $_POST ['sampul'];
$Kategori = $_POST ['kategori'];
$Penulis = $_POST ['penulis'];
$Penerbit = $_POST ['penerbit'];
 
$error = 0;

if (trim($Judul)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($ISBN)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Sinopsis)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Sampul)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Kategori)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Penulis)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Penerbit)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
if($error==0)
{

	$sql = "INSERT INTO buku SET
			judul = '$Judul',
			isbn = '$ISBN',
			sinopsis = '$Sinopsis',
			sampul = '$Sampul',
			id_kategori = '$Kategori',
			id_penulis = '$Penulis',
			id_penerbit = '$Penerbit'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Judul</b>";
	
}

?>
<?php include "../layout/header.php" ?>
<div id="content" class="container">
	<div class="row">
		<div id="main_content" class="col-sm-8">
			<div id="input-penerbit">

<form action="" method="post" name="form1" target="_self" id="form1">
					<table border="1">
						<tr>
							<td colspan="2"><h2>Input Data Buku Perpustakaan</h2></td>
						</tr>
						<tr>
							<td>JUDUL BUKU</td>
							<td>
								<label>
									<input name="judul" type="text" id="judul" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>ISBN</td>
							<td>
								<label>
									<input name="isbn" type="text" id="isbn" size="50" maxlength="20" />
								</label>
							</td>
						</tr>
						<tr>
							<td>SINOPSIS</td>
							<td>
								<label>
									<input name="sinopsis" type="text" id="sinopsis" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>SAMPUL</td>
							<td>
								<label>
									<input name="sampul" type="text" id="sampul" size="50" maxlength="50" />
								</label>
							</td>
						</tr>
						<tr>
							<td>KATEGORI</td>
							<td>
								<select name="kategori" id="kategori">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_3)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>PENULIS</td>
							<td>
								<select name="penulis" id="penulis">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_1)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>PENERBIT</td>
							<td>
								<select name="penerbit" id="penerbit">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_2)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
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