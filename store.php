<?php
$server = "localhost";
$dbname="register";
$dbuname="root";
$dbpass="";
$q1=$_REQUEST['q1'];
$q2=$_REQUEST['q2'];
$q3=$_REQUEST['q3'];
$q4=$_REQUEST['q4'];
$q5=$_REQUEST['q5'];
$avg=($q1+$q2+$q3+$q4+$q5)/5;
$subject=$_REQUEST['subject'];
$faculity=$_REQUEST['faculity'];
$vregno=$_REQUEST['vregno'];
$conn=mysqli_connect($server,$dbuname,$dbpass,$dbname);
if(!$conn)
{
		print_r("not connected");
}
else
{
$sql='insert into resume(vregno,subject,faculity,r1,r2,r3,r4,r5,avgr) values ("'. $vregno .'","'.$subject.'","'. $faculity .'","'. $q1 .'","'.$q1 .'","'. $q1 .'","'. $q1 .'","'. $q1 .'","'.$avg.'");';
//$sql='insert into report(vregno,subject,faculity,r1,r2,r3,r4,r5,avgr) values ("'. $regno .'","'. $subject .'","'. $faculity .'","'. $q1 .'","'.$q1 .'","'. $q1 .'","'. $q1 .'","'. $q1 .'","'.$avg.'");';
$res=mysqli_query($conn,$sql);
//$_SESSION['SUB'.$I]=$subject;
//$_SESSION['I']++;


//header("location:stored.html?");
?>
<!DOCTYPE html>
<html>
<head>
	<title>updated</title>
</head>
<body onload="noBack" onpageshow="if(event.presisted) noBack();" onunload="">
	<center>
<h1 align="center">UPDATED</h1>
<form method="get">
	<!--<input type="text" name="vregno" value="<?php print_r($vregno);?>">-->
<a href="feedback.php?vregno=<?php print_r($vregno);?>">CLICK HERE TO CONTINUE...</a>
</form>
</center>
</body>
</html>
<?php
}
?>