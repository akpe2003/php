<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Functions2</title>
</head>
<body>
<?php
function say_hello($word){
  echo "Hello " .$word. "!";
}
$name="John Doe";
say_hello($name);
echo "<br />";
function say_hello3($greeting,$target,$punct)
{
     echo $greeting. ", " .$target. $punct;
}
say_hello3("Hello","Ugono Akpevweoghene Ogheneowho","!");
?>
<br />
<?php
function addition($num1,$num2){
    $sum=$num1+$num2;
    return $sum;
}
echo addition(100,16);
?>
</body>
</html>