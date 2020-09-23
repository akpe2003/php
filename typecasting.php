<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP SERIES 3</title>
</head>
<body>
<?php 
$var1="2 brown foxes";
$var2= $var1 + 3;
echo $var2;
?>
<br />
<?php
echo gettype($var1);
echo "<br />";
echo gettype($var2);
echo "<br />";
settype($var2,"string");
echo gettype($var2);
echo "<br />";
$var3= (int) $var1;
echo gettype($var3);
?>
</body>
</html>