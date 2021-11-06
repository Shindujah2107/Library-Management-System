<ul>
<?php
include('config.php');
$count= 0;
$key =  $_POST['key'];
$key = addslashes($key);
$sql = mysql_query("select * from books WHERE TiTle LIKE '%$key%' or Author LIKE '%$key%' or accession_number LIKE '%$key%'") or die(mysql_error());

    While($row = mysql_fetch_array($sql)) {
	$count++;
	$bookid= $row['bookID'];
	$title=$row['Title'];
	$author=$row['Author'];
	$accession_number=$row['accession_number'];
	$publisher_Name=$row['publisher_Name'];
	$copyright_Year=$row['copyright_Year'];
	$status=$row['status'];
	$Section=$row['Section'];
	$ISBN_Number=$row['ISBN_Number'];
	$Class_number=$row['Class_number'];
	$Subject=$row['Subject'];
	$Place_of_Publication=$row['Place_of_Publication'];

	if($count<= 10){
?>

	<li>
		<a name="show" id="<?php echo $bookid; ?>">
		<p><a data-toggle="modal" href="#about"><?php echo $title; ?></a></p>
		
	</li>
	
		<div class="show<?php echo $bookid; ?> display_all resulter">
		<p><label>Title : </label><?php echo $title; ?></p>
		<p><label>Author : </label><?php echo $author; ?></p>
		<p><label>accession_number : </label><?php echo $accession_number; ?></p>
		
	
	
		<div class="modal hide fade" id="about">
	<div class="modal-header">
	<h1>Book Information</h1>
	  </div>
	  <div class="modal-body">
	 
	  
	    <p> accession_number:&nbsp;<?php echo $accession_number ?></p>
	    <p>Title:&nbsp;<?php echo $title ?></p>
	    <p>Author:&nbsp;<?php echo $author ?></p>
	    <p>Publisher_Name:&nbsp;<?php echo $publisher_Name ?></p>
	    <p>copyright_Year:&nbsp;<?php echo $copyright_Year ?></p>
	    <p>status:&nbsp;<?php echo $status ?></p>
	    <p>Section:&nbsp;<?php echo $Section ?></p>
	    <p>ISBN_Number:&nbsp;<?php echo $ISBN_Number ?></p>
	    <p>Class_number:&nbsp;<?php echo $Class_number ?></p>
	    <p>Subject:&nbsp;<?php echo $Subject ?></p>
	    <p>Place_of_Publication:&nbsp;<?php echo $Place_of_Publication ?></p>
	   
	    
		
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

	
		</div>
<?php }}
if($count==""){
echo "no match Found";
}else{
 ?>
 
 
 
 <li><span class="resu">Total Search Result <?php echo $count; ?> </span><a class="view" href="allresult.php?key=<?php echo $key; ?>">View all Search Result</a></li>
 <?php } ?>
 </ul>
 		