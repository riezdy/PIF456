<html>
<head>
<title>Pass By Referance</title>
</head>
<body>
<?php
function jumlah(&$nilai) {
$nilai++;
}
$input=5;
jumlah($input);
echo $input;
?>
</body>
</html>