<?php 
  include "connection.php";
  //include "server.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<style>


  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
li a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}
li.dropdown {
  display: inline-block;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

    
</style>


</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <p style="color:white; font-size: 20px; align-items:Right; ">  ONLINE LIBRARY MANAGEMENT SYSTEM</p>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="home.php">HOME</a></li>
           
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="edit.php">Edit profile</a></li>
            
          </ul>
         
             
                <li class="dropdown">
        <a href="services.php" class="dropbtn">SERVICES</a>

         <div class="dropdown-content"> 
          <a href="Lending_books.php">Request for Lending book</a>
          <a href="myrequest.php">view your borrowed books</a>
         <a href="notification.php">Notice Board</a>
      
            </div>
  </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                      
                    </div>
                  </a></li>
                  
                </ul>
             
              <ul class="nav navbar-nav navbar-right">

                
              </ul>
             

      </div>
    </nav>
   <?php
    //if(isset($_SESSION['username']))
     // {
      //$day=0;

       //$exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
       //$res= mysqli_query($db,"SELECT * FROM `issue_book` where username ='$_SESSION[username]' and approve ='$exp' ;");
      
    // while($row=mysqli_fetch_assoc($res))
      {
        //$d= strtotime($row['return']);
        //$c= strtotime(date("Y-m-d"));
        //$diff= $c-$d;

       // if($diff>=0)
        //{
        //  $day= $day+floor($diff/(60*60*24)); 
       // } //Days
        
      }
      //$_SESSION['fine']=$day*.10;
    //}
    ?>
</body>
</html>