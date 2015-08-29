<?php 
session_start();
if ($_SESSION['login']!=1)
{
	header("location: login_user.php");
}

?>
<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<img src='http://localhost/Project_6/include/images/selamat-datang2.jpg' class='img-responsive'>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>


