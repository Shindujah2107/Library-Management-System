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
    $journalname = $_POST['journalname'];
    
    $author2 = $_POST['author2'];
    
$purchasedate2 = $_POST['purchasedate2'];
$language2 = $_POST['language2'];
$status2 = $_POST['status2'];
$quantity2 = $_POST['quantity2'];
  
    // checking empty fields
    if(empty($journalname)|| empty($author2)|| empty($purchasedate2)|| empty($language2)||  empty($status2)|| empty($quantity2)) {
                
        if(empty($journalname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($author2)) {
            echo "<font color='red'>Author field is empty.</font><br/>";
        }
        
        if(empty($purchasedate2)) {
            echo "<font color='red'>Purchase Date field is empty.</font><br/>";
        }
       
		if(empty($language2)) {
            echo "<font color='red'>Language field is empty.</font><br/>";
        }
		if(empty($status2)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
		if(empty($quantity2)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database        
        $sql = "INSERT INTO journal(journalname, author2,purchasedate2,language2,status2,quantity2) VALUES(:journalname, :author2,:purchasedate2,:language2,:status2,:quantity2)";
        $query = $dbConn->prepare($sql);
                
        $query->bindparam(':journalname', $journalname);
       
        $query->bindparam(':author2', $author2);
		 
		  $query->bindparam(':purchasedate2', $purchasedate2);
		   $query->bindparam(':language2', $language2);
		    $query->bindparam(':status2', $status2);
			 $query->bindparam(':quantity2', $quantity2);
			  
			   
        $query->execute();
        
        // Alternative to above bindparam and execute
        // $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
        
        //display success message
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Successfully added Journal details.</div>';
        echo "<br/><a href='journal.php'>View Result</a>";
    }
}
?>
</body>
</html>