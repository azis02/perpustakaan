<?php include "../include/fungsi.php"; ?>
<?php include "../layout/header.php" ?>
    <div id="content" class="container">
        <div class="row">
            <div id="main_content" class="col-sm-8">
                <?php 
                $conn=mysql_connect("localhost","root",""); 
                mysql_select_db("perpustakaan"); 
                $id = $_GET['id'];
                $sql="select * from buku WHERE id = ".$_GET['id']; 
                $hasil=mysql_query($sql,$conn);
                ?>
                <?php while($data = mysql_fetch_array($hasil)) { ?>

                <table class="table">
                  <h1> DATA BUKU </h1>
                 <tr>
                        <th width="30%">JUDUL</th>
                        <td width="70%">: <?php print $data['judul']; ?></td>
                 </tr>
                  <tr>
                        <th width="30%">ISBN</th>
                        <td width="70%">: <?php print $data['isbn']; ?></td>
                 </tr>
                  <tr>
                        <th width="30%">SiNOPSIS</th>
                        <td width="70%">: <?php print $data['sinopsis']; ?></td>
                 </tr>  
                  <tr>
                        <th width="30%">SAMPUL</th>
                        <td width="70%">: <?php print $data['sampul']; ?></td>
                 </tr>  
                  <tr>
                        <th width="30%">KATEGORI</th>
                        <td width="70%">: <?php print getNamaKategori($data['id_kategori']); ?></td>
                 </tr>  
                  <tr>
                        <th width="30%">PENULIS</th>
                        <td width="70%">: <?php print  getNamaPenulis($data['id_penulis']); ?></td>
                 </tr>  
                  <tr>
                        <th width="30%">PENERBIT</th>
                        <td width="70%">: <?php print getNamaPenerbit($data['id_penerbit']); ?></td>
                 </tr>       

                </table>
                <?php } ?>
                
            </div>
            <?php include "../layout/sidebar.php"; ?>
        </div>
    </div>

<?php include "../layout/footer.php";   ?>
