<!doctype html>
<html>

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="title" content="<?= TITLE . ' ⦿ ' . $data['page_title']; ?>">
	<meta name="description" content="<?= $data['page_subtitle']; ?>">
	<meta name="author" content="<?= TITLE; ?>">
	<meta name="copyright" content="Copyright © <?= DATE('Y'); ?> | All rights reserved. Developed with 🖤 by <?= TITLE; ?>">

	<meta property="og:title" content="<?= TITLE . ' ⦿ ' . $data['page_title']; ?>">
	<meta property="og:description" content="<?= $data['page_subtitle']; ?>">
	<meta property="og:site_name" content="<?= TITLE; ?>">

	<meta itemprop="name" content="<?= TITLE; ?>">
	<meta itemprop="headline" content="<?= TITLE . ' ⦿ ' . $data['page_title']; ?>">
	<meta itemprop="description" content="<?= $data['page_subtitle']; ?>">

	<meta name="twitter:title" content="<?= TITLE . ' ⦿ ' . $data['page_title']; ?>">
	<meta name="twitter:description" content="<?= $data['page_subtitle']; ?>">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Favicon generated by https://realfavicongenerator.net/ -->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="/assets/images/favicon/safari-pinned-tab.svg" color="<?= MASK_COLOR; ?>">
	<link rel="shortcut icon" href="/assets/images/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="<?= MASK_COLOR; ?>">
	<meta name="msapplication-config" content="/assets/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="<?= THEME_COLOR; ?>">

	<!-- Fonts generated by https://fonts.google.com/ -->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

	<!-- Bootstrap style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Custom style -->
	<link rel="stylesheet" href="/css/style.css">

	<title><?= TITLE . ' ⦿ ' . $data['page_title']; ?></title>
</head>

<body class="container-xl">
	<!-- Progress bar -->
	<div class="progress">
		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</div>

	<!-- Autho hide alert -->
	<div role="alert" aria-live="assertive" aria-atomic="true" class="toast">
		<div class="toast-header">
			<img src="/assets/images/favicon/favicon-16x16.png" class="rounded mr-2" alt="<?= TITLE; ?> Logo">
			<strong class="mr-auto">Information</strong>
		</div>
		<div class="toast-body"></div>
	</div>

	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="."><?= TITLE; ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarToggler">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/blog">Blog</a>
				</li>
				<?php if (!isset($_COOKIE['loggedin'])) { ?>
					<li class="nav-item">
						<a class="nav-link" href="/register">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/login">Login</a>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link" href="/blog/create">Create</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/logout">Logout</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>