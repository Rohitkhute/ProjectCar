<?php include("database.php")?>
<?php 

	if(isset($_SESSION['username'])){
		$_SESSION['msg'] ="You must log in first to view in this page";
		
	}
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="style1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<h3>This is home page</h3>
	<div class="sidebar">
		<header>Car Rental</header>
		<ul>
			<li><a href="#"><i class=""></i></a>Home</li>
			<li><a href="#"><i class=""></i></a>About</li>
			<li><a href="#"><i class=""></i></a>Cars</li>
			<li><a href="#"><i class=""></i></a>Rent</li>
			<li><a href="#"><i class=""></i></a>Return</li>
			<li><a href="#"><i class=""></i></a>Contact Us</li>
		</ul>
	</div>
	<?php
	if(isset($_SESSION['success'])): ?>
	<div>
		<h4>
			<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);
			?>
		</h4>
	</div>
<?php endif ?>
<?php if(isset($_SESSION['username'])):?>
	<h3>Welcome <strong><?php echo $_SESSION['username'];?></strong></h3>
	<button><a href="home.php?Logout='1'">Logout</a></button>
<?php endif ?>

</body>
</html>

