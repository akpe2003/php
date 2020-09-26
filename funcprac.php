<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Functions Practise</title>
</head>
<body>
<?php
function say_hello(){
    echo "Hello World!";
}
say_hello();
echo "<br />";
function say_hello2($name,$greeting,$action){
    echo "So ".$greeting. " to you, " .$name. " please to do this: ".$action;
}
say_hello2("Ugono Akpevweoghene", "Good Morning", "Move over to Hamilton, Canada.");
?>
<br />
<?php
function addition($num1,$num2)
{
    $sum=$num1+$num2;
    $sub=$num1-$num2;
    $details=array($sum,$sub);
    return $details;
}
$together=addition(6,5);
echo "<br />";
echo $together[0];
echo "<br />";
echo $together[1];
?>
</body>
</html>