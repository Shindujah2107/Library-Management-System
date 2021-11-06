<?php include('config.php');include('session.php'); include('head.php');?>
</head>
<body>
<div class="wrapper">
<div class="hero-unit">
<img src="img/school_logo.png" width="180" height="180">
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
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
    <li class="divider-vertical"></li>
  <li><a href="books_list.php"><i class="icon-book icon-large"></i>Learning Resources</a></li>
    <li class="divider-vertical"></li>
  <li><a href="add_book.php"><i class="icon-book icon-large"></i>Add Learning Resources</a></li>
    <li class="divider-vertical"></li>
	 <li><a data-toggle="modal" href="#about"><i class=" icon-exclamation-sign icon-large"></i>About</a></li>
	  <li class="divider-vertical"></li>
   <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
	  <li class="divider-vertical"></li>
</ul>
    </div>
  </div>
</div>
<div class="hero-unit-book">
  <h1>Heading</h1>
  <p>Tagline</p>
  <p>
    <a class="btn btn-primary btn-large">
      Learn more
    </a>
  </p>
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