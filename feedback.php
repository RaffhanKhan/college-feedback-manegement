<?php
$server = "localhost";
$dbname="register";
$dbuname="root";
$dbpass="";

$vregno=$_REQUEST['vregno'];
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
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
  <style type="text/css">

    h1{
        position: relative;
        background-color: #f5f2e0;
    }
    .bg3{
    	background-color: #654456;
    }
    #dr{
      background-color: red;
      color: white;
    }
  </style>
  <script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
  <script>
 $(document).ready(function() {
  $('#naav a').click(function(e) {
   e.preventDefault();
   $('#hdest').load($(this).attr('href'));
  });
 });
</script>
<script type="text/javascript">
 $(document).ready(function(){
    $("#<?php print_r($iid);?>").click(function(){
        $("#showme").show();
       $("#divsthatIwanttohide").hide();

    });

});
</script>
</head>
<body onload="noBack" onpageshow="if(event.presisted) noBack();" onunload="" style="background-color: #F5F2D0">
    <h1 align="center">FEEDBACK</h1><br>
    <div class="container-fluid bg1 text-center">

  <div id="naavv">
  <nav class="navbar navbar-expand-sm bg-light ">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.html"><button  type="button" class="btn btn-warning">Logout <?php print_r($vregno);?>  </button></a>
      
      </li>  
</nav>
</div>
</div>
<?php 
$s2='select done from report where vregno="'.$vregno.'" ';
$s="select * from snf"; 
//$s2="select subject from resport where vregno="$vregno" and done=0;

$sql=mysqli_query($conn,$s);
$sql2=mysqli_query($conn,$s2);
//print_r($sql2);
$count=mysqli_num_rows($sql2);
//print_r($count);
/*for ($i=0; $i <$count; $i++) { 
	$pp=mysqli_fetch_array($sql2);
	//print_r($pp);
	//print_r($pp['done']);
  $check=print_r($pp['done']);
}*/
?>
<form method="get">
    <div class="container-fluid bg1 text-center">
    	<div id="naav">
            <?php 
            $inc="123456";
           
            $t="0";

                while($res=mysqli_fetch_array($sql))
                {
                    $inc=$inc+5;
                   // $iid=$iid+1;
        			$t=$t+1;
        			//print_r($t);
        			//print_r($res);

                
       /* for($j=0;$j<4;$j++)
        {
       	if($_session[$sub+$i]==$res['subject'])
       	continue;*/
        $pp=mysqli_fetch_array($sql2);
        //$check=print_r($pp['done']);

       	if($pp['done']==0)
       	{
          
        
       	

	?>
       
        <a href="questionsretrieve.php?sub=<?php print_r($res['subject']);?>&fac=<?php print_r($res['faculity']);?>&vregno=<?php print_r($vregno);?>"> <div style="height: 100px;color: white;background-color:#<?php print_r($inc);?> " ><b><?php print_r($res['subject']); ?></b></div><br></a>
        
            
        <?php } }?>

        
</div>
</div>
<div class="container-fluid bg2 text-center" id="hdest">

</div>

<div class="container-fluid bg3 text-center" id="hdest">
<p>copy rights</p>
</div>
</form>
</body>
</html>