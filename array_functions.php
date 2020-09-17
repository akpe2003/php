<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Array Functions</title>
</head>
<body>
<?php
$array1=array(4,8,15,16,23,42);
echo count($array1);
echo "<br />";
echo max($array1);
echo "<br />";
echo min($array1);
echo "<br />";
?>
<?php
echo "<br />";
sort($array1);
print_r($array1);
?>
<br />
<?php
rsort($array1);
print_r($array1);
?>
<br />
<?php $string=implode("/",$array1); 
echo $string;
?>
<br />
<?php
$array1=array(4,8,15,16,23,42);
echo $now=in_array(8,$array1);
?>
</body>
</html>