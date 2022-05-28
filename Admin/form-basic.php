

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
												<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							<!-- Default Basic Forms Start -->
							<div class="pd-20 card-box mb-30">
								<div class="clearfix">
									<div class="pull-left">
										<h4 class="text-blue h4">Default Basic Forms</h4>
										<p class="mb-30">Regester Your User Of Safwa </p>
									</div>
								</div>
								<form method="post" action="action-Insert/Insert-user.php">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">UserName</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" type="text" placeholder="Johnny Brown" name="username">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Email</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="bootstrap@example.com" type="email" name="email">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Password</label>
										<div class="col-sm-12 col-md-10">
											<input class="form-control" value="password" type="password" name="Password">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">Select Type Of User</label>
										<div class="col-sm-12 col-md-10">
											<select class="custom-select col-12" name="employer">
												<option selected="">Choose...</option>
												<option value="Admin">Admin</option>
												<option value="Employer">Employer</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label>Custom file input</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input">
											<label class="custom-file-label">Choose file</label>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="submit">Add User </a>
									</div>
								</form>
								<div class="collapse collapse-box" id="basic-form1" >
									<div class="code-box">
										<div class="clearfix">
											<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
											<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
										</div>
								</div>
							</div>
					</div>
							<!-- Default Basic Forms End -->
					</div>
						<div class="footer-wrap pd-20 mb-20 card-box">
							Safwa  - Engneering Industry  <a href="https://github.com/dropways" target="_blank">Hady Mohamed</a>
						</div>
					</div>
			</div>
		
		<?php
		}elseif($do == "Edit"){?>
			<?php
				// edit this is form 
				if(isset($_GET['id'])){

					$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);

					require_once('database/users.php');

					$get_data = new users();

					$get_data->setUserId($id);

					$getusers = $get_data-> get_users('id');

					if($getusers){
						while($rows = $getusers->fetch_assoc()){
							$username = $rows['UserName'];
							$Email = $rows['Email'];
							$profile = $rows['profile'];
							$Employer = $rows['Employer']; ?>
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
																<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
															</ol>
														</nav>
													</div>
												</div>
											</div>
											<!-- Default Basic Forms Start -->
											<div class="pd-20 card-box mb-30">
												<div class="clearfix">
													<div class="pull-left">
														<h4 class="text-blue h4">Default Basic Forms</h4>
														<p class="mb-30">Regester Your User Of Safwa </p>
													</div>
												</div>
												<form method="post" action="action_Edit/Edit_user.php">
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">UserName</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" type="text" placeholder="Johnny Brown" name="username" value="<?php echo $username; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Email</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="bootstrap@example.com" type="email" name="email" value="<?php echo $Email; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Password</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="password" type="password" name="Password">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Select Type Of User</label>
														<div class="col-sm-12 col-md-10">
															<select class="custom-select col-12" name="employer">
																<option selected="">Choose...</option>
																<option value="Admin" <?php if($Employer == "Admin"){ echo 'selected';} ?>>Admin</option>
																<option value="Employer" <?php if($Employer == "Employer"){ echo 'selected';} ?>>Employer</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label>Custom file input</label>
														<div class="custom-file">
															<input type="file" class="custom-file-input">
															<label class="custom-file-label">Choose file</label>
														</div>
													</div>
													<div class="form-group">
														<input type="hidden" value="<?php echo $rows['User_id']; ?>" name="id" />
														<button type="submit" class="btn btn-primary" name="submit">Edit User </a>
													</div>
												</form>
												<div class="collapse collapse-box" id="basic-form1" >
													<div class="code-box">
														<div class="clearfix">
															<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
															<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
														</div>
												</div>
											</div>
									</div>
											<!-- Default Basic Forms End -->
									</div>
										<div class="footer-wrap pd-20 mb-20 card-box">
											Safwa  - Engneering Industry  <a href="https://github.com/dropways" target="_blank">Hady Mohamed</a>
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
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>