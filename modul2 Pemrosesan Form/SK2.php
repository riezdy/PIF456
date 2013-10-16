<html>
<head>
	<title>Identifikasi Metode</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Pilih Pekerjaan Anda :
	<br/>
	<input type="checkbox" name="kerja1" value="PNS" checked/>PNS <br/>
	<input type="checkbox" name="kerja2" value="ABRI"/>ABRI <br/>
	<input type="checkbox" name="kerja3" value="Swasta"/>Swasta <br/>
	<input type="checkbox" name="kerja4" value="Artis"/>Artis <br/>
	<input type="submit" value="Submit"/>
</form>

<?php
	if(isset($_POST['kerja1'])) {
	echo $_POST['kerja1'];
	echo "<br/>";
	}
	
	if(isset($_POST['kerja2'])) {
	echo $_POST['kerja2'];
	echo "<br/>";
	}

	if(isset($_POST['kerja3'])) {
	echo $_POST['kerja3'];
	echo "<br/>";
	}
	
	if(isset($_POST['kerja4'])) {
	echo $_POST['kerja4'];
	echo "<br/>";
	}
?>

</body>
</html>