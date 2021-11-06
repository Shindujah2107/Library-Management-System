<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:../home.php");
}
?>
<?php
/* form.php */
 
    $mysqli = new mysqli("localhost", "root", "", "library3");

    //form HTML code here.....
if($_SERVER['REQUEST_METHOD']=='POST'){
    
   // $id = (isset($_POST['id']) ? $_POST['id'] : '');
    $j_isbn=$mysqli->real_escape_string($_POST['j_isbn']);
    $j_issn=$mysqli->real_escape_string($_POST['j_issn']);
    $j_title=(isset($_POST['j_title']) ? $_POST['j_title'] : '');
    $j_author=$mysqli->real_escape_string($_POST['j_author']);
    $j_volume=$mysqli->real_escape_string($_POST['j_volume']);
    $j_language=$mysqli->real_escape_string($_POST['j_language']);
    $j_descr=(isset($_POST['j_descr']) ? $_POST['j_descr'] : '');
    $j_impact=$mysqli->real_escape_string($_POST['j_impact']);
    //$id = ''; 
   // if( isset( $_GET['id'])) {
       // $id = $_GET['id']; 
   // } 
   $j_image_path ='';
   if(isset($_FILES['j_image']['name'])){
    $j_image_path =$_FILES['j_image']['name'];
   }
    //$j_image_path = $mysqli->real_escape_string('image/'.$_FILES['j_image']['name']);
    
    if(preg_match("!image!",$_FILES['j_image']['type'])){

        if(copy($_FILES['j_image']['tmp_name'],$j_image_path)){

$_SESSION['j_isbn']=$j_isbn;
$_SESSION['j_image']=$j_image_path;
$sql="INSERT INTO ejournal( j_isbn,j_issn,j_title,j_author,j_volume,j_language, j_image, j_descr ,j_impact)VALUES('$j_isbn', '$j_issn','$j_title', '$j_author', '$j_volume', '$j_language', '$j_image_path', '$j_descr', '$j_impact')";
       if($mysqli->query($sql)===true){

        $_SESSION['message']="Journal details added succesfully";
       }
       else{
        $_SESSION['message']="Journal details not added succesfully";
       }
    }
       else{
        $_SESSION['message']="file upload failed";
       }
    }
 else{
    $_SESSION['message']="Please only upload JPG.JPEG,or PNG images"; 
 }
    
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>
<style>
*{  
  margin:0;
  padding:0;
}

h1 {
  font-size: 2em;
  font-family: "Core Sans N W01 35 Light";
  font-weight: normal;
  margin: .67em 0;
  display: block;
}

#registered {
    margin-top: 50px;
}

#registered img {
    margin-bottom: 0px;
    width: 100px;
    height: 100px;
}

#registered span {
    clear: both;
    display: block;
}

img {
    margin-bottom: 20px;
}

.j_image {
    margin: 10px 0 20px 0;
}

.module{
  position:relative;
  top:10%;    
  height:65%;
  width:450px;
  margin-left:auto;
  margin-right:auto;
}

.user {
    color: #66d8fc;
    font-weight: bold;
}

.userlist {
    float:left;
    padding: 30px;
}

.userlist span {
    color: black;
}

.welcome{
  position:relative;
  top:30%;    
  height:65%;
  width:900px;
  margin-left:auto;
  margin-right:auto;
  margin-top: 50px;
}

::-moz-selection {
  background: #19547c;
}
::selection {
  background: #19547c;
}
input::-moz-selection {
  background: #037db6;
}
input::selection {
  background: #037db6;
}

body{
  color: black;
  background-color:#f0f0f0;
  font-family:helvetica;
 
}

.body-content{
 color: black;
  position:relative;
  top:20px;
  height:700px;
  width:800px;
  margin-left:auto;
  margin-right:auto; 
  background: transparent;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"]
{
 color: white;
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  background-color: black;
  color: rgba(255, 255, 255, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  
  -webkit-transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
  transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
}
select:hover,
textarea:hover,
input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
  border-color: rgba(255, 255, 255, 0.5);
  background-color: black;
  color: white;
}
select:focus,
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
  border: 2px solid;
  border-color: #1e5f99;
  background-color: black;
  color: white;
}

.btn {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin: 3px 0;
  padding: 6px 20px;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background-color: white;
  color: black;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}
.btn.active,
.btn:active {
  padding: 7px 19px 5px 21px;
}
.btn.disabled:active,
.btn[disabled]:active,
.btn.disabled.active,
.btn[disabled].active {
  padding: 6px 20px !important;
}
.btn:hover,
.btn:focus {
  background-color: rgba(0, 0, 0, 0.25);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn:active,
.btn.active {
  background-color: rgba(0, 0, 0, 0.15);
  color: rgba(255, 255, 255, 0.8);
  border-color: rgba(255, 255, 255, 0.07);
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary {
  background-color: #098cc8;
  color: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  background-image: -webkit-linear-gradient(top, #0f9ada, #0076ad);
  background-image: linear-gradient(to bottom, #0f9ada, #0076ad);
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.15) inset;
}
.btn-primary:hover,
.btn-primary:focus {
  background-color: #21b0f1;
  color: #ffffff;
  border-color: transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn-primary:active,
.btn-primary.active {
  background-color: #006899;
  color: rgba(255, 255, 255, 0.7);
  border-color: transparent;
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover,
.btn-primary:focus {
  background-image: -webkit-linear-gradient(top, #37c0ff, #0097dd);
  background-image: linear-gradient(to bottom, #37c0ff, #0097dd);
}
.btn-primary:active,
.btn-primary.active {
  background-image: -webkit-linear-gradient(top, #006ea1, #00608d);
  background-image: linear-gradient(to bottom, #006ea1, #00608d);
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6) inset, 0 0 0 1px rgba(255, 255, 255, 0.07) inset;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

.alert {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 4px 20px 4px 20px;
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 20px;
  text-shadow: none;
  position: relative;
  background-color: #272e3b;
  color: rgba(255, 255, 255, 0.7);
  border: 1px solid #000;
  box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
  color: #f00;
  background-color: #360e10;
  box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
    display: none;
}
.alert-success {
  color: #21ec0c;
  background-color: #15360e;
  box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Journal Details</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Journal Details</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="journals.php"> Journal Details</a></li>
					<li class="active"><a href="uploadj.php">Add Journal</a></li>
					<li><a href="../index.php">Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Journal Details &raquo; Add Journal</h2>
			<hr />
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

<div class="body-content">
  <div class="module">
    <form class="form" action="uploadj.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Journal ISBN" name="j_isbn" required />
      <input type="text" placeholder="Journal ISSN" name="j_issn" required />
      <input type="text" placeholder="Journal title" name="j_title" required />
      <input type="text" placeholder="Journal author" name="j_author" required />
      <input type="text" placeholder="Journal volume" name="j_volume" required />
      <input type="text" placeholder="Journal language" name="j_language" required />
      <div class="j_image"><label>Select your image: </label><input type="file" name="j_image" accept="images/*" required /></div>
      
      <textarea type="text" placeholder="Journal description" name="j_descr" required ></textarea>
      <input type="text" placeholder="Impact factor" name="j_impact" required />
      <input type="submit" name="add" class="btn btn-sm btn-primary" value="Save">
						<a href="indexjournal.php" class="btn btn-sm btn-danger">Cancel</a>
    </form>
  </div>
</div>
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
</body>
  
</div>
</html>
