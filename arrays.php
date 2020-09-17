<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Arrays</title>
</head>
<body>
<?php
$array1=array(4,8,15,16,23,42);
echo $array1[1];
echo "<br />";
$names=array("George","Charly","Sandra");
echo $names[2];
echo "<br />";
$array2=array(6, "fox","dog",array("x","y","z"));
echo $array2[2];
echo "<br />";
echo $array2[3][1];
echo "<br />";
//the us of an associative array
$array4=array("first_name"=>"Akpevweoghene", "middle_name"=>"Ogheneowho", "last_name"=>"Ugono");
echo $array4["first_name"]. " " .$array4["middle_name"] ." " .$array4["last_name"];
$array4["firstname"]="Larry";
echo "<br />";
echo print_r($array4);
/*echo "<br />";
echo $array4["middle_name"];
echo "<br />";
echo $array4["last_name"];*/
?>
</body>
</html>