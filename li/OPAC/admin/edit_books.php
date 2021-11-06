<?php include('config.php');include('session.php'); include('head.php'); $id=$_GET['id'];?>
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

<div class="hero-unit-book1">
<?php
$edit_query=mysql_query("Select * from books where bookID='$id'")or die(mysql_error());
$row=mysql_fetch_array($edit_query);
?>
	<form method="POST" id="save_voter" class="form-horizontal">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
  
	<div class="control-group">
    <label class="control-label" for="input01">Accession Number:</label>
    <div class="controls">
    <input type="text" name="accession_number" class="accession_number" value="<?php echo $row['accession_number'] ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Title:</label>
    <div class="controls">
    <input type="text" name="Title" class="Title" value="<?php echo $row['Title'] ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Author:</label>
    <div class="controls">
   <input type="text" name="Author" class="Author" value="<?php echo $row['Author'] ?>">
    </div>
    </div>
	

	<div class="control-group">
    <label class="control-label" for="input01">Publisher Name :</label>
    <div class="controls">
  <input type="text" name="publisher_Name" class="publisher_Name" value="<?php echo $row['publisher_Name'] ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Copyright Year:</label>
    <div class="controls">
  <input type="text" name="copyright_Year" class="copyright_Year" value="<?php echo $row['copyright_Year'] ?>">
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01">status:</label>
    <div class="controls">
  <input type="text" name="status" class="status" value="<?php echo $row['status'] ?>">
    </div>
    </div>
	
	
		<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
  <input type="text" name="Section" class="Section" value="<?php echo $row['Section'] ?>">
    </div>
    </div>
	
	
		<div class="control-group">
    <label class="control-label" for="input01">ISBN Number:</label>
    <div class="controls">
  <input type="text" name="ISBN_Number" class="ISBN_Number" value="<?php echo $row['ISBN_Number'] ?>">
    </div>
    </div>
	
			<div class="control-group">
    <label class="control-label" for="input01">Class number :</label>
    <div class="controls">
  <input type="text" name="Class_number" class="Class_number" value="<?php echo $row['Class_number'] ?>">
    </div>
    </div>
	
	
				<div class="control-group">
    <label class="control-label" for="input01">Subject:</label>
    <div class="controls">
  <input type="text" name="Subject" class="Subject" value="<?php echo $row['Subject'] ?>">
    </div>
    </div>
				<div class="control-group">
    <label class="control-label" for="input01">Place_of_Publication:</label>
    <div class="controls">
  <input type="text" name="Place_of_Publication" class="Place_of_Publication" value="<?php echo $row['Place_of_Publication'] ?>">
    </div>
    </div>
	
	
	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
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
<?php
if (isset($_POST['save'])){
 $accession_number=$_POST['accession_number'];
 $Title=$_POST['Title'];
 $Author=$_POST['Author'];
 $publisher_Name=$_POST['publisher_Name'];
 $copyright_Year=$_POST['copyright_Year'];
 $status=$_POST['status'];
 $Section=$_POST['Section'];
 $ISBN_Number=$_POST['ISBN_Number'];
 $Subject=$_POST['Subject'];
 $Class_number=$_POST['Class_number'];
 $Place_of_Publication=$_POST['Place_of_Publication'];
 

 
 mysql_query("update books set 
 accession_number='$accession_number',
 Title='$Title',
 Author='$Author',
 publisher_Name='$publisher_Name',
 copyright_Year='$copyright_Year',
 status='$status',
 Section='$Section',
 ISBN_Number='$ISBN_Number',
 Class_number='$Class_number',
 Subject='$Subject',
 Place_of_Publication='$Place_of_Publication'
 
 where bookID='$id'")or die(mysql_error());
 header('location:books_list.php');
}
?>