<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADDBooks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {

  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  
		background-image:url("images/s.jpg");
		background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

	
}




#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}

.book
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
  height: 40px;
}

	</style>


</head>
<body>
	<!--_________________sidenav_______________-->
	
	


    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add </b></h2>
    
    <form class="book" action="" method="post">
        
        <input type="text" name="pubid" class="form-control" placeholder="id" ><br>
        <input type="text" name="pubname" class="form-control" placeholder="Name"><br>
		<input type="text" name="pubaddress" class="form-control" placeholder="Address" ><br>
        <input type="text" name="pubcontact" class="form-control" placeholder="Contact"><br>
        <input type="text" name="publishingyear" class="form-control" placeholder="Year"><br>
		<input type="text" name="email" class="form-control" placeholder="Email"><br>
		
        

        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      
        mysqli_query($db,"INSERT INTO publisher VALUES ('$_POST[pubid]', '$_POST[pubname]','$_POST[pubaddress]', '$_POST[pubcontact]', '$_POST[publishingyear]','$_POST[email]';");
        ?>
          <script type="text/javascript">
            alert(" Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    
?>
</div>


</body>
</html>