<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

$dbConn=mysqli_connect($host,$user,$password);
mysqli_select_db($dbConn,$db);

if(isset($_POST['username'])){
$uname=$_POST['username'];
$password=$POST['password'];

$sql="select * from login form where user='".$uname."'AND Pass='".$password."' limit 1 ";

$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
echo"you have successfull logged in ";
exit();
}
else{
echo"entered incorrect password";
exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	
</head>
<body>
	<div class="container">
		<form method ="POST" action="#">
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>