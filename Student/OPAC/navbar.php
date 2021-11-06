<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <li><a href="../home.php">HOME</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">READING MATERIALS</a>
    <div class="dropdown-content">
      <a href="books.php">Refernce_Books</a>
      <a href="magazine.php">Magazine</a>
      <a href="journals.php">Journals</a>
    </div>
  </li>
    
                <li><a href="books.php">PUBLISHER</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="borrower_login.php"><span class="glyphicon glyphicon-log-in">LOGOUT  </span></a></li>
    
    
  </ul>
  </div>
</nav>
</body>
</html>