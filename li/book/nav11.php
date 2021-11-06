
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >


</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php"></a></li>
            <li><a href="books.php"></a></li>
            <li><a href="Acquisition.php"></a></li>
            <li><a href="feedback.php"></a></li>
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {

          ?>
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="home.php"> HOME</a></li>
                  <li><a href="../logout.php">LOGOUT</a></li>
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="../index.php"> HOME</a></li>
                  <li><a href="../logout.php">LOGOUT</a></li>
                
              </ul>
                <?php
            }
          ?>

      </div>
    </nav>
    
</body>
</html>