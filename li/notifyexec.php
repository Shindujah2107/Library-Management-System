 <?php
include('connection.php');
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysqli_real_escape_string($str);
	}
$position = $_POST['position'];
$message = $_POST['message'];

mysqli_query($connection,"INSERT INTO noticemsg (position, message) VALUES ('$position','$message')");
	header("location: notify.php");
?>