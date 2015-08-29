<?php include "../layout/header.php" ?>
    <div id="content" class="container">
        <div class="row">
            <div id="main_content" class="col-sm-8">
                <?php 
                $conn=mysql_connect("localhost","root",""); 
                mysql_select_db("perpustakaan"); 
                $id = $_GET['id'];
                $sql="select * from penulis WHERE id = ".$_GET['id']; 
                $hasil=mysql_query($sql,$conn);
                ?>
                <?php while($data = mysql_fetch_array($hasil)) { ?>
               <table class="table">
                <h1> DATA PENULIS </h1>
                 <tr>
                        <th width="30%">NAMA</th>
                        <td width="70%">: <?php print $data['nama']; ?></td>
                 </tr>
                  <tr>
                        <th width="30%">ALAMAT</th>
                        <td width="70%">: <?php print $data['alamat']; ?></td>
                 </tr>
                  <tr>
                        <th width="30%">TELEPON</th>
                        <td width="70%">: <?php print $data['telepon']; ?></td>
                 </tr>        

                </table>
                <?php } ?>
                <h1> DAFTAR BUKU </h1>
                <?php $id = $_GET ['id']; ?>
                <?php $sql = "SELECT * FROM buku WHERE id_penulis = '$id'"; ?>
                <?php $dataBuku = mysql_query($sql); ?>
                <table class ="table">
                    <tr>
                      <th>NO</th>
                      <th>JUDUL</th>
                    
                      
                    </tr>
                    <?php $no = 1; ?>
                    <?php while ($data = mysql_fetch_array($dataBuku)) { ?>
                    <tr>
                      <td><?php print $no; ?></td>
                      <td> <a href="../buku/view.php?id=<?php print $data['id']; ?>"><?php print $data['judul']; ?></td>

                    </tr>
                    <?php $no++; } ?>
                  </table>
            </div>
            <?php include "../layout/sidebar.php"; ?>
        </div>
    </div>
    

<?php include "../layout/footer.php";   ?>
