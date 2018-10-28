<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>MESHADOW</title>
		<link rel="icon" href="img/icon.png">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<img src="img/icon.png" width="7%">
						&nbsp;&nbsp;
						<font face="JasmineUPC" size="5px"><b>MESHADOW</b></font>
						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<center><img src="img/ghost.png" width="50%"></left>
							&nbsp;&nbsp;
							<font face="JasmineUPC" size="6px"><b>HI, USER#1</b></font></center>
							<br>
							<br>
							<br>
							<li><a href="index.php">Home</a></li>
							<li><a href="#my_post">My Post</a></li>
							<li><a href="../choose_university.php">Set Shadow</a></li>
							<li><a href="../index.php">Logout</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
			
			<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('./img/bg.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-1">BUU</a>
								<span class="post-date" >October 28, 2018</span>
							</div>
							<h1><font face="JasmineUPC" size="20px">ลูกระนาดเยอะเกินไป</font></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">	
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/author.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3>USER #1</h3>
										</div>
										<p><font face="JasmineUPC" size="5px">ลูกระนาดเยอะเกินไป อาจทำให้รถจักรยานยนต์มีปัญหาได้ เช่น ล้อและเบรก ควรทำลูกระนาดให้พอเหมาะสม</font></p>
										<button onclick="alertAgree()" ><i class="fa fa-snapchat-ghost button" style="font-size:20px;" >&nbsp; agree</i></button>
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										<button onclick="alertDisagree()" ><i  class="fa fa-snapchat-ghost button" style="font-size:20px; color:red;" >&nbsp; disagree</i></button>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						<!-- comments -->
						<div class="section-row">
							<div class="section-title">
								<h2>3 Comments</h2>
							</div>

							<div class="post-comments">
								<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4>USER #2</h4>
											<span class="time">October 28, 2018 at 8:20 am</span>
											<a href="#" class="reply">การตอบกลับ</a>
										</div>
										<p><font face="JasmineUPC" size="5px">ฉันเห็นด้วย เพราะสาเหตุที่ฉันต้องไปซ่อมรถ เพราะลูกระนาดเนี่ยแหละ</font></p>

										<!-- comment -->
										<div class="media">
											<div class="media-left">
												<img class="media-object" src="./img/avatar.png" alt="">
											</div>
											<div class="media-body">
												<div class="media-heading">
													<h4>USER #3</h4>
													<span class="time">October 28, 2018 at 9:22 am</span>
													<a href="#" class="reply">การตอบกลับ</a>
												</div>
												<p><font face="JasmineUPC" size="5px">ควรทำให้ดีขึ้นนะ เพราะสงสารรถ</font></p>
											</div>
										</div>
										<!-- /comment -->
									</div>
								</div>
								<!-- /comment -->

								<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4>USER #4</h4>
											<span class="time">October 28, 2018 at 9:45 am</span>
											<a href="#" class="reply">การตอบกลับ</a>
										</div>
										<p><font face="JasmineUPC" size="5px">ดีๆ ฉันก็เป็นเหมือนกัน</font></p>
									</div>
								</div>
								<!-- /comment -->
							</div>
						</div>
						<!-- /comments -->

						<!-- reply -->
						<div class="section-row">
							<div class="section-title">
								<h2>Comment</h2>
								<p>โปรดแสดงความคิดเห็นให้อยู่ในขอบเขต และเหมาะสม</p>
							</div>
							<form class="post-reply">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" name="message" placeholder="Comment Message"></textarea>
										</div>
										<button class="primary-button">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /reply -->
					</div>
					<!-- /Post content -->
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
