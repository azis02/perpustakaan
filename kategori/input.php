<?php
include "../include/conn.php";

	$nama = $_POST['nama'];
 


	$sql = "INSERT INTO kategori SET
			nama = '$nama'";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$nama</b>";
	//include "index.php";

?>
<?php include "../layout/header.php" ?>
<div id="content" class="container">
	<div class="row">
		<div id="main_content" class="col-sm-8">
			


				<form action="" method="post" name="form1" target="_self" id="form1">
					
						<div class="from-group">
							<lebel><h2>.::Input Data Kategori::.</h2>
							</lebel>
						</div>

						<div class="from-group">
							<label>NAMA</label> <div> &nbsp	</div>						
							
								
									<input name="nama" type="text" class="form-control" id="nama" size="50" maxlength="50" />
								
							</div>
						
						<div class="from-actions well"> <br>
							
								<input type ="hidden" name="proses" value="1">
									<input type="submit" name="submit" id="submit" value="SAVE DATA" />
								
							
						</div>
						
					
				</form>
				<?php include "../layout/footer.php";	?>