<?php
  include "connection.php";
  include "navbar.php";
  if(isset($_POST['submit'])){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $length=strlen($password);
    $roll=$_POST['roll'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];



    if(empty($first)){
      $error="First Name is required";
    }
    else if(empty($last)){
      $error="Last Name is required";
    }
    else if(empty($username)){
      $error="User Name is required";
    }
    else if(empty($password)){
      $error="Password is required";
    }
    else if($length<6){
      $error="Your password is too short";
    }
    else if(empty($email)){
      $error="Email is required";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $error="Please enter a valid Email address";
    }
    else if(empty($roll)){
      $error="Roll number is empty";
    }
    else if(empty($contact)){
      $error="Contact is empty";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
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

      <script>
      function myFun(){
        var charact_way=/^[A-Za-z]+$/;
        var a=document.getElementById("username").value;
        if(a.length<3){
          doctype.getElementById("Message").innerHTML="user name must be above 3 characters";
          return false;
        }
        if(a.length>15){
          document.getElementById("Message").innerHTML="user name must be below 15 characters";
          return false;
        }
        if(a.match(charact_way))
          true;
        else{
          document.getElementById("Message").innerHTML="only alphabats are allowed";
          return false;
        }
      }
      </script>



<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp &nbsp &nbsp  Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>

      <form name="Registration" action="registration.php" method="post" style="padding-top: 25px; margin-bottom: 30px;" onsubmit="return myFun()">
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
<p style="color: red;">
<?php
if(isset($error)){
  echo $error;
}

?>
 </p>    






    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]', 'p.jpg');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          window.location="./student_login.php";

          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }
include "footer.php";
    ?>

</body>
</html>