<html>
<head>
	<title>Studi Kasus 1</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hobby
	<input type="radio" name="hobby" value="Menyanyi"/>Menyanyi
	<input type="radio" name="hobby" value="Wanita" checked/>Olahraga <br/>
	<input type="submit" value="ok"/>
</form>

<?php
if(isset($_POST['jk'])) {
echo $_POST['jk'];
}
?>

</body>
</html>