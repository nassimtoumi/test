<!DOCTYPE html>

<html lang="zxx">

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
			<h1 class="title">Sign in</h1>
			<ul class="breadcrambs">
				<li><a href="index.html">Home</a></li>
				<li>Sign in</li>
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
			<h2 class="title-decor">Sign<span>in</span></h2>
			<div class="row">
				<div class="col-md-4 crossfit-col">
					<form action="signinUtilisateur.php" method="POST">
						<div class="crossfit-item">
						
						<ul class="form-cover">
							<li class="inp-name">
								<label>Username  </label>
								<input type="text" name="username" placeholder="username" required>
							</li>
							<li class="inp-email">
								<label>Password </label>
								<input type="password" name="password" placeholder="password" required>
							</li>
						</ul>
						<input class="btn" type="submit" value="sign in">
						<!--<a class="btn" ><input type="submit" value="sign in"></a>-->
					</div>
					<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1){
                        echo "<p style='color:red'>Nom d'utilisateur n'existe pas</p>";
					}elseif ($err==2) {
						echo "<p style='color:red'>mot de passe incorrecte</p>";
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