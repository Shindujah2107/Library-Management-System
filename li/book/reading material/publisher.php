<?php
  include("config.php");
 include"php_code.php";
   include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1 align="center">Publisher Details</h1>


<br>

<?php $results = mysqli_query($db, "SELECT * FROM publisher1"); ?>

<table>
<tr>
<td>
<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search publisher.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
		</div>
		</td>
		<td>
		<a href="addpublisher.php" class="del_btn">ADD</a>
		</td>
		</tr>
		</table>
		<table>
	<thead>
		<tr>
		<th>PublisherId</th>
			<th>PublisherName</th>
			<th>PublisherAddress</th>
			<th>PublisherContact</th>
			<th>BookName</th>
			<th>PublishingYear</th>
			<th>email</th>
			
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
		<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['pubname']; ?></td>
			<td><?php echo $row['pubaddress']; ?></td>
			<td><?php echo $row['pubcontact']; ?></td>
			<td><?php echo $row['bookname1']; ?></td>
			<td><?php echo $row['publishingyear']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" name="submit1" >Edit</a>
			</td>
			<td>
				<a href="publisher.php?del=<?php echo $row['id']; ?>"  title="Delete Data" onclick="return confirm(\'You are sure to delete data'.$row['bookname'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			</td>
		</tr>
	<?php } ?>
</table>

    


</body>
</html>