<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<div id="input-penerbit">

				</div>
				<div id="output-penerbit"> </div>
					<h2>Data Kategori</h2>

					<a href="input.php" class="btn btn-primary">
							<i class="glyphicon glyphicon-plus"></i>
							Tambah Kategori
					</a>

					<div>&nbsp;</div>

					<table class="table table-hover table-bordered"> 
					<tr>
						<th>No</th>
						<th>NAMA</th>
						<th>OPSI</th>
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$sql="select * from kategori"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>
					<tr>
						<td><?php print $no; ?></td>
						<td><?php print $data['nama']; ?></td>
						<td>
							<a href="update.php?id=<?php print $data['id']; ?>"class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i>Update</a>
							<a href="delete.php?id=<?php print $data['id']; ?>"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
							<a href="view.php?id=<?php print $data['id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-eye-open"></i>view</a>

						</td>
					</tr>	
					<?php $no++; } ?>
				</table>
				</div>
			</div>
		</div>
	</div>

<?php include "../layout/footer.php";	?>
