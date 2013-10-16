<html>
<head> 
   <title>Menu Login</title> 
 		<script type="text/javascript">			
		function cekLogin(){
		if (login.nama.value == "")
		{
		alert("Silahkan Isi Username Anda!");
		return false;
		}
		if (login.password.value == "")
		{
		alert("Silahkan Isi Password Anda!");
		return false;
		}
		else
		return true; 
		}
		</script>
</head> 
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"; align="center">
	FORM LOGIN
</form>

<table width="300" align='center'> 
  <form id="login" method="post" action="proses.php" onsubmit="return cekLogin();"> 
   		<tr>		
		<td>Username</td>
		<td>: </td>
		<td><input type="text" name="nama" id="nama" placeholder=" " /></td>
		</tr>
		<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" id="password" name="password" placeholder=" " /></td> 	
		</tr>
		<tr>	  
		<td></td>
		<td><input type="submit" name="submit" value="Login" /></td>
		</tr>
  </form>
  
</body> 
</html> 
