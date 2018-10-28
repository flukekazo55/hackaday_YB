<!DOCTYPE html>
<html lang="en">
	<style>
	.button {
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 16px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		cursor: pointer;
	}
	.button {
		background-color: white; 
		color: black; 
		border: 2px solid #008CBA;
	}

	.button:hover {
		background-color: #008CBA;
		color: white;
	}
	</style>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- title + icon tab web site -->
		<title>MESHADOW</title>
		<link rel="icon" href="img/icon.png">

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/grayscale.css" rel="stylesheet">
		<!-- <link href="css/grayscale.min.css" rel="stylesheet"> -->

	</head>

	<body>

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger  " href="about.php" style="color:#00BFFF"><b>About</b></a>
            </li>
            <!-- <li class="nav-item"> -->
              <!-- <a class="nav-link js-scroll-trigger  " href="#help">Help</a> -->
            <!-- </li> -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger  " href="contract.php" style="color:#00BFFF" ><b>Contact</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead responsive" >
		<div class="container d-flex h-100 align-items-center">
			<div class="mx-auto text-center">
				<img src="img/icon.png" height = "300px" width = "300px" alt="ICON MESHADOW WEB"><br><br>
				<!-- <h1 class="mx-auto my-0 text-uppercase">MESHADOW</h1> -->
				<h2 class="text-white-50 mx-auto mt-2 mb-5">Let your shadow point to the light way.</h2>
				<div class="login"  >

				<?php
				include 'config.php';
				//SESSION_DESTROY();
				//echo $_SESSION['fb_access_token'];
				if(isset($_SESSION['fb_access_token'])){
					$token = $_SESSION['fb_access_token'];
					try {
					// Returns a `Facebook\FacebookResponse` object
					$response = $fb->get('/me?fields=id,name', $token);
					} catch(Facebook\Exceptions\FacebookResponseException $e) {
					echo 'Graph returned an error: ' . $e->getMessage();
					exit;
					} catch(Facebook\Exceptions\FacebookSDKException $e) {
					echo 'Facebook SDK returned an error: ' . $e->getMessage();
					exit;
				}

				$user = $response->getGraphUser();

				// echo 'Name: ' . $user['name'];
				// OR
				// echo 'Name: ' . $user->getName();
				echo '<a href="?logout" type="button" class="btn btn-primary js-scroll-trigger" ><b>Log out<b></a>'; 
				
				// else
				}else{
					$helper = $fb->getRedirectLoginHelper();

					$permissions = ['email']; // Optional permissions
					$loginUrl = $helper->getLoginUrl('https://localhost/home/fb/fb-callback.php', $permissions);

					echo '<a  href="' . htmlspecialchars($loginUrl) . '" type="button" class="btn btn-primary js-scroll-trigger""><b>LogIn FACEBOOK</b></a>';
				}

				if(isset($_GET['logout'])){
					unset($_SESSION['fb_access_token']);
					header('location: ./');
					exit;
				}

				?>
				</div>
			</div>
      </div>
    </header>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
