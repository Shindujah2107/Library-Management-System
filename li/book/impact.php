

<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '/':
		$res=$fn/$sn;
		break;
		
		case '/':
		$res=$fn/$sn;
		break;
		
		case '/':
		$res=$fn/$sn;
		break;
		
	}
	
}

?>

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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Journal Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Journal Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="journals.php"> Journal Details</a></li>
				
					<li><a href="https://researchguides.uic.edu/if/impact#:~:text=About%20Journal%20Impact&text=The%20impact%20factor%20(IF)%20is,times%20it%27s%20articles%20are%20cited."> About Journal</a></li>
					<li><a href="../index.php">Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Journal Details &raquo; Change impact factor</h2>
			<hr />

			<?php
			$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "library3";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	$j_isbn = isset($_GET['j_isbn'])? $_GET['j_isbn'] : '';
			$sql = mysqli_query($connection, "SELECT * FROM ejournal WHERE j_isbn='$j_isbn'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: impact.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['add'])){
		
				$j_isbn		 = $_POST['j_isbn'];
				
				$j_impact    = $_POST['j_impact'];
				
				
				
				$update = mysqli_query($connection, "UPDATE ejournal SET j_isbn='$j_isbn',  j_impact='$j_impact' WHERE j_isbn='$j_isbn'") or die(mysqli_error());
				if($update){
					header("Location: editj.php?j_isbn=".$j_isbn."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data failed to be saved, please try again.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data saved successfully.
</div>';
			}
			
			?>


				<!--<div class="form-group">
					<label class="col-sm-3 control-label">EID</label>
					<div class="col-sm-2">
						<input type="text" name="eid" class="form-control" placeholder="EID" required>
					</div>
				</div>-->
				<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Calculate value</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
			
			<tr>
				<th>Number of times cited</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Number of published items</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Operation</th>
				<th>
				<select name="ch">
					<option>/</option>
					
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
		<br>
		<br>
		<br>
		<br>
	
					<form class="form-horizontal" action="" method="post">
					<div class="form-group">
					<label class="col-sm-3 control-label">Journal Isbn</label>
					<div class="col-sm-4">
						<input type="text" name="j_isbn" value="<?php echo $row ['j_isbn']; ?>" class="form-control" placeholder="Journal Isbn" required>
					</div>
				</div>
			
				<div class="form-group">
					 <label class="col-sm-3 control-label">Impact Factor</label>
					<div class="col-sm-2">
						
						<input type="link" name="j_impact" value="<?php echo $row ['j_impact']; ?>" class="form-control" placeholder="Impact Factor" required>
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Save">
						<a href="editj.php" class="btn btn-sm btn-danger">Cancel</a>
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
  
</div>
</html>

		