<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<style type="text/css">
	.blur{
		background-color: rgba(0,0,0,0.5);
		width: 100%;
		height: 900px;
		z-index: 10;
		position: absolute;
		top: 0px;
	}
</style>
</head>
<body>
<div class="container">
<br><br>
	<h1 style="font-family: oswalt-Regular;">CarSales Login</h1>
	
		<div class="signin" style="z-index: 100">
     		<form name="form1" method="get">
	      		<input type="text" class="user" placeholder="username" name="login_id"/>
	      		<input type="password" class="pass" placeholder="password" name="password"/>
          		<input type="submit" name="Submit" value="Submit"/>
	 		</form>
		</div>
<div class="footer">
     <p style="letter-spacing: 
     10px">Copyright &copy; <a href="index.php" style="text-decoration: none;">CarSales</a>
</div>

</body>
</html>
<?php
require ('db_conn.php');
function login()
{
	$login_id=$_GET['login_id'];
	$password=$_GET['password'];
	if($login_id=="admin" && $password=="admin")
	{
		$_SESSION["user_id"]="admin";
		$_SESSION["name"] ="admin";
		header('Location: adminview.php');
	}
	elseif ($login_id=='' && $password=='') {
		echo "Enter Username and password";
	}
	else
		echo "Incorrect credentials";
}
if(isset($_GET['Submit']))
{
	login();
}
?>