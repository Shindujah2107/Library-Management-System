<html>
<head>
    <title>Add Data</title>
</head>
 <!--

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">


<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $magazinename = $_POST['magazinename'];
   
    // checking empty fields
    if(empty($magazinename) ||  empty($monthissue)|| empty($year)|| empty($status)|| empty($quantity)|| empty($language)|| empty($author)) {
                
        if(empty($magazinename)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        
        if(empty($monthissue)) {
            echo "<font color='red'>Month field is empty.</font><br/>";
        }
        if(empty($year)) {
            echo "<font color='red'>Year field is empty.</font><br/>";
        }
		if(empty($purchasedate1)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		
		if(empty($status)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
		if(empty($quantity)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
		if(empty($language)) {
            echo "<font color='red'>Language field is empty.</font><br/>";
        }
		if(empty($author)) {
            echo "<font color='red'>Author field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database        
        $sql = "INSERT INTO magazine(magazinename, monthissue, year,status,quantity,language,author) VALUES(:magazinename, :monthissue, :year,:status,:quantity,:language,:author)";
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':magazinename', $magazinename);
        $query->bindparam(':monthissue', $monthissue);
        $query->bindparam(':year', $year);
		 $query->bindparam(':status', $status);
		  $query->bindparam(':quantity', $quantity);
		   $query->bindparam(':language', $language);
		    $query->bindparam(':author', $author);
			 
			   
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
        
        //display success message
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully added Magazine details.</div>';
        echo "<br/><a href='magazine.php'>View Result</a>";
    }
}
?>
</body>
</html>