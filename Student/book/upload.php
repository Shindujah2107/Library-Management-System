
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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">E-Books Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">E-Books Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="books.php"> Details</a></li>
					<li class="active"><a href="upload.php">Upload Book</a></li>
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
		
				$book_isbn		     = $_POST['book_isbn'];
				$book_title	 = $_POST['book_title'];
                                $book_author	 = $_POST['book_author'];
                                $book_image	 = $_FILES['book_image']['name'];
                                

                                 $image_tmp = $_FILES['book_image']['tmp_name'];
                                $book_deescr		 = $_POST['book_deescr'];
				           $publisher_id	         = $_POST['publisher_id'];
				                   $pdf		 = $_FILES['pdf	'];
				                  
				                    move_uploaded_file($image_tmp,"pdf/book/bootstrap/img/$book_image");


						$insert = "INSERT INTO ebooks( book_isbn, book_title, book_author, book_image, book_deescr, publisher_id, pdf)VALUES('$book_isbn', '$book_title', '$book_author', '$book_image', '$book_deescr', '$publisher_id', '$pdf')";
						mysqli_query($connection, $insert);
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully added employee details.</div>';
						}else {
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Employee data failrd to save..!</div>';
						}
					} 
				
			
			?>

			<form class="form-horizontal" action="upload.php" method="post">
				<!--<div class="form-group">
					<label class="col-sm-3 control-label">EID</label>
					<div class="col-sm-2">
						<input type="text" name="eid" class="form-control" placeholder="EID" required>
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3 control-label">ISBN Number</label>
					<div class="col-sm-4">
						<input type="text" name="book_isbn" class="form-control" placeholder="ISBN Number" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Title</label>
					<div class="col-sm-3">
						<input type="text" name="book_title" class="form-control" placeholder="Book Title" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Author</label>
					<div class="col-sm-3">
						<textarea name="book_author" class="form-control" placeholder="Book Author"></textarea>
					</div>
				</div>
				
				
				
				<div class="form-group">
<label class="col-sm-3 control-label">Book Image</label>
					<div class="col-sm-4">



<input type="file" name="book_image" id="profile-img" required/><br>

                                    <img src="" id="profile-img-tag" width="100px" />



                              

					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Book Description</label>
					<div class="col-sm-3">
						<textarea name="book_deescr" class="form-control" placeholder="Book Description"></textarea>
					</div>
				</div>
				
				
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Publisher Id</label>
					<div class="col-sm-4">
						
						<select name="post" class="form-control" required>
							<option value=""> ----- </option>
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
                                                        
						</select>
					</div>
				</div>
				
				
			
				<div class="form-group">
					<label class="col-sm-3 control-label">PDF</label>
					<div class="col-sm-2">
						<input type="file" name="pdf" class="form-control" placeholder="PDF">
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
