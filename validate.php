<?php
$server="localhost";
$dbname="register";
$dbuname="root";
$dbpass="";


$vregno=$_REQUEST['vregno'];
$vpassword=$_REQUEST['vpassword'];


$conne=mysqli_connect($server,$dbuname,$dbpass,$dbname);
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
  </script>
  <script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
  <style type="text/css">
  	#a{
  		background-color: lightblue;
  		height: 500px;
  		size: 30px;
  		text-align: center;
  		vertical-align: center;
  	}
  </style>
  </head>
     <body onload="noBack" onpageshow="if(event.presisted) noBack();" onunload="">
      <form method="get">
     
         <input type="hidden" name="vregno" value="<?php print_r($vregno);?>">
     
<?php  
if(!$conne)
 {
  print_r("NOT connected");

 }
 else
 {
  $sql='select * from signup where regno="'.$vregno.'" and password="'.$vpassword.'"';
  $sql2='select * from snf';
  $res=mysqli_query($conne,$sql);
  $res2=mysqli_query($conne,$sql2);
  //$result=mysqli_fetch_array($res2);
  //print_r($result);
  $row=mysqli_num_rows($res2);
  //print_r($row);
 
  if(mysqli_num_rows($res)==0)
  {

    print_r("invaied user go back");
    ?>
    <a href="home.html">HOME</a>
    <?php

  }
  else
  {
    //print_r($sql2);
    //print_r($result);
    //session_start();
    //$_SESSION['I']=0;
    //$_SESSION['user']=$vregno;
    $t=0;
    while ($raff=mysqli_fetch_array($res2)) {
    	  $subject=$raff['subject'];
    $faculity=$raff['faculity'];
    
   // }
   
   // for ($i=1; $i <=$row ; $i++) 
    // {
     // print_r($i);
     
      //$com='insert into report(vregno,subject,faculity,r1,r2,r3,r4,r5,avgr) values ("'. $vregno .'","'..'","'.0.'","'. 0.'","'. 0.'","'.0.'","'. 0.'","'.0.'","'.0.'");';
     $com='insert into report(vregno, subject, faculity, q1, q2, q3, q4, q5, avgr) values ("'. $vregno .'","'.$subject .'","'.$faculity.'",'.$t.','.$t.','.$t.','.$t.','.$t.','.$t.');';
      //$com='INSERT INTO report(vregno, subject, faculity, done, q1, q2, q3, q4, q5, avgr) VALUES ("'. $t .'","'. $t .'","'.$t .'","'.$t.'","'. $t .'","'.$t.'","'.$t .'","'.$t .'","'. $t .'","'. $t.'");';
     	//print_r($com);
      $fin=mysqli_query($conne,$com);
    //print_r($fin);
     }
     
    //header("Location:feedback.php?$vregno");
     ?>
     
     <a href="feedback.php?vregno=<?php print_r($vregno);?>"><div id="a"><h3>WELCOME <?php print_r($vregno);?></h3><p>GO TO FEEDBACK</div></a>
 
    </form>
     </body>
     </html>
     
     <?php
    
  
  }
 }
 ?>