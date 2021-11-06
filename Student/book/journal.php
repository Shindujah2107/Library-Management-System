
<!DOCTYPE html>
<html lang="en">
<head><!--

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .content {
      margin-top: 80px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php
  session_start();
  $j_isbn = $_GET['j_isbn'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM ejournal WHERE j_isbn = '$j_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty journal";
    exit;
  }

  $title = $row['j_title'];
 
?>
      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0"><a href="journals.php">Journals</a> > <?php echo $row['j_title']; ?></p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./bootstrap/journal/<?php echo $row['j_image']; ?>">
        </div>
        <div class="col-md-6">
          <h4>Journal Description</h4>
          <p><?php echo $row['j_descr']; ?></p>
          <h4>Journal Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "j_descr" || $key == "j_eissn" || $key == "j_image" ){
                continue;
              }
              switch($key){
				  case "j_isbn":
                  $key = "ISBN";
                  break;
                case "j_issn":
                  $key = "ISSN";
                  break;
                case "j_title":
                  $key = "Title";
                  break;
                case "j_author":
                  $key = "Author";
                  break;
                  case "j_volume":
                  $key = "Volume";
                  break;
				  case "j_language":
                  $key = "Language";
                  break;
				  
				  case "j_impact":
                  $key = "Impact Factor";
                  break;
                default;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <?php
          echo "<form>"
         ;?>
          <?php echo "</form>";
          ?>
       	</div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
  $('.date').datepicker({
    format: 'yyyy-mm-dd',
  })
  </script>
<?php
 
?>  <nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<div class="navbar-footer">
<p style="color:white;text-align:center;">
		
		Email:&nbsp Online.library@gmail.com <br><br>
		Mobile:&nbsp &nbsp +880171*******
	</p>
	   </div>
</div>
</html>