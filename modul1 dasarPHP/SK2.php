<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en"> 
<head> 
<title>Generate Table</title> 
</head>

<body> 
<?php


function BuatTabel($baris, $kolom) 
{ 
print("<h2 align=\"center\">Tabel $baris baris dan $kolom kolom</h2>"); 
print("<table align=\"center\" width = \"80%\" border=\"1\">\n"); 

for($b = 0; $b < $baris; $b++) { 
print("<tr>\n"); 

for($k = 0; $k < $kolom; $k++) { 
print("<td height=\"30\" width=\"10%\"></td>\n"); 
} 
print("</tr>\n"); 
} 
print("</table>\n"); 
} 
BuatTabel(3,4); //memanggil fungsi BuatTabel

?> 
</body> 
</html>