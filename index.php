<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
     $middle_name = $_POST['middle_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
    //  $phone = $_POST['phone']; exit;
     $gender = $_POST['gender'];
     $content = $_POST['content'];
	 $sql = "INSERT INTO appoinment(first_name,last_name,middle_name,city_name,email,phone,gender,content)
	 VALUES ('$first_name','$last_name','$middle_name','$city_name','$email','".$_POST['phone']."','$gender','$content')";
	 if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Information inserted successfully !')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="100x100" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Appoinment Form</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
	<link href="assets/css/themify-icons.css" rel="stylesheet">

	</head>
	<body>
	<div class="image-container set-full-height" style="background-color:#ddd;">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-12">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="" method="">
		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Take Appoinment</h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Personal Information
											</a>
										</li>
			                            <li>
											<a href="#information" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-id-badge"></i>
												</div>
												Location
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-book"></i>
												</div>
												Credentials
											</a>
										</li>
										<li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-heart-broken"></i>
												</div>
												Specialities / Issues
											</a>
										</li>
										<li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-stats-up"></i>
												</div>
												Finances
											</a>
										</li>
										<li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-share"></i>
												</div>
												Publish
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
										<h5 class="info-text">About Information Your Self.</h5>
		                            	<div class="row">
											
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>First Name <small>(required)</small></label>
													<input name="firstname" type="text" class="form-control" placeholder="Enter first name">
												</div>
												<div class="form-group">
													<label>Last Name <small>(required)</small></label>
													<input name="lastname" type="text" class="form-control" placeholder="Enter last name">
												</div>
												<div class="form-group">
													<label>Mobile Phone <small>(required)</small></label>
													<input name="phoneNumber" type="text" class="form-control" placeholder="Enter phone number">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="example.email@gmail.com">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="information">
		                                <h5 class="info-text">Information patient.</h5>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>University<small>(required)</small></label>
													<input name="university" type="text" class="form-control" placeholder="Enter university">
												</div>
												<div class="form-group">
													<label>Year start<small>(required)</small></label>
													<input name="yearStart" type="text" class="form-control" placeholder="Enter year start">
												</div>
												
											
										</div>
									</div>
									
		                            <div class="tab-pane" id="address">
										<h5 class="info-text">Information Live Address.</h5>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Country<small>(required)</small></label>
													<input name="country" type="text" class="form-control" placeholder="Enter country">
												</div>
												<div class="form-group">
													<label>City<small>(required)</small></label>
													<input name="city" type="text" class="form-control" placeholder="Enter year city">
												</div>
												<div class="form-group">
													<label>Province<small>(required)</small></label>
													<input name="province" type="text" class="form-control" placeholder="Enter province">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Village<small>(required)</small></label>
													<input name="vilage" type="text" class="form-control" placeholder="Enter vilage">
												</div>
											</div>
										</div>
									</div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->
	</div>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<!--  Plugin for the Wizard -->
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
	<!--  More information about jquery.validate here: https://jqueryvalidation.org/ -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
