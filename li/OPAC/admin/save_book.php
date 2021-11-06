<?php

include('config.php');
 
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
 

 
 
mysql_query("insert into books (accession_number,Title,Author,publisher_Name,copyright_Year,status,Section,ISBN_Number,Class_number,Subject,Place_of_Publication)
values('$accession_number','$Title','$Author','$publisher_Name','$copyright_Year','$status','$Section','$ISBN_Number','$Class_number','$Subject','$Place_of_Publication')") or die(mysql_error());


?>
