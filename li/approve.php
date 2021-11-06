<?php
  include "connection.php";
  include "navbar.php";
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Approve Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

		.srch
		{
			padding-left: 850px;

		}
		.form-control
		{
			width: 300px;
			height: 20px;
			background-color: lightblue;
			color: black;
		}
		
		body {
			background-image: url("images/user.jpg");
			background-repeat: no-repeat;
  	font-family: "Lato", sans-serif;
  	transition: background-color .5s;
}




#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
.container
{
	height: 600px;
	background-color: black;
	opacity: .8;
	color: white;
}
.Approve
{
  margin-left: 420px;
}


	</style>

</head>
<body>

  <div class="container">
    <br><h3 style="text-align: center;">Approve Request</h3><br><br>
    
    <form class="Approve" action="" method="post">
        <input class="form-control" type="radio" name="approve" value="yes">YES
         <input class="form-control" type="radio" name="approve" value="no">NO<br>

         <br><h3 style="text-align: left;">Issue date</h3><br><br>
          <input type="date" name="issue" placeholder="Issue Date yyyy-mm-dd" required="" class="form-control"><br>


          <br><h3 style="text-align: left;">Return date</h3><br><br>
        <input type="date" name="return" placeholder="Return Date yyyy-mm-dd" required="" class="form-control"><br>
        <button class="btn btn-default" type="submit" name="submit">Approve</button>
    </form>
  
  </div>
</div>

<?php
  if(isset($_POST['submit']))
  {
    mysqli_query($connection,"UPDATE  issue_book SET  approve =  '".$_POST['approve']."', issuedate =  '".$_POST['issue']."', returndate =  '".$_POST['return']."' WHERE username='".$_SESSION['name']."' and bid='".$_SESSION['bid']."';");

    //mysqli_query($db,"UPDATE books1 SET quantity = quantity-1 where bid='$_SESSION[bid]' ;");

    //$res=mysqli_query($db,"SELECT quantity from books where bid='$_SESSION[bid];");

    /*while($row=mysqli_fetch_assoc($res))
    {
      if($row['quantity']==0)
      {
        mysqli_query($db,"UPDATE books1 SET status='not-available' where bid='$_SESSION[bid]';");
      }
    }*/
    ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        window.location="requestedbooklisttoadmin.php"
      </script>
    <?php
  }
?>
</body>
</html>