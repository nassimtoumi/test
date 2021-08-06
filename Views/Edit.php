<!DOCTYPE html>
<html lang="zxx">

<?php session_start();
if (!isset($_SESSION['id'])) {
	header('Location: index.php');
}
?>
<?php include 'includes/head.php'?>

<body id="home">
	<!--================ PRELOADER ================-->
	
<?php include 'includes/preloader.php'?>
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	
<?php include 'includes/header.php'?>
	<!-- =============== HEADER END =============== -->

	<!-- =============== HEADER-TITLE =============== -->
	<section class="s-header-title" style="background-image: url(assets/img/bg-1-min.png);">
		<div class="container">
			<h1 class="title">Edit Profile</h1>
			<ul class="breadcrambs">
				<li><a href="index.html">Home</a></li>
				<li>Edit Profile</li>
			</ul>
		</div>
	</section>
	<!-- ============= HEADER-TITLE END ============= -->

	<!-- ================ S-CROSSFIT ================ -->
	<section class="s-crossfit">
		<div class="container">
			<img src="assets/img/group-circle-2.svg" alt="img" class="crossfit-icon-1">
			<img src="assets/img/line-red-1.svg" alt="img" class="crossfit-icon-2">
			<img src="assets/img/tringle-about-top.svg" alt="img" class="crossfit-icon-3">
			<h2 class="title-decor">Ed<span>it</span></h2>
			<div class="row">
				<div class="col-md-4 crossfit-col">
					<form action="modifierUtilisateur.php?id=<?php echo $_SESSION['id'] ?>" method="POST">
						<div class="crossfit-item">
						<ul class="form-cover">
							<li class="inp-name">
								<label>Username  </label>
								<input  disabled type="text" name="username" value="<?php echo $_SESSION['name'] ?>" required>
							</li>
							<li class="inp-email">
								<label>Email </label>
								<input type="text" name="email"required pattern=".+@.+" value="<?php echo $_SESSION['email'] ?>" >
							</li>
							<li class="inp-email">
								<label>New password </label>
								<input type="password" name="password" placeholder="New password"   required>
							</li>
							<li class="inp-email">
								<label>Confirm new password </label>
								<input type="password" name="password2" placeholder="Confirm new password" required>
							</li>
						</ul>
						<input class="btn" type="submit" value="Edit">
						<br></br>
						
						<button class="btn" type="button"><a href= "supprimerUtilisateur.php?id=<?php echo $_SESSION['id'] ?>">Delete account</a> </button>				
					</div>	
					<?php
					if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==0){
                        echo "<script>alert('profile updated');</script>";
					}elseif ($err==1) {
						echo "<p style='color:red'>passwords dosen't match</p>";
					}
                }
				?>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- ============== S-CROSSFIT END ============== -->

	
	


	
	

<!-- ================== FOOTER ================== -->

<?php include 'includes/footer.php'?>
<!-- ================ FOOTER END ================ -->
<!--=================== SCRIPT	===================-->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>