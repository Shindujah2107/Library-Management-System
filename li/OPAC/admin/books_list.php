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

<div class="hero-unit-book1">
  
	<table class="users-table">


<div class="demo_jui">
		<table class="table "  cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Accession number</th>
				<th>Title</th>
				<th>Author</th>
				<th>Publisher Name</th>
				<th>Copyright Year</th>
				<th>Action</th>
			
			
				</tr>
			</thead>
			<tbody>

<?php  $book_query=mysql_query("select * from books ")or die(mysql_error()); 
while($row=mysql_fetch_array($book_query)){ $id=$row['bookID'];
?>

<tr class="del<?php echo $id ?>">
	<td><?php echo $row['accession_number'];  ?></td>
	<td><?php  echo $row['Title'];?></td>
	<td><?php echo $row['Author']; ?></td>
	<td><?php  echo $row['publisher_Name'];?></td>
	<td><?php  echo $row['copyright_Year'] ?></td>
	<td align="center">
	<a class="btn btn-warning" href="edit_books.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;
	<a class="btn btn-primary" data-toggle="modal" href="#<?php echo $id; ?>" ><i class="icon-list icon-large"></i>&nbsp;View</a>
<div class="modal hide fade" id="<?php echo $id; ?>">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	   <p><h2><font color="black">Books Information</font></h2></p>
	   <p>Accession Number:&nbsp;<?php echo $row['accession_number'];  ?></p>
	   <p>Title:&nbsp;<?php echo $row['Title'];  ?></p>
	   <p>Author:&nbsp;<?php echo $row['Author'];  ?></p>
	   <p>Publisher Name:&nbsp;<?php echo $row['publisher_Name'];  ?></p>
	   <p>Copyright Year:&nbsp;<?php echo $row['copyright_Year'];  ?></p>
	   <p>status:&nbsp;<?php echo $row['status'];?></p>
	   <p>Section:&nbsp;<?php echo $row['Section'];?></p>
	   <p>ISBN_Number:&nbsp;<?php echo $row['ISBN_Number'];?></p>
	   <p>Class_number:&nbsp;<?php echo $row['Class_number'];?></p>
	   <p>Subject:&nbsp;<?php echo $row['Subject'];?></p>
	   <p>Place_of_Publication:&nbsp;<?php echo $row['Place_of_Publication'];?></p>
	
	   
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
	<a class="btn btn-danger1"  id="<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
		   
	</td>


	</tr>
<?php  }?>

			</tbody>
		</table>
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

<script type="text/javascript">
	$(document).ready( function() {
	

	
	$('.btn-danger1').click( function() {
		
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this Voter?")){
			
		
			$.ajax({
			type: "POST",
			url: "del_books.php",
			data: ({id:id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow'); 
			} 
			}); 
			}else{
			return false;}
		});				
	});

</script>