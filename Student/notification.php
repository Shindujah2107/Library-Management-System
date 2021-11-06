<?php
include "navbar1.php";
?>
<!DOCTYPE html>
<html>
<head>
<title> Online Library  Notice Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "./bootstrap1/css/bootstrap.css" type = "text/css"/>
<link rel = "stylesheet" href = "./bootstrap1/css/bootstrap.min.css" type = "text/css"/>
</head>
<body>
<div id="main" class="container">
<table class="table table-bordered">
<h2 align="center">Student Message Notice Board</h2><hr/>
    <tbody>
      <tr>
        <td><div id="content">
			<?php
			include('../connection.php');
			$result = mysqli_query($db,"SELECT * FROM noticemsg WHERE position='student'");
					while($row = mysqli_fetch_array($result))
						{
							echo '<li>'.$row['message'].'</li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
      </tr>
    </tbody>
</table>
<div id="footer" align="center">Online Library System</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include "footer.php";
?>
</body>
</html>
