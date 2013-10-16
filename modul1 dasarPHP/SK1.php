<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Demo Time</title>
</head>
<body>

<?php

function tampil($data)

{

$jumlah=count($data);

$met=$data[rand(0,$jumlah)];

return ($met);

}

function salam()

{

$pagi=array("Selamat Pagi"," Pagi","Good Morning","Morning","Koniciwa");

$siang=array("Selamat Siang"," Siang","Good Day","Met Siang");

$sore=array("Selamat Sore","Sore","Good Afternoon");

$malam=array("Selamat Sore","Selamat Malam","Met Malam","Good Evening","Konbanwa","Nice Evening");

$greet=date('G');

if ($greet>=0 && $greet<10)

{

echo tampil($pagi);

}

elseif ($greet>=10 && $greet<16)

{

echo tampil($siang);

}

elseif ($greet>=16 && $greet<19)

{

echo tampil($sore);

}

else

{

echo tampil($malam);

}

}

?>

<html>

<head>

<title>MENAMPILKAN SALAM</title>

</head>

<body>

<h1><?php salam(); ?></h1>

</body>

</html>