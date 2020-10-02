<?php
$server = "localhost";
$dbname="register";
$dbuname="root";
$dbpass="";
$flag=0;
$subject=$_REQUEST['subject'];
$faculity=$_REQUEST['teacher'];
$conn=mysqli_connect($server,$dbuname,$dbpass,$dbname); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	function display()
  	{
  		var x=getElementsByTagName('qno').value;
  		dis.innerHTML=x;

  	}
  </script>
</head>
<body  style="text-align: center;background-color:#f5f2d0 ">
	<h1 style="text-align: center;background-color: #dec19b">FEEDBACK</h1><br><hr>
	<?php
$sql="select * from questions";
$res=mysqli_query($conn,$sql);
$qno=0
	?>
<form method="get" action="store.php">
	<?php  $inc=1; ?>

<?php while($rep=mysqli_fetch_array($res))
	{
		$temp=$rep['id'];
		$inc="q".$temp;
	//print_r($inc);
		
		?>
	<label><b><?php print_r($rep['id']);?>.<?php print_r($rep['ques']); ?></b></label><br><br>
	<div>
    <input type="radio" name="<?php print_r($inc);?>" value="100" checked="checked">OUT STANDING
    <input type="radio" name="<?php print_r($inc);?>" value="80" >EXCELLENT
    <input type="radio" name="<?php print_r($inc);?>" value="60" >GOOD
    <input type="radio" name="<?php print_r($inc);?>" value="40" >POOR<br><br><hr>
    <div>
	<?php  };?>
	
	<input type="submit" class="btn btn-primary" name="submit" value="submit">
	<div id="dis"></div>
	</form>
</body>
</html>

