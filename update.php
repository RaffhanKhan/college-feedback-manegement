<?php
$server = "localhost";
$dbname="register";
$dbuname="root";
$dbpass="";
$regno=$_REQUEST['regno'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password1'];
$conn =mysqli_connect($server,$dbuname,$dbpass,$dbname);
if(!$conn)
{
	print_r("Not connected");
}
else
{
	$sql='insert into signup (regno , email, password) values ("'. $regno .'","'. $email .'","'. $password .'");';
	$flag=mysqli_query($conn, $sql);
	if(!$flag){
		print_r("Not connected go back");

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
		<a href="home.html">GO BACK</a>
		</body>
		</html>
		<?php
	}
	else
	{
		header("Location:completereg.html");
	}
}









  ?>