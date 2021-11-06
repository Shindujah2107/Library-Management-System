<?php include('config.php'); include('head.php');?>
<html>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="wrapper">
<div class="hero-unit">
<img src="admin/img/school_logo.png" width="180" height="180">
<div class="title_head">
<h2>Inocencio V. Ferrer Memorial School of Fisheries</h2>
<h2>Online Public Access Catalog</h2>
</div>
</div>

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
  <ul class="nav">
  <li class="active">
    <a href="index.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
  
    <li class="divider-vertical"></li>
	
<li class="dropdown">
    <a href="new.php">
         <i class="icon-book icon-large"></i>New
          
    </a>
 
	<li class="divider-vertical"></li>
	
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
         <i class="icon-book icon-large"></i>Sections
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
     <li><a href="circulation section.php"><i class="icon-search icon-large"></i>Circulation Section</a></li>
     <li><a href="Periodical section.php"><i class="icon-search icon-large"></i>Periodical Section</a></li>
     <li><a href="Audio-Visual section.php"><i class="icon-search icon-large"></i>Audio-Visual Section</a></li>
	 <li><a href="General Reference section.php"><i class="icon-search icon-large"></i>General Reference Section</a></li>
	 <li><a href="Faculty reading.php"><i class="icon-search icon-large"></i>Faculty Reading Section</a></li>
	 <li><a href="Filipiniana.php"><i class="icon-search icon-large"></i>Filipiniana Section</a></li>
	 <li><a href="Ladies section.php"><i class="icon-search icon-large"></i>Ladies Section</a></li>
	 <li><a href="Archive section.php"><i class="icon-search icon-large"></i>Archive Section</a></li>
	 <li><a href="American shelf.php"><i class="icon-search icon-large"></i>American</a></li>
    </ul>
  </li>
 <li class="divider-vertical"></li>
	  <li><a href="about.php"><i class="icon-exclamation-sign icon-large"></i>About</a></li>
	   <li class="divider-vertical"></li>
	  <li><a href="admin"><i class="icon-user icon-large"></i>Admin</a>
	  </li>
    <li class="divider-vertical"></li>
	
</ul>
    </div>
  </div>
</div>

<div class="hero-unit-book1">
  
	<table class="users-table">


<div class="demo_jui">
<table class="table table-striped" cols="10" rows="10">
  <caption>List of new Books</caption>
  <thead>
    <tr>
      <th>New Books</th>
	  
      <th>New Books</th>
	  
      <th>New Books</th>
	   <th></th>
	    <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>PHP</td>
	    <td>PHP</td>
		  <td>PHP</td>
		    <td>PHP</td>	
    </tr>
	<tr>
	      <td>PHP</td>
	    <td>PHP</td>
		  <td>PHP</td>
		    <td>PHP</td>	

	</tr>
	tr>
	      <td>PHP</td>
	    <td>PHP</td>
		  <td>PHP</td>
		    <td>PHP</td>	

	</tr>
	<tr>
	      <td>PHP</td>
	    <td>PHP</td>
		  <td>PHP</td>
		    <td>PHP</td>	

	</tr>
  </tbody>
</table>
</div>
</div>
<div class="index-search">
<form class="well form-search">
  <input placeholder="Quick Search" class="input-large search-query" type="text" id="key" >
  <button type="submit" class="btn2">Search</button>
  	<div class="result"><div class="loading"></div></div>
</form>

</div>
</div>

<?php include('footer.php'); ?>
<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
    </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
	</div>
  </div>
		
		<div class="modal hide fade" id="about">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    
		
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
</div>
</body>
</html>