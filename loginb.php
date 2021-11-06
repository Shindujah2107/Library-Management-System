<?php
    session_start();
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
    
    $con = mysqli_connect("localhost", "root", "", "library3");
        mysqli_select_db($con, "library3");
        
    $query = "select * from login where username ='$username' and password='$password'";
       //$query = "select * from customer where username='archchu' and password='badulla12' and status='1'";
        
        $Q2 =mysqli_query($con,$query);
        
       // $result = mysqli_query($con, $Q2);
        $row = mysqli_fetch_array($Q2);
        $type=$row['type'];
        
      // $count=mysqli_num_rows($result);
     // $isexist=mysqli_query($con,"select * from customer where username='$UN' and password='$Pwd' and status='1'");
      $check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
          //var_dump($row['cus_fname']); exit();
         $_SESSION["type"]=$row['type'];
        // var_dump( $_SESSION["type"]);exit();
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
         if($type=="Admin"){
          //var_dump("here"); exit();
            header("location:./li/index.php");
         }
           else if($type=="Student"){
            header("location:./Student_/home.php");
           }
           else if($type=="Librarian"){
            header("location:./li/index1.php");
           }
            else{
            header("location:./login1.php");

         }
            /*  $_SESSION['cus_id']=$row['cus_id'];
              $_SESSION['uname']=$row['uname'];
                $_SESSION['psw']=$row['psw'];
                $_SESSION['cus_fname']=$row['cus_fname'];
                $_SESSION['mobile']=$row['mobile'];
                $_SESSION['user_type']=$row['user_type'];

          if($_SESSION['user_type']=='cus'){
                header("location:../home_cus.php");
          }
          
          elseif($_SESSION['user_type']=='admin'){
            header("location:../admin_home.php");*/
      }else{
        echo '<script>alert("username or password is incorrect !!")</script>';
        echo '<script>window.location="../login1.php"</script>';

        
      }
    
    
    }
  
    ?>  

