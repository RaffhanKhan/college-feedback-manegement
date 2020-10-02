<!DOCTYPE html>
 <html>
 <head>
 	<title>FEEDBACK</title>
 	<h2 style="text-align:center;color: #763777;background-color:#FFdb58;padding: 15px">REGISTERATION</h2>
 	<style type="text/css">
 	
 		#tb{
 			border-color: #541511;
 		}
 		nav{
 			background-color: #7f452c;
 			color: #8c001a;
 			padding: 8px;
 		}
 	</style>
 	<script type="text/javascript">
 		function validate()
 		{
 			if(reg.username.value=="")
 			{
 				alert("Fill name");
 				return false;
 			}
 			else if(reg.regno.value=="")
 			{
 				alert("Fill unique REGISTERATION NO");
 				return false;
 			}
 			else if(reg.email.value=="")
 			{
 				alert("Fill email");
 				return false;
 			}
 			else if(reg.password1.value=="")
 			{
 				alert("Fill password");
 				return false;
 			}
 			else if(reg.password2.value==""&&reg.password1.value!=reg.password2.value)
 			{
 				alert("Password miss match");
 				return false;
 			}


 			return true;
 		}
 	</script>
 </head>
 <body>
 	<nav>
 		<button style="background-color:#008080 ;border:none" >Login</button>
 		<button style="background-color:#008080 ;border:none">About us</button>
 	</nav>
 	<form name="reg" method="post" action="update.php" onsubmit="return validate()"><br>
 		<center>
 		<table id="tb">
 		<tr><td>Username </td>
 		<td><input type="text" name="username"></td></tr>
 		<tr><td>Register number </td>
 		<td><input type="text" name="regno"></td></tr>
 		<tr><td>email </td>
 		<td><input type="email" name="email"></td></tr>
 		<tr><td>Password</td>
 		<td><input type="password" name="password1"></td></tr>
 		<tr><td>Conform Password </td>
 		<td> <input type="password" name="password2"></td></tr>
 		<tr><td><input type="submit" value="submit" ></td>
 		<td><input type="reset" name="reset"></td></tr>
 		</table>
 		</center>
 	</form>
 </body>
 </html>


