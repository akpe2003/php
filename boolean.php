<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Boolean and Null</title>
</head>
<body>
<?php
$bool1=true;
$bool2=false;
?>
$bool1: <?php echo $bool1; ?><br />
$bool2: <?php echo $bool2; ?>
<br />
<?php
$var1=3;
$var2="cat";
$var4=null;
?>
Var 1 is set:<?php echo isset($var1); ?>
<br />
var 2 is set:<?php echo isset($var2); ?>
<br />
var 3 is set:<?php echo isset($var3); ?>
<br />
<?php unset($var1); ?>
Var 1 is set:<?php echo isset($var1); ?>
<br />
var 2 is set:<?php echo isset($var2); ?>
<br />
var 3 is set:<?php echo isset($var3); ?>
<br />
<?php echo empty($var1); ?>
<br />
<?php echo empty($var4); ?>
</body>
</html>