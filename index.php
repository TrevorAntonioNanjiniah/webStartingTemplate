<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header text-white">
		<img src="zalego-logo.jfif" alt="zalego" height="50" width="50" class="rounded-circle">
		<a href="#" class="navbar-trigger"><span></span></a>
	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="students.php">
						<span> <i class="fa fa-group"></i> </span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-folder-open"></i> </span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-graduation-cap"></i> </span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
    <div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
                         <span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa=3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
                        <span>Available Courses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-folder-open fa=3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
                        <span>campuses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa=5x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
                        <span>users</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa=3x"></i></span>
						<span class="float-right">00</span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
				</div>
				<div class="body-shadow">
					<span><i class="fa fa-line-chart fa-4x"></i></span>
					
				</div>
			</div>
		</div>
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>