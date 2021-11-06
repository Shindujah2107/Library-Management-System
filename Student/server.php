<?php
    session_start();
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
    
    $con = mysqli_connect("localhost", "root", "", "library3");
        mysqli_select_db($con, "library3");
        
    $query = "select * from login where username ='$username' and password='$password'";
     

        $_SESSION['username'] = $_POST['username'];
        $Q2 =mysqli_query($con,$query);
        
      
        $row = mysqli_fetch_array($Q2);
        $type=$row['type'];
        
      
      $check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
          
         $_SESSION["type"]=$row['type'];
      
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
         if($type=="Admin"){
        
            header("location:./li/index.php");
         }
           else if($type=="Student"){
            header("location:./Student_/home.php");
           }
           else if($type=="Librarian"){
            header("location:./index1.php");
           }
            else{
            header("location:./login1.php");

         }
            
      }else{
        echo '<script>alert("username or password is incorrect !!")</script>';
        echo '<script>window.location="./profile.php"</script>';

        
      }
    
    
    }
  
    ?>  

