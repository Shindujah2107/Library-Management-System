<?php
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>Online Library Management System </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "bootstrap1/css/bootstrap.css" type = "text/css"/>
<link rel = "stylesheet" href = "bootstrap1/css/bootstrap.min.css" type = "text/css"/>
</head>
<style type="text/css">
a {
	text-decoration: none;
	color: #838383;
}

a:hover {
	color: black;
}

#menu {
	position: relative;
	margin-left: 30px;
}

#menu a {
	display: block;
	width: 100px;
}

#menu ul {
	list-style-type: none;
}

#menu li {
	float: left;
	position: relative;
	text-align: center;
}

#menu ul.sub-menu {
	position: absolute;
	left: -10px;
	z-index: 90;
	display:none;
}

#menu ul.sub-menu li {
	text-align: left;
}

#menu li:hover ul.sub-menu {
	display: block;
}
a
{	text-decoration:none; }
	

.egg{
position:relative;
box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
background-color:#fff;
border-radius: 3px 3px 3px 3px;
border: 1px solid rgba(100, 100, 100, 0.4);
}
.egg_Body{border-top:1px solid #D1D8E7;color:#808080;}
.egg_Message{font-size:13px !important;font-weight:normal;overflow:hidden}

h3{font-size:13px;color:#333;margin:0;padding:0}
.comment_ui
{
border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;padding:6px 4px 3px 6px;width:431px; cursor:pointer;
}
.comment_ui:hover{
background-color: #F7F7F7;
}
.dddd
{
background-color:#f2f2f2;border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;margin-bottom:2px;padding:6px 4px 3px 6px;width:431px; 
}
.comment_text{padding:2px 0 4px; color:#333333}
.comment_actual_text{display:inline;padding-left:.4em}

ol { 
	list-style:none;
	margin:0 auto;
	width:500px;
	margin-top: 20px;
}
#mes{
	padding: 0px 3px;
	border-radius: 2px 2px 2px 2px;
	background-color: rgb(240, 61, 37);
	font-size: 9px;
	font-weight: bold;
	color: #fff;
	position: absolute;
	top: 5px;
	left: 73px;
}
.toppointer{
background-image:url(images/top.png);
    background-position: -82px 0;
    background-repeat: no-repeat;
    height: 11px;
    position: absolute;
    top: -11px;
    width: 20px;
	right: 354px;
}
.clean { display:none}
</style>
<body>
<div class="container">
	<div id="content" align="center">
		<form action="notifyexec.php" method="post">
		<h1>Online Library Management System </h1><hr/>
		<p>Choose Where To Send The Notice</p>
		<select name="position" class="ed">
			<option value="student">Student</option>
			<option value="staff">Staff</option>
		</select><br/><br/>
		Message<br>
		<textarea type="text" name="message" class="ed" rows="5" class="form-control"></textarea><br/><br/>
		<input type="submit" class="btn btn-primary" value="Send" id="button1">
		</form>
	</div><hr/>

<table class="table table-bordered">
<h2 align="center">Message Log</h2><hr/>
    <thead>
      <tr>
        <th>Student</th>
        <th>Staff</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div id="content">
			<?php
			include('connection.php');
			$result = mysqli_query($connection,"SELECT * FROM noticemsg WHERE position='student' ");
					while($row = mysqli_fetch_array($result))
						{
							echo '<li>'.$row['message'].'</li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
       
        <td><div id="content">
			<?php
			include('connection.php');
			$result = mysqli_query($connection,"SELECT * FROM noticemsg WHERE position='staff' ");
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
</div><div id="footer" align="center"><a href="Online Library Management System">Online Library Mangement System</a></div>

<?php
include "footer.php";
?>

</body>
</html>
