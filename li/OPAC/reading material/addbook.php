<?php
 include_once("config.php");

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
  
		background-image:url("images/12.jpg");
		background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

	
}


	</style>


</head>
<body>
	
  <div class="container" style="text-align: center;">

    <h2 style="color:white; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2>
    
    <form class="book" action="" method="post">
        
        <input type="text" name="bid" class="form-control" placeholder="Book id" align="center" ><br>
        <input type="text" name="bookname" class="form-control" placeholder="Book Name"><br>
		<input type="text" name="isbn1" class="form-control" placeholder="ISBN" ><br>
        <input type="text" name="author1" class="form-control" placeholder="Authors Name"><br>
        <input type="text" name="edition1" class="form-control" placeholder="Edition"><br>
		<input type="text" name="purchasedate1" class="form-control" placeholder="Date Of Purchase"><br>
		
        <input type="text" name="language1" class="form-control" placeholder="Language" ><br>
      
        <input type="text" name="status1" class="form-control" placeholder="Status" ><br>
        <input type="text" name="quantity1" class="form-control" placeholder="Quantity" ><br>
        <input type="text" name="department1" class="form-control" placeholder="Department"><br>

        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      
        mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]', '$_POST[bookname]','$_POST[isbn1]', '$_POST[author1]', '$_POST[edition1]','$_POST[purchasedate1]','$_POST[language1]','$_POST[status1]', '$_POST[quantity1]','$_POST[department1]' );");
        ?>
          <script type="text/javascript">
            alert("Book Added Successfully.");
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
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>

</body>
</html>