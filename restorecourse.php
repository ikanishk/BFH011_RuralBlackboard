<?php
require 'adminSec.php';
if ($sus == 1) {
	require 'config.php';
	$code = $_POST['course'];
	$qry = $con->prepare("SELECT `course_name`, `course_desc`, `start_date`, `end_date`, `week`, `dept_id` FROM `courses` WHERE course_code = ?");
	$qry->bind_param("s",$code);
	if ($qry->execute()) {
		$qry->bind_result($name,$desc,$srtDate,$endDate,$week,$dept);
		while ($qry->fetch()) {
			$name = $name;
			$desc = $desc;
			$srtDate = $srtDate;
			$endDate = $endDate;
			$week = $week;
			$dept = $dept;
		}
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
<head>
	<title>E-PORTAL</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<!-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

	<!-- search modal -->
	

	<!-- Unyson messages modal -->
	
	<!-- eof .modal -->
	<div id="canvas">
		<div id="box_wrapper">
			<section class="page_toplogo ls section_padding_top_5 section_padding_bottom_5 toggler_right">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-md-center">
							
							<!-- header toggler -->
						</div>
					</div>
				</div>
			</section>
			<header class="page_header_side ls">
				<span class="toggle_menu_side">
					<span></span>
				</span>
				<div class="scrollbar-macosx">
					<div class="side_header_inner">
						<div class="text-center">
							<a href="#" class="logo vertical_logo">
								<img src="images/logo.png" alt="">
							</a>
						</div>
						<div class="header-side-menu darklinks">
							<!-- main side nav start -->
							<nav class="mainmenu_side_wrapper">
								<ul class="nav menu-click">
									<li class="active">
										<a href="adminhome.php">Home</a>
									</li>
									<li>
										<a href="#">Services</a>
										<ul>
											<li>
												<a href="addcourseadmin.php">Add New Course</a>
											</li>
											<li>
												<a href="delcourse.php">Manage Course</a>
											</li>
											<li>
												<a href="courseselectaddad.php">Add Notes</a>
											</li>
											<li>
												<a href="adddept.php">Add Department</a>
											</li>
											<li>
												<a href="deldept.php">Remove Department</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="reportadmin.php">Report</a>
									</li>
									<li>
										<a href="logout.php">LOGOUT</a>
									</li>
								</ul>
							</nav>
							<!-- eof main side nav -->
						</div>
						<div class="side_header_social">
							<span>
								<a href="#" class="social-icon color-bg-icon -icon soc-facebook"></a>
								<a href="#" class="social-icon color-bg-icon -icon soc-twitter"></a>
								<a href="#" class="social-icon color-bg-icon -icon soc-google"></a>
							</span>
						</div>
					</div>
				</div>
			</header>
			<section class="ls section_padding_top_100">
				<div class="container ">
					<div class="row">   
						<form class="shop-register" role="form" id = "addcourse" method="post">								
							<div class="col-sm-12">
								<div class="shipping-calculator-form with_padding color_border">
									<h3 class="text-center" style="margin-top:-100px;">Add New Course</h3>
									<p>Fill the below details</p>
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" name="dept" value="<?= $dept ?>" required readonly>
									</div>
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" placeholder="Course Id" name="course" id="calc_shipping_postcode" value="<?= $code ?>" required readonly>
									</div>

									<div class="form-group col-sm-6">
										<input type="text" class="form-control" placeholder=" Course Name" name="cn" id="calc_shipping_postcode" value="<?= $name ?>" required readonly>
									</div>
									<div class="form-group col-sm-6">
										<input type="number" class="form-control" placeholder=" Course Period" name="cl" id="calc_shipping_postcode" value="<?= $week ?>" required readonly>
									</div>
									<div class="form-group col-sm-12">
										<textarea class = "form-control" placeholder="Course Description." form = "addcourse" rows = "5" name = "desc" required readonly><?= $desc ?> </textarea>
									</div>
									<div class="form-group col-sm-12">
										<b>Enroll Period</b>
									</div>
									<div class="form-group col-sm-6">
										START DATE: <input type="date" class="form-control"  value="<?= $srtDate ?>" name="strtdt" id="calc_shipping_state" required>
									</div>
									<div class="form-group col-sm-6">
										END DATE: <input type="date" class="form-control" name="enddt" id="calc_shipping_state" value="<?= $endDate ?>" required>
									</div>
									<div class="form-group col-sm-12">
										<input type="date" class="form-control" id="calc_shipping_state" style="visibility: hidden;">
									</div>
									<center>
										<input type="submit" name="submit" class="theme_button color2" value = "Restore Course">
										&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="reset" name="calc_shipping" class="theme_button color2">CLEAR</button>
									</center>
									<br>
								</div>
							</div>
						</form>
						<?php
						if(isset($_POST['submit']))
						{
							$courseid = $_POST['course'];
							$date1 = $_POST['strtdt'];
							$date2= $_POST['enddt'];
							
							$sql = $con->prepare("UPDATE `courses` SET `start_date`=?,`end_date`=? WHERE `course_code`=?");
							$sql->bind_param("sss",$date1,$date2,$courseid);
							if ($sql->execute()) {
								echo "<script type = 'text/javascript'>alert('Course Restored succsessfully.')</script>";
							}else{
								echo "<script type = 'text/javascript'>alert('Course Restoration Failed!')</script>";
							}
						}
						?>
					</div>
				</div>
			</section>

			<?php
			require 'fotter.php';
			?>


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/starford/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 05:22:30 GMT -->
</html>