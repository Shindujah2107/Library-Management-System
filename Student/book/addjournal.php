
<!DOCTYPE html>
<html lang="en">
<head>
<!--

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Journals Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Journals Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="indexjournal.php"> Journal Details</a></li>
					<li class="active"><a href="addjournal.php">Upload Journal</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>E-Books Details &raquo; Upload Book</h2>
			<hr />

			<?php
			$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "Library";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
			if(isset($_POST['add'])){
		
				$j_issn		     = $_POST['j_issn'];
				$j_eissn		     = $_POST['j_issn'];
				$j_title	 = $_POST['j_title'];
                                $j_author	 = $_POST['j_author'];
                                $j_volume		 = $_POST['j_volume'];
                                $j_des		 = $_POST['j_des'];
				          
				                  


						$insert = "INSERT INTO ejournals( j_issn,j_country ,j_title, j_author, j_volume, j_des)VALUES('$j_issn','$j_country' ,'$j_title', '$j_author', '$j_volume', '$j_des')";
						mysqli_query($connection, $insert);
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully added employee details.</div>';
						}else {
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Employee data failrd to save..!</div>';
						}
					} 
				
			
			?>

			<form class="form-horizontal" action="addjournal.php" method="post">
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">EID</label>
					<div class="col-sm-2">
						<input type="text" name="eid" class="form-control" placeholder="EID" required>
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3 control-label">ISSN Number</label>
					<div class="col-sm-4">
						<input type="text" name="j_issn" class="form-control" placeholder="ISSN Number" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Country</label>
					<div class="col-sm-3">
						<input type="text" name="j_country" class="form-control" placeholder="Journal Country" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Title</label>
					<div class="col-sm-3">
						<input type="text" name="j_title" class="form-control" placeholder="Journal Title" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Author</label>
					<div class="col-sm-3">
						<input type="text" name="j_author" class="form-control" placeholder="Journal Author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Journal Volume</label>
					<div class="col-sm-3">
						<input type="text" name="j_volume" class="form-control" placeholder="Journal Volume" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Description</label>
					<div class="col-sm-3">
						<textarea name="j_des" class="form-control" placeholder="Description"></textarea>
					</div>
				</div>
				
				
				
		




			
				
				
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Save">
						<a href="book.php" class="btn btn-sm btn-danger">Cancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
  <nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<div class="navbar-footer">
<p style="color:white;text-align:center;">
		
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +880171*******
	</p>
	   </div>
</div>
</html>
