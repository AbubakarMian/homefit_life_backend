<!DOCTYPE html>
<html lang="en">
<head>
<?php function header( $str){ ?>


  <title>Home Fit Live</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <?php echo $str;?>

</head>
<body>
<header>
	<div class="topHeader">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<div class="logoArea">
						<a href="/homefit/home.php"><img src="images/logo.png" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-sm-7 col-xs-12">
					<div class="row mobileNav">
						<div class="col-xs-4 visible-xs xs-marker">
							<a href="https://goo.gl/maps/iE4esX3uT4hkjbuE9" target="_blank" title="Google Map"><i class="fa fa-map-marker "></i>Find</a>
						</div>
						<div class="col-xs-4 visible-xs xs-phone">
							<a href="tel:+92-21-38897770" target="_blank" title="Contact Number"><i class="fa fa-phone "></i>Call</a>
						</div>
						<div class="col-xs-4 visible-xs">
							<button data-target=".navbar-collapse" data-toggle="collapse" id="mnav-button" class="navbar-toggle fa fa-bars fa-2x collapsed" type="button">
							</button>
						</div>
					</div>
					<div class="menuBar">
						<nav>
							<div class="jump">  
								<div class="navbar-collapse nav-collapse collapse" aria-expanded="false" style="height: 1px;">
									<!-- responsive nav -->
									<ul class="nav navbar-nav">
										<li id="" class="inMenu">
											<a href="/homefit/home.php"><span>Home</span> </a>									
										</li>
										<li id="">									
											<a href=""><span>Classes</span> </a>									
										</li>
										<li id="">									
										
											<a href=""><span>Trainers</span> </a>									
										</li>
										<li id="">									
											<a href=""><span>Store</span> </a>									
										</li>
										<li id="">									
											<a href=""><span>Live Sessions</span> </a>									
										</li>									
									</ul>
								</div> <!-- .nav-collapse -->
							</div> <!-- .container -->
						</nav>
					</div>
				</div>
				<div class="col-sm-2 hidden-xs">
					<div class="cartArea"><!---<i class="flaticon-shopping-cart"></i>--->
						<a href="" class="btn btn-link btn-sm btn-cart"><i class="flaticon-cart" aria-hidden="true" style="font-size: 20px;"></i></a>
						<a href="" class="btn btn-primary btn-sm btn-UserLogin " >User Login <i class="fa fa-user-circle" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
	<?php 
}
?>


<?php function footer(){ ?>
<footer>
	<div class="footerArea">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<div class="ftrLogo">
						<img src="images/googleplay.png" class="img-responsive">
					</div>
					<div class="ftrLogo">
						<img src="images/appstore.png" class="img-responsive">
					</div>
					<div class="ftrLogo">
						<img src="images/webapp.png" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="ftrLinks">
						<h3>Resourses</h3>
						<ul class="ftrList">
							<li><a href="">My Info</a></li>
							<li><a href="">My Questions</a></li>
							<li><a href="">F.A.Q</a></li>
							<li><a href="">Search Trainer</a></li>
							<li><a href="">Latest Information</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="ftrContact">
						<h3>Contact</h3>
						<div>PO Box UN152468 , 1 Street North, New</div>
						<div>Town, Califonia, USA</div>
						<div>Phone: 123123123123</div>
						<div>Fax: 123123123123</div>
						<div>Email: test@test.com</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyRightArea">
		<div class="container">
			Copyrights © 2020. HomeFitLive All Rights Reserved. Designed By HatInco
		</div>
	</div>
</footer>
</body>
</html>

<?php 
}
?>