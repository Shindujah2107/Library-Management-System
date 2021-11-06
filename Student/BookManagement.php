<?php
  include "connection.php";
  include "nav11.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Acquisition Management</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">&nbsp Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">Acquisition Management</h1><br><br>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="ISBN" placeholder="ISBN" required="">
          <input class="form-control" type="text" name="Book_Name" placeholder="Book_Name" required="">
          <input class="form-control" type="text" name="Book_Desc" placeholder="Book_Desc" required=""> 
          <input class="form-control" type="text" name="Category" placeholder="Category" required=""> 
          <input class="form-control" type="text" name="Price" placeholder="Price in LKR" required="" >  
          <input class="form-control" type="text" name="Quantity" placeholder="Quantity" required="">
          <input class="form-control" type="text" name="SupplierId" placeholder="SupplierId" required="">

          <input class="btn btn-default" type="submit" name="add" value="ADD" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['add']))
      {
        $count=0;

        $sql="SELECT * from `BookManagement";
        $res=mysqli_query($db,$sql);

  

       
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `BookManagement` VALUES('$_POST[ISBN]', '$_POST[Book_Name]', '$_POST[Book_Desc]', '$_POST[Category]', '$_POST[Price]','$_POST[Quantity]', '$_POST[SupplierId]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("Something went to error.");
            </script>
          <?php

        }

      }

    ?>
<?php
include "footer.php";
?>
</body>
</html>