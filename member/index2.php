<?php include "../include/fungsi.php" ?>
<?php include "../layout/header.php" ?>
<?php 
$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpustakaan",$conn);
					?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-12">
					<h2>Data Buku</h2>
					
					<a href="input.php" class="btn btn-primary">
							<i class="glyphicon glyphicon-plus"></i>
							Tambah Buku
					</a>

					<div>&nbsp;</div>

					<table class="table table-hover table-bordered"> 
					<tr>
						<th>id</th>
						<th>id buku</th>
						<th>id user</th>
						<th>tanggal peminjaman</th>
						<th>lama peminjaman</th>
						<th>tanggal pengembalian</th>
						<th>status</th>
						<th>OPSI</th>
						
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$sql="select * from peminjaman"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>
					<tr>
						
						<td><?php print $data['id']; ?></td>
						<td><?php print $data['id_buku']; ?></td>
						<td><?php print $data['id_user']; ?></td>
						<td><?php print $data['tanggal_pinjam']; ?></td>
						<td><?php print $data['lama']; ?></td>
						<td><?php print $data['tanggal_kembali']; ?></td>
						<td><?php print $data['status_peminjaman']; ?></td>
						<td>
							<a href="update.php?id=<?php print $data['id']; ?>"class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i> Update</a>
							<a href="delete.php?id=<?php print $data['id']; ?>"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
							<a href="view.php?id=<?php print $data['id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-eye-open"></i>view</a>
							<a href="input.php?id=<?php print $data['id']; ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-eye-open"></i>pinjam</a>

						</td>
					</tr>	
					<?php $no++; } ?>
				</table>
			</div><!-- #main_content -->
		</div>
	</div><!-- #content -->

<?php include "../layout/footer.php";	?>
