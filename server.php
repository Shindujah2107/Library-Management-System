<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'library3');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		//$type = mysqli_real_escape_string($db, $get=$_POST['type']);
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $type="Student";
		$uid = mysqli_real_escape_string($db, $_POST['uid']);
		$contact = mysqli_real_escape_string($db, $_POST['contact']);
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required");




		 }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;
			$query = "INSERT INTO users (fname,lname,username, email, password,uid,contact) 
					  VALUES('$fname','$lname','$username', '$email', '$password','$uid','$contact')";
			$query1 = "INSERT INTO login (username, password,type) 
					  VALUES('$username', '$password','$type')";		  
			mysqli_query($db, $query);
      mysqli_query($db, $query1);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location:login1.php');
		}

	}


/*
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
	}

    if (isset($_POST["reg_user"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
    
    mysqli_select_db($db, "Library");    
    $query = "select * from login where username ='$username' and password='$password'";
       //$query = "select * from customer where username='archchu' and password='badulla12' and status='1'";
        
        $Q2 =mysqli_query($db,$query);
        
       // $result = mysqli_query($con, $Q2);
        $row = mysqli_fetch_array($Q2);
        $type=$row['type'];
        
      // $count=mysqli_num_rows($result);
     // $isexist=mysqli_query($con,"select * from customer where username='$UN' and password='$Pwd' and status='1'");
      $check_user=mysqli_num_rows($Q2);
        if ($check_user==1) {
          
         if($type=="Admin"){
          //var_dump("here"); exit();
            header("location:li/index.php");
         }
           else if($type=="Student"){
            header("location:Student_/home.php");
           }
           else if($type=="Librarian"){
            header("location:li/index1.php");
           }
            else{
            header("location:/login1.php");

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
     // }else{
       // echo '<script>alert("username or password is incorrect !!")</script>';
      //  echo '<script>window.location="../login.php"</script>';

        
    //  }
    
    
  //  }
  
    













/*



		/*if (count($errors) == 0) {
			$password = md5($password);
			$query = "select * from users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		if ($row = mysqli_fetch_assoc($results)) {
              header("location:Student_/home.php");
              $_SESSION['username']=$username;
                $_SESSION['password']=$row['password'];
              
        } 

    }
    else if (count($errors) == 0) {
			$password = md5($password);
        $query = " select * from admin WHERE username='$username' AND password='$password' ";
        $results = mysqli_query($db, $query);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($results)) {
              header("location:li/index.php");
              
        }
    }
    else if (count($errors) == 0) {
			$password = md5($password);
         $query = " select * from employee WHERE username='$username' AND password='$password' ";
        $results = mysqli_query($db, $query);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($results)) {
              header("location:li/index1.php");
              
        }
        } 

else{
        echo"<script>alert('Error in Login try Again!!!');</script>";
          header("location:li/index.php");
    }


		}*/
	


?> 