<header class="header">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="top-panel">
			<div class="container">
				<div class="header-left">
					<ul class="header-cont">
						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+216 22 269 443">22 269 443</a></li>
						<li><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Fri: 8:00AM - 7:00PM | Sat - Sun: Closed</li>
					</ul>
				</div>
				<div class="header-right">
					<ul class="header-cont">

						<!--Visible Before Login-->
		
						
						<li><form class="search-form">
							<input type="search" class="search-form__field" placeholder="Search" value="" name="s">
							<button type="submit" class="search-form__submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form></li>
						<!--Visible After Login-->
						<?php
						if (isset($_SESSION['id'])) {
						?>
						<ul class="nav-list">
						<li class="dropdown">
						
							<a href="#"><i class="fa fa-user-circle"></i><?php echo $_SESSION['name']; ?> <i class="fa fa-caret-down"></i></a>
							<ul>
								<li><a  href="Edit.php">Edit Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						
						</li>
					</ul>
					<?php
						} else {
							?> 
						 
						<li><a  href="signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Signin</a></li>
						<li><a  href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Signup</a></li>
						<?php
						}
						?>
						<!--Search-->
					</ul>
					<ul class="social-list">
						<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="container">
				<div class="header-logo">
					<a href="index.php" class="logo"><img src="assets/img/logosporthub.png" alt="logo"></a>
				</div>
				<nav class="nav-menu">
				<?php
						if (isset($_SESSION['id'])) {
				?>	
				<ul class="nav-list">
					    <li><a  href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						<li><a  href="Forum.php"><i class="fa fa-group" aria-hidden="true"></i>Forum</a></li>
						<li class="dropdown">
							<a href="#"><i class="fa fa-bars"></i> Category <i class="fa fa-caret-down"></i></a>
							<ul>
								<li ><a href="Fitness.php">Fitness</a></li>
								<li><a href="yoga.php">yoga</a></li>
								<li><a href="meditation.php">Méditation</a></li>
							</ul>
						</li>
						<li><a  href="Signup.php"><i class="fa fa-bookmark" aria-hidden="true"></i>Bookmarked</a></li>
					</ul>
					<?php
						} else {
							?> 
					<ul class="nav-list">
						<li><a  href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						<li><a  href="Forum.php"><i class="fa fa-group" aria-hidden="true"></i>Forum</a></li>
						<li><a  href="Signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign in</a></li>
						<li><a  href="Signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Sign up</a></li>
					</ul>
					<?php
						}
						?>
				</nav>
			</div>
		</div>
	</header>