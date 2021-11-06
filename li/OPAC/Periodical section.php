<?php include('config.php'); include('head.php');?>
<html>
<link rel="stylesheet" href="style.css" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 16px}
-->
</style>
</head>
<body>
<div class="wrapper">
<div class="hero-unit">
<img src="images/9.png" width="180" height="180">
<div class="title_head">
<p style="font-size: 50px; color: white;">Online Library Management System</p><br><br><br>
<p style="font-size: 50px; color: white;">Online Public Access Catalog</p>
</div>
</div>

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
  <ul class="nav">
  <li class="active">
    <a href="index.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
   
    <li class=""></li>
	<li class="divider-vertical"></li>
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
         <i class="icon-book icon-large"></i>Periodical Section
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
     <li><a href="magazine.php"><i class="icon-search icon-large"></i>Periodical Section</a></li>
	 <li><a href="books.php"><i class="icon-search icon-large"></i>General Reference Section</a></li>
	 <li><a href="journal.php"><i class="icon-search icon-large"></i>Journal Section</a></li>

    </ul>
  </li>
 <li class="divider-vertical"></li>
	  <li><a href="logout.php"><i class="icon-exclamation-sign icon-large"></i>LogOut</a></li>
	   <li class="divider-vertical"></li>
	  </li>
    <li class="divider-vertical"></li>
	
</ul>
    </div>
  </div>
</div>

<div id="sections">
  <div align="left" class="style2 style1 style1 style1">PERIODICAL SECTION</div>
  <br/>
  <br/>
  <span class="style2"> - Provides collection of local and foreign serials and materials published with relative frequency such as magazines, news papers, and professional journals. Clippings and bound volumes of general professional periodial literature are also available in this section.</span></div>

<div class="hero-unit-book12">
<div class="index-search">
<form class="well form-search">
  <input placeholder="Quick Search" class="input-large search-query" type="text" id="key" >
  <button type="submit" class="btn2">Search</button>
  	<div class="result"><div class="loading"></div></div>
</form>
</div>
</div>
<?php include('footer.php'); ?>

	    

</body>
</html>