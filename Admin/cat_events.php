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

	<?php
    	$do = isset($_GET['do']) ? $_GET['do'] : "Manage";

		if($do == "Manage"){?>

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
						<form class="html-editor pd-20 card-box mb-30" method="post" action="action-Insert/Insert-news-cat.php">
							<h2 class="h4 text-blue">Add Cat-new </h2>
							<a href="Team.php" class="btn btn-primary">Add Catagory new  </a>

							<div class="form-group row">
								<label class="col-sm-12 col-md-12 col-form-label">Catagory-new(en)</label>
								<div class="col-sm-12 col-md-12">
									<input class="form-control" type="text" placeholder="event_en" name="cat_post_en">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-12 col-form-label">Catagory-new(ar)</label>
								<div class="col-sm-12 col-md-12">
									<input class="form-control" type="text" placeholder="event_ar" name="cat_post_ar">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-12 col-form-label">Catagory-new(fr)</label>
								<div class="col-sm-12 col-md-12">
									<input class="form-control" type="text" placeholder="event_fr" name="cat_post_fr">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="submit">Add Cat new </a>
							</div>
						</form>
					</div>
					<div class="footer-wrap pd-20 mb-20 card-box">
						DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
					</div>
				</div>
		</div>

		<?php
		}elseif($do == "Edit"){?>
			<?php
				// edit this is form 
				if(isset($_GET['id'])){

					$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);

					require_once('database/cat_post.php');

					$test = new catPosts();

					$test->setpostid($id);

					$gettest = $test->get_cat('id' , 'events_catagory');

					if($gettest){
						while($rows = $gettest->fetch_assoc()){
							$id = $rows['post_catagory_id'];
							$title_cat_en = $rows['title_cat_en'];
							$title_cat_ar = $rows['title_cat_ar'];
							$title_cat_fr = $rows['title_cat_fr'];
							$slug = $rows['slug'];
							?>
							<!-- form Edit  -->

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
										<form class="html-editor pd-20 card-box mb-30" method="post" action="action_Edit/Edit_cat_events.php">
											<h2 class="h4 text-blue">Edit Cat-new </h2>
											<a href="cat_news.php" class="btn btn-primary">Add Catagory Evenet  </a>

											<div class="form-group row">
												<label class="col-sm-12 col-md-12 col-form-label">Catagory-Evenet(en)</label>
												<div class="col-sm-12 col-md-12">
													<input class="form-control" type="text" placeholder="Title_en" name="cat_post_en" value="<?php echo $title_cat_en; ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-12 col-form-label">Catagory-Evenet(ar)</label>
												<div class="col-sm-12 col-md-12">
													<input class="form-control" type="text" placeholder="Title_ar" name="cat_post_ar" value="<?php echo $title_cat_ar; ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-12 col-form-label">Catagory-Evenet(fr)</label>
												<div class="col-sm-12 col-md-12">
													<input class="form-control" type="text" placeholder="Title_fr" name="cat_post_fr" value="<?php echo $title_cat_fr; ?>">
												</div>
											</div>
											<div class="form-group">
												<input type="hidden" value="<?php echo $id; ?>" name="id">
												<button type="submit" class="btn btn-primary" name="submit">Edit Cat Evenet </a>
											</div>
										</form>
									</div>
									<div class="footer-wrap pd-20 mb-20 card-box">
										DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
									</div>
								</div>
							</div>

							<!-- form Edit -->
							<?php
						}

					}else{?>
							<div class="alert alert-warning">
							<strong>Warning!</strong> Indicates a warning that might need attention.
							</div>
					<?php
					}
				}
		}
	?>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>