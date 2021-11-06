<?php include('config.php'); include('head.php');?>
<html>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="wrapper">
<div class="hero-unit">
<img src="images/9.png" width="180" height="180">
<div class="title_head">
<p style="font-size: 50px; color: white;">Online Library Management System</p><br><br><br>
<p style="font-size: 50px;color: white;">Online Public Access Catalog</p>
</div>
</div>

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
  <ul class="nav">
  <li class="active">
    <a href="../home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
    
	

	<li class="divider-vertical"></li>
  <li class="dropdown">
    <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
         <i class="icon-book icon-large"></i>Sections
          <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
     <li><a href="reading material/magazine.php"><i class="icon-search icon-large"></i>Periodical Section</a></li>
	 <li><a href="reading material/index.php"><i class="icon-search icon-large"></i>General Reference Section</a></li>
	 <li><a href="reading material/journal.php"><i class="icon-search icon-large"></i>Journals Section</a></li>
    </ul>
  </li>
 <li class="divider-vertical"></li>
	  <li><a href="logout.php"><i class="icon-exclamation-sign icon-large"></i>LogOut</a></li>
	   <li class="divider-vertical"></li>
	  
	  </li>
    
	
</ul>
    </div>
  </div>
</div>
<div>
<img style="width: 400px; height: 400px;" src="images/1.jpg">
	
<div id="photobox">
  <p align="center"><strong style="font-size: 20px;"><b>MISSION</b></strong><br><br/>
      <strong style="font-size: 20px;"> To produce well-rounded, employable, technocratic and entrepreneurial graduates equipped with knowledge, skills, values and attitudes to make outstanding contributions to the national development.To excel in teaching, learning and research with a strong emphasis on value addition to the national resource</strong></p>
</div>
<div id="vision">
  <p align="center"><strong style="font-size: 30px;">&shy;&shy;<b>VISION</b></strong><br><br/>
      <strong style="font-size: 30px;">Be the centre of excellence for value addition to the national resource base.</strong></p>
</div>
</div>
<br><br>
<?php include('footer.php'); ?>

</body>
</html>