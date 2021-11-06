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
	 <li><a href="#"><i class=" icon-exclamation-sign icon-large"></i>About</a></li>
	  <li class="divider-vertical"></li>
   <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
	  <li class="divider-vertical"></li>
</ul>
    </div>
  </div>
</div>

<div class="hero-unit-book1">
	<form id="save_voter" class="form-horizontal">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
  
	<div class="control-group">
    <label class="control-label" for="input01">Accession Number:</label>
    <div class="controls">
    <input type="text" name="accession_number" class="accession_number">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Title:</label>
    <div class="controls">
    <input type="text" name="Title" class="Title">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Author:</label>
    <div class="controls">
   <input type="text" name="Author" class="Author">
    </div>
    </div>
	

	<div class="control-group">
    <label class="control-label" for="input01">Publisher Name :</label>
    <div class="controls">
  <input type="text" name="publisher_Name" class="publisher_Name">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Copyright Year:</label>
    <div class="controls">
  <input type="text" name="copyright_Year" class="copyright_Year">
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01">status:</label>
    <div class="controls">
  <input type="text" name="status" class="status">
    </div>
    </div>
	
	
		<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
  <input type="text" name="Section" class="Section">
    </div>
    </div>
	
	
		<div class="control-group">
    <label class="control-label" for="input01">ISBN Number:</label>
    <div class="controls">
  <input type="text" name="ISBN_Number" class="ISBN_Number">
    </div>
    </div>
	
			<div class="control-group">
    <label class="control-label" for="input01">Class number :</label>
    <div class="controls">
  <input type="text" name="Class_number" class="Class_number">
    </div>
    </div>
	
	
				<div class="control-group">
    <label class="control-label" for="input01">Subject:</label>
    <div class="controls">
  <input type="text" name="Subject" class="Subject">
    </div>
    </div>
				<div class="control-group">
    <label class="control-label" for="input01">Place_of_Publication:</label>
    <div class="controls">
  <input type="text" name="Place_of_Publication" class="Place_of_Publication">
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
</div>
</body>
</html>

<script type="text/javascript">
$(document).ready( function () {

/*  another date shit*/

var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
/*asta d*/

jQuery('#save_voter').submit(function(e){
    e.preventDefault();
var accession_number = jQuery('.accession_number').val();
var Title = jQuery('.Title').val();
var Author= jQuery('.Author').val();
var publisher_Name= jQuery('.publisher_Name').val();
var copyright_Year = jQuery('.copyright_Year').val();
var status = jQuery('.status').val();
var Section = jQuery('.Section').val();
var ISBN_Number = jQuery('.ISBN_Number').val();
var Class_number = jQuery('.Class_number').val();
var Subject = jQuery('.Subject').val();
var Place_of_Publication = jQuery('.Place_of_Publication').val();
	
    e.preventDefault();
if (accession_number && Title && Author && publisher_Name && copyright_Year && status && Section && ISBN_Number && Subject && Place_of_Publication){	
    var formData = jQuery(this).serialize();	
	
    jQuery.ajax({
        type: 'POST',
        url:  'save_book.php',
        data: formData,
        success:
      alert('Book Added')
	
        
    });
	
}else
{
alert('All fields are required!');
return false;
}	
});


});
</script>