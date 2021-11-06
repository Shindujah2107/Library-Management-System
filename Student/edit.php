
<?php
 include "navbar.php";
  //include "connection.php";
  include "server.php";
  //$_SESSION['username'];
  //session_start();
?>

 <?php 

    if(isset($_POST['submit1']))
    {
      

      $first=$_POST['first'];
      $last=$_POST['last'];
      $username=$_POST['username'];
      
      $email=$_POST['email'];
      $id=$_POST['id'];
    
      $contact=$_POST['contact'];
      //$memberid=$_POST['id'];
      
      

      $sql1= "UPDATE users SET fname='$first', lname='$last', username='$username', email='$email',uid='$id',contact='$contact' WHERE username='".$_SESSION['username']."';";

      if(mysqli_query($db,$sql1))
      {
        echo "
          <script type='text/javascript'>
            alert('Saved Successfully.'');
            window.location='profile.php';
          </script>";
      }
    }
  ?>


<!DOCTYPE html>
<html>
<head>
  <title>edit profile</title>
  <style type="text/css">
    .form-control
    {
      width:250px;
      height: 38px;
    }
    .form1
    {
      margin:0 540px;
    }
    label
    {
      color: white;
    }

  </style>
</head>
<body style="background-color:lightblue;">

  <h1 style="text-align: center;color: #fff;">Edit Information</h1>
  <?php
    
    $sql = "SELECT * FROM users WHERE username='$_SESSION[username]'";
    $result = mysqli_query($db,$sql) or die (mysql_error());

    while ($row = mysqli_fetch_assoc($result)) 
    { 
      //$pic=$row['pic'];
      $first=$row['fname'];
      $last=$row['lname'];
      $username=$row['username'];
      $email=$row['email'];
      $id=$row['uid'];
      $contact=$row['contact'];
      
    }

  ?>
  

  <div class="profile_info" style="text-align: center;">
    <span style="color: white;">Welcome,</span> 
    <h4 style="color: white;"><?php echo $_SESSION['username']; ?></h4>
  </div><br><br>
  
  <div class="form1">
    <form action="" method="post" enctype="multipart/form-data">

    

    <label><h4><b>First Name: </b></h4></label>
    <input class="form-control" type="text" name="first" placeholder="firstname"value="<?php echo $first; ?>">

    <label><h4><b>Last Name</b></h4></label>
    <input class="form-control" type="text" name="last" placeholder="lastname" value="<?php echo $last; ?>">

    <label><h4><b>Username</b></h4></label>
    <input class="form-control" type="text" name="username" placeholder="username" value="<?php echo $username; ?>">

    <label><h4><b>Email</b></h4></label>
    <input class="form-control" type="mail" name="email" placeholder="emailid@gmail.com"value="<?php echo $email; ?>">

    <label><h4><b>Student Registration Id</b></h4></label>
    <input class="form-control" type="text" name="id" placeholder="UWU/CST/00/000" value="<?php echo $id; ?>">

    <label><h4><b>Contact No</b></h4></label>
      <input class="form-control" type="text" name="contact" placeholder="0000000000" value="<?php echo $contact; ?>">




    <br>
    <div style="padding-left: 100px;">
      <button class="btn btn-default" type="submit" name="submit1">save</button></div>
  </form>
</div>
 
</body>
</html>

