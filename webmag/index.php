<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- other -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- Style for create-->
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Font Awesome Icon -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			span.pic {
			   display: block;
			   float: none;
			}
		</style>
    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<img src="img/icon.png" width="7%">
						&nbsp;&nbsp;
						<font face="JasmineUPC" size="5px"><b>MESHADOW</b></font>
						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></button>
							<!-- create-->
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
							<li><a href="../choose_university.html">Set Shadow</a></li>
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
			
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<div class="container">
							  <!-- Trigger the modal with a button -->
							  <center><button color="black" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color:black"><b>CREATE POST</b></button></center>

							  <!-- Modal -->
							  <div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
								
									<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
											
											  <button type="button" class="close" data-dismiss="modal">&times;</button>
											  <center><img src="img/tools.png" width="20%"></center><br>
											  <center><h4 class="modal-title"><b>CREATE POST</b></h4></center>
											</div>
											<br>
											<div class="col-md-6 col-lg-6">
												<img src="img/topic.png" width="10%">
												&nbsp;
												<label for="uname"><font face="JasmineUPC" size="5px" ><b>Topic</b></font></label><br>
												<input type="text"  placeholder="PLEASE INPUT TOPIC" name="uname" required>
											</div>
											<div class="col-md-6 col-lg-6">
												<img src="img/date.png" width="10%">
												&nbsp;
												<label for="datee" ><font face="JasmineUPC" size="5px"><b>Date</b></font></label><br>
												<input type="date" name="datee" required>
											</div>		
											<div class="section-row">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<br>
															&nbsp;
															&nbsp;
															<img src="img/docs.png" width="5%">
															<label for="datee" ><font face="JasmineUPC" size="5px"><b>Detail</b></font></label>
															<br>
															<br>
															<textarea class="input" name="message" placeholder="Detail Message ...." ></textarea>
														</div>
														<form action="index.html">
															&nbsp;
															<img src="img/image.png" width="10%">
															<label for="datee" ><font face="JasmineUPC" size="5px"><b> Image</b></font></label>
															<br>
															<input type="file" name="pic" accept="image/*">
														</form>
														<br><br>
														
													</div>
													<div class="col-md-4" align="right" >
														<button type="button" class="primary-button" data-dismiss="modal" style=" background-color:red" >Close</button>
													</div>	
													<div class="col-md-4">
													
													</div>
													<div class="col-md-4">
														<button type="button" onclick="alertSubmit()" class="primary-button" data-dismiss="modal" style=" background-color:green" >Submit</button>
													</div>
													
												</div>
											
											</div>
											
										</div>  
									</div>
								</div> 
							</div>
							<br>
							<br>
							<h2>New Posts</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem1.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1">BUU</a>
									<span class="post-date">October 28, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">ลูกระนาดเยอะเกินไป...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem3.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4">MSU</a>
									<span class="post-date">October 28, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">การขับขี่รถจักรยานยนต์ไม่เป็นระเบียบ...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem4.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1">HCU</a>
									<span class="post-date">October 28, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">ที่มอไฟจะน้อยมาก จะเปิดแค่ทางเดิน...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<div class="clearfix visible-md visible-lg"></div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem5.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4">CMRU</a>
									<span class="post-date">October 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">จอดรถในที่ห้ามจอด ขับรถสวนทาง...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem6.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1">RUS</a>
									<span class="post-date">October 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">ที่จอดรถแคบมากๆ มีรถ...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem7.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4">SWU</a>
									<span class="post-date">October 26, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">สูบบุหรี่ในมหาลัยทำให้ส่งกลิ่นที่เป็นมล...</font></a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /section -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Top Posts</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem8.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2">KKU</a>
									<span class="post-date">October 28, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">ผนังห้องน้ำในหอพักมีอันที่ทำไว้ไม่สนิท1อันทำให้...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem9.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-5">BUU</a>
									<span class="post-date">October 25, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">สัญญาอินเทอร์เน็ตไม่ทั่วถึง ในหอพักเทาทอง ทำให้ไม่สามารถทำงาน...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem10.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2">KKU</a>
									<span class="post-date">October 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">มีป้ายห้ามจักรยานยนต์เข้า เเต่ก็มีจักรยานยนต์จอดเรียงอยู่ขวางทางจราจรเเละมีผู้...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<div class="clearfix visible-md visible-lg"></div>

					<!-- post -->
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem11.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-5">BUU</a>
									<span class="post-date">October 26, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">อยากได้โต๊ะที่นั่งสะดวกสบายกว่านี้ โต๊ะแบบนี้มองไม่...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem12.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2">BUU</a>
									<span class="post-date">October 24, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">เครื่องปรับอากาศในห้องเรียนไม่ค่อยเย็นทั่วถึง...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="./img/problem13.jpg" width="400" height="250"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-5">SU</a>
									<span class="post-date">October 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">รถตู้ฝั่งตรงข้ามประตูมหาลัยจอดซ้อนคันจนกิน...</font></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section" id="my_post">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>My Post</h2> 
								</div>
							</div>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.php"><img src="./img/problem14.jpg" width="400" height="250"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3">RUS</a>
											<span class="post-date"><font face="JasmineUPC" size="5px">October 27, 2018</font></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php"><font face="JasmineUPC" size="5px">ยุงเยอะช่วงกลางคืน...</a></h3>
										<p><font face="JasmineUPC" size="4px">ยุงเยอะช่วงกลางคืน รบกวนแก้ปัญหาด่วนครับ!!!!</p>
									</div>
								</div>
							</div>
							<!-- /post -->
							
							
						</div>
					</div>
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
