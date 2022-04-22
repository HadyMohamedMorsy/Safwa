<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<?php include('Header.php'); ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<form class="html-editor pd-20 card-box mb-30">

					<h2 class="h4 text-blue">Add Posts </h2>
					<a href="blogs.php" class="btn btn-primary">Add Post </a>

					<div class="form-group row">
						<label class="col-sm-12 col-md-12 col-form-label">Title-(EN)</label>
						<div class="col-sm-12 col-md-12">
							<input class="form-control" type="text" placeholder="Title Name" name="title">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-12 col-form-label">Title-(AR)</label>
						<div class="col-sm-12 col-md-12">
							<input class="form-control" type="text" placeholder="Title Name" name="title">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-12 col-form-label">Title-(FR)</label>
						<div class="col-sm-12 col-md-12">
							<input class="form-control" type="text" placeholder="Title Name" name="title">
						</div>
					</div>
					<h2 class="h4 text-blue mt-5"> English Box  </h2>
					<textarea class="textarea_editor form-control border-radius-0" placeholder="Enter text ..."></textarea>

					<h2 class="h4 text-blue mt-5"> Arabic Box  </h2>
					<textarea class="textarea_editor-secound form-control border-radius-0" placeholder="Enter text ..."></textarea>

					<h2 class="h4 text-blue mt-5"> Frensh  Box  </h2>
					<textarea class="textarea_editor-Thired form-control border-radius-0" placeholder="Enter text ..."></textarea>

					<div class="form-group">
							<label>Custom file input</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Add Post </a>
						</div>
				</form>
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>