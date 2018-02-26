<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title><?php echo $meta_title .' | '. 'Website Name' ?></title>
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="css/bootstrap_extended.css"> -->
	<!-- <link rel="stylesheet" href="css/bootstrap-flexbox.css"> -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="js/fancyBox-3.1.20/jquery.fancybox.min.css"> -->
	<!-- <link rel="stylesheet" href="js/select2-4.0.3/css/select2.min.css"> -->
	<!-- <link rel="stylesheet" href="js/flickity-2.0.8/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="js/jasny-bootstrap-3.1.3/css/jasny-bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/compressed.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css?ver=<?php echo time(); ?>">
	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>
<body>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<nav class="navbar">
				<div class="container-fluid">

					<div class="navbar-header">
						<button type="button" class="icon icon--transparent navbar-toggle" data-toggle="collapse" data-target="#main_navigation">
							<span></span><span></span><span></span>
						</button>
						<a class="navbar-brand" href="index.php">Simple PHP blog</a>
					</div><!--/.navbar-header -->
					<div id="main_navigation" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li <?php if ($is_home) {
								echo "class='active'";
							} ?>><a href="index.php">Home</a></li>
						</ul>
					</div><!--/.nav-collapse -->

				</div><!--/.container-fluid -->
			</nav>
		</header><!-- #masthead -->
		<main id="main" class="site-main <?php if ($is_home == true || $is_single == true) { echo 'blog';} ?> <?php if ($is_single == true) { echo 'single';} ?>" role="main">
