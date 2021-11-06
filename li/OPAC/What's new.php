<?php
include('head.php');
include('config.php');
?>
<body>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="wrapper">

<div id="element" class="hero-body-index">
	<p><font color=""><h1>Login</h1></font></p>
	<form method="POST" >
	<table>
    <tr><td><font color="white">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	
	<button class="btn btn-inverse" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Login&nbsp;</button>
    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="btn btn-inverse" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Home&nbsp;</button>
	</td></tr>
	
	<tr><td>
	</td><tr>

	</table>
	</form>
	</br>
	<div class="error">
	<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysql_query("select * from user where UserName='$UserName' and Password='$Password'");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);


if ($count > 0){
session_start();
$_SESSION['id']=$row['User_id'];
header('location:home.php');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your UserName and Password
    </div>
<?php } 

}

?>	
</div>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
<?php 

include('footer.php')
?>
</div>
</body>
</html>