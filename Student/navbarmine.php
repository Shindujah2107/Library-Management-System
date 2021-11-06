<?php
  session_start();
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
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li class="dropdown">

    <a href="javascript:void(0)" class="dropbtn">READING MATERIALS</a>
    <div class="dropdown-content">
      <a href="books.php">Refernce_Books</a>
      <a href="magazine.php">Magazine</a>
      <a href="journals.php">Journals</a>
            </div>
  </li>
            <li><a href="feedback.php">FEEDBACK</a></li>
            <li><a href="books.php">PUBLISHER</a></li>
            <li><a href="OPAC/OPAC.php">OPAC</a></li>
            
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {

          ?>
                <ul class="nav navbar-nav">
                  <li><a href="profile.php">PROFILE</a></li>
                <li class="dropdown">
        <a href="services.php","javascript:void(0)" class="dropbtn">SERVICES</a>

         <div class="dropdown-content"> 
          <a href="Lending_books.php">Request for Lending book</a>
          <a href="myrequest.php">view your borrowed books</a>
          <a href="expired.php">Return date expaired Book list</a>
          <a href="notice.php">Recent Notices From Library</a>
      
            </div>
  </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";
                        echo $_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
                <?php
            }
          ?>

      </div>
    </nav>
   <?php
    //if(isset($_SESSION['login_user']))
     // {
      //$day=0;

       //$exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
       //$res= mysqli_query($db,"SELECT * FROM `issue_book` where username ='$_SESSION[login_user]' and approve ='$exp' ;");
      
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