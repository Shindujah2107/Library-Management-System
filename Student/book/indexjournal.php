<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">E-Journals Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">E-Journals details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="indexjournal.php">E-Journals Data</a></li>
					<li><a href="addjournal.php">Add Journal</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>E-Journals Details</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$j_issn = $_GET['j_issn'];
				$cek = mysqli_query($connection, "SELECT * FROM ejournals WHERE j_issn='$j_issn'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data not found.</div>';
				}else{
					$delete = mysqli_query($connection, "DELETE FROM ejournals WHERE j_issn='$j_issn'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data successfully deleted.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data failed to delete.</div>';
					}
				}
			}
			?>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>Journal ISSN</th>
					<th>Journal Country</th>
					<th>Journal Title</th>
					<th>Journal Author</th>
                     <th>Journal Volume</th>
                     
					<th>Journal Describtion</th>
					
					<th>Tools</th>
					
				</tr>
				
				<?php
				 if(isset($_POST["submit"])) {
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="Library";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

                        $sql = "SELECT * FROM ejournals";

                      $result = $conn -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
			
					               
					
						echo '
						<tr>
					
							<td>'.$row['j_issn'].'</td>
							<td>'.$row['j_country'].'</td>
							<td>'.$row['j_title'].'</td>
							<td>'.$row['j_author'].'</td>


						     <td>'.$row['j_volume'].'</td>
                               <td>'.$row['j_des'].'</td>
						
                         
							
							<td>

								<a href="editj.php?jid='.$row['j_issn'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							
								<a href="indexjournal.php?aksi=delete&j_issn='.$row['j_issn'].'" title="Delete Data" onclick="return confirm(\'Do you want to  delete '.$row['j_title'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
					
					
					}
				}
			}
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>Email:&nbsp Online.library@gmail.com</p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
