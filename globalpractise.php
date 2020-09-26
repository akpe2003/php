<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="en">
<title>Global Practise</title>
</head>
<body>
<?php
$bar="outside";
function foo()
{
   global $bar;
   $bar="inside";
   echo $bar;
   echo "<br />";
}
foo();
echo $bar;
?>
<br />
<?php
$bar="outside";
function foo2()
{
   $bar="inside";
   return $bar;
   echo "<br />";
}
echo foo2();
echo "<br />";
echo $bar;
?>
</body>
</html>