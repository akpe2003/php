<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Return Values</title>
</head>
<body>
<?php
function addition($num1,$num2)
{
     $sum=$num1+$num2;
     return $sum;
}
echo addition(100,234);
?>
<br />
<?php
function number_details($num1,$num2)
{
   $sum=$num1+$num2;
   $subtract=$num1-$num2;
   $result=array($sum,$subtract);
   return $result;
}
$see_mee=number_details(10,5);
echo $see_mee[0];
echo "<br />";
echo $see_mee[1];
?>
</body>
</html>