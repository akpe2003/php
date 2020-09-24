<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logical Expressions 2</title>
</head>
<body>
<?php
$a=4;
$b=4;
if($a > $b)
{
echo "a is larger than b";
}elseif($a == $b)
{
   echo "a is equal to b";
}
else
{
echo "b is larger than a";
}
?>
<br />
<?php
$c=1;
$d=20;
if(($a>$b) && ($c >$d))
{
    echo "a is greater than b AND ";
    echo " c is greater than d";
}
echo "<br />";
if(($a > $b) || ($c > $d))
{
    echo "a is greater than b OR ";
    echo " c is greater than d";
}else{
    echo "Neither a is greater than b or c is greater than d";
}
?>
<br />
<?php
unset($a);
 if(!isset($a)) 
 {
     $a=100;
 }
 echo $a;
?>
<br />
<?php 
    if(is_int($a))
    {
        settype($a,"string");
    }
    echo gettype($a);
?>
</body>
</html>