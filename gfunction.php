<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>G-Functions</title>
</head>
<body>
<?php
$bar="outside";
function say_hello5()
{
   global $bar;
   $bar="inside";
}
echo say_hello5();
echo "<br />";
echo $bar;
?>
<br />
<br />
<p></p>
<?php
$bar="outside";
function say_hello6()
{
  $bar="inside";
  return $bar;
  echo "<br />";
}
echo say_hello6();
echo "<br />";
echo $bar;
?>
</body>
</html>