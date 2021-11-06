<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:../home.php");
}


 ?>
	<!doctype html>
		<html lang="en">
			<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">

				<!-- Bootstrap CSS -->
				 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				<link rel="stylesheet" href="css/home.css" >
				<title>Library Management System</title>
				<style> 
						@font-face {
					font-family: navfont;
					src: url(fonts/BreeSerif-Regular.otf);}
					@font-face {
					font-family:domine;
					src: url(fonts/Domine-Regular.ttf);}

					.navbar-brand{
					  padding-left: 30px;}

					.navcontent {
						font-family:navfont;}
					.navbar-login {
					  color: #319E82;
					  font-size:20px;}
					.carousel-item-active {
					  width: auto;
					  height: auto;}
					.Greatfood,.dulasarastoryhead {
					  font-family:domine;
					  font-size:33.4pt;
					  text-align: center;}
					.cont{
					  text-align:center;}
					.GreatfoodCont {
					  text-align:justify-all;
					  font-family:Verdana;}
					.bodygreatfood,.dulasarastory {
					  padding-right:270px;
					  padding-left: 270px;
					  padding-top: 100px;}
					.Reservetable,.Aboutus {
					  text-align:center;
					  padding-top: 30px;}
					.mybutton{
					  background-color:#319E82;
					  font-size:30px;
					  color:white;
					  border-radius:12px;}
					.col2 {
					  padding-left: 120px;}

					.col3 {
					  padding-left: 120px;}
					.col4 {
					  padding-left: 120px;
					  color:White;
					}
					.icons {
					  align-items: center;}
					#footer {
					  color: White;
					  font-size:17px;}
				</style>
			</head>
			<body>
    			<nav class="navbar navbar-light" style="background-color:#16242D;">
									 Navbar content 
										<div class="container" style="font-family:navfont; font-color:White;">
											<p style="color:white; font-size: 20px; align-items:left; ">	ONLINE LIBRARY MANAGEMENT SYSTEM</p>
													<div id="navcontent">
													<a class="navbar-brand" style="color:White;" href="OPAC/index.php">OPAC</a>
													<a class="navbar-brand" style="color:White;"href=" reading material/index.php"> Reading meterials</a>
												  <a class="navbar-brand" href="book/digi1.php" style="color:White;">E-Resources</a>
<a class="navbar-brand" href="profile.php" style="color:White;">MyProfile</a>
												  <a class="navbar-brand" href="logout.php" style="color:White;">Logout</a>
																		<?php	/* if(isset($_SESSION['cus_id'])){
						echo '<a class="navbar-brand" href="logout.php" style="color:White;">logout</a>';
						}else{
						echo '<a class="navbar-brand" href="login.php" style="color:White;">login</a>';
											  }*/ ?> 
												
												
										</div>
				</nav>
				<!--slide show-->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="Images/1.jpg" alt="First slide"height="400px" width="400px">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="Images/login.jpeg" alt="Second slide" height="400px" width="400px">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="Images/user.jpg" alt="Third slide" height="400px" width="400px">
						</div>
					</div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
				</div>

					<div class="bodygreatfood">
						<p class="Greatfood"> 
UWU Library						</p>
						<p class="GreatfoodCont" style="text-align: justify;">
Welcome to the UWU Library which is one of the central support services of Uva Wellassa University.
The Mission of the UWU library is to underpin the University’s vision and mission in building synergies between information, innovation, education and research through an excellent library and information services.
The origin of Uva Wellassa University Library (UWUL) can be traced back to August 2006, when the Uva Wellassa University was formally established in Badulla.
The Uva Wellassa University Library plays a vital role in the collection development and dissemination of scientific and technical information to meet the present and future needs of the university.</p>						
					
							
					
					</div>
					<div class="dulasarastory">
						<p class="dulasarastoryhead"> 
Why our Library Speacial????						</p>
						<p class="dulasarastorycont" style="text-align: justify;">
At present, the Library is catering to over 2000 readers including both students and staff of the University. Library provides quality services and access to information. It also offers teaching and learning environment by providing a wide-ranging knowledge with diverse resources. 
In a center of learning, the Library functions as an information center. UWUL will also share the same Vision of Uva Wellassa University.
We invite you to visit the UWU library in order to enjoy the wealth of resources available in our library.

							<p class="Aboutus">
								<button type="button" class="mybutton" onclick="window.location.href='contact.php'" style="padding: 5px 10px; font-size: 20px;">CONTACT US</button>
							</p> 
					</div>
		<!-- Footer -->
			<?php
include "footer.php";
			?>
	</body>
</html>