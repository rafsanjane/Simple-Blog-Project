<!DOCTYPE html>
<html lang="en">

<head>
	<title>DevCard - Bootstrap 5 vCard &amp; Portfolio Template For Developers</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 5 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">

	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS -->
	<script defer src="assets/fontawesome/js/all.js"></script>

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="assets/plugins/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link href="assets/css/heroes.css" rel="stylesheet">

</head>

<body>

	<header class="header text-center">
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.php">Rafsan Jane</a></h1>

			<nav class="navbar navbar-expand-lg navbar-dark">

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navigation" class="collapse navbar-collapse flex-column">
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image">

						<div class="bio mb-3">Hi, my name is Rafsan Jane and I'm a Web Developer. Welcome to my personal website!</div>
						<!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
						</ul>
						<!--//social-list-->
						<hr>
					</div>
					<!--//profile-section-->

					<ul class="navbar-nav flex-column text-start">

						<li class="nav-item">
							<a class="nav-link <?php if ($currentpage == 'index') {
													echo  ' active';
												} ?>" href="index.php"><i class="fas fa-user fa-fw me-2"></i>About Me<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  <?php if ($currentpage == 'portfolio') {
													echo  'active';
												} ?>" href="portfolio.php"><i class="fas fa-laptop-code fa-fw me-2"></i>Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($currentpage == 'services') {
													echo  'active';
												} ?>" href="services.php"><i class="fas fa-briefcase fa-fw me-2"></i>Services &amp; Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($currentpage == 'resume') {
													echo  'active';
												} ?>" href="resume.php"><i class="fas fa-file-alt fa-fw me-2"></i>Resume</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="blog-home.php"><i class="fas fa-blog fa-fw me-2"></i>Blog</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link <?php if ($currentpage == 'contact') {
													echo  'active';
												} ?>" href="contact.php"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Contact</a>
						</li>

						<!--//More Pages nav-->

						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-cogs fa-fw me-2"></i>More Pages
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="project.php">Project Page</a></li>
								<li><a class="dropdown-item" href="blog-home.php">Blog Home 1</a></li>
								<li><a class="dropdown-item" href="blog-home-alt.php">Blog Home 2</a></li>
								<li><a class="dropdown-item" href="blog-post.php">Blog Post</a></li>
							</ul>
						</li> -->
					</ul>

					<div class="my-2">
						<a class="btn btn-primary" href="contact.php" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a>
					</div>


					<div class="dark-mode-toggle text-center w-100">
						<hr class="mb-4">
						<h4 class="toggle-name mb-3 "><i class="fas fa-adjust me-1"></i>Dark Mode</h4>

						<input class="toggle" id="darkmode" type="checkbox">
						<label class="toggle-btn mx-auto mb-0" for="darkmode"></label>

					</div>
					<!--//dark-mode-toggle-->

				</div>
			</nav>
		</div>
		<!--//force-overflow-->
	</header>

	<div class="main-wrapper">