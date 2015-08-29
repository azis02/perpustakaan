<?php error_reporting(E_ALL);
include "../include/conn.php";
 
$error = 0;
	
$Nama = $_POST ['nama'];
$Alamat = $_POST ['alamat'];
$Telepon = $_POST ['telepon'];

if (trim($Nama)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($Alamat)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Telepon)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;
}
if($error==0)
{


	$sql = "INSERT INTO penulis SET
			nama = '$Nama',
			alamat = '$Alamat',
			telepon = '$Telepon'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Nama</b>";}
	

?>
<?php include "../layout/header.php" ?>
<div id="content" class="container">
	<div class="row">
		<div id="main_content" class="col-sm-8">
			<div id="input-penerbit">
				<div class="form">



				<form action="input.php" method="post" name="form1" target="_self" id="form1">
					
						<div class="form-group">
							<label><h2><p style="text-align:center;">.::Input Data Penulis::.</p></h2>
							</label>
						</div>
						<div class="form-group">
							<label>NAMA PENULIS</label>
							
							<input name="nama" type="text" class="form-control col-xs-12" id="nama" size="50" maxlength="50" />						
						</div>

						<div>&nbsp;</div>

						<div class="form-group">
							<label>ALAMAT</label>
							<input name="alamat" type="text" class="form-control col-xs-12" id="alamat" size="50" maxlength="10" />
								
						</div>
						
						<div>&nbsp;</div>

						<div class="form-group">
							<label>TELEPON</label>
							
								
							<input name="telepon" type="text" class="form-control" id="telepon" size="50" maxlength="50" />
								
						</div>
						
						<div class="form-actions well">
							<colspan="2">
								<label>
									<input type="submit" name="submit" id="submit" value="SAVE DATA" />
								</label>
							
						</div>
					
				</form>

<?php include "../layout/footer.php";	?>
