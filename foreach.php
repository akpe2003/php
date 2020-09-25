<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>FOR EACH LOOP</title>
</head>
<body>
<?php
$ages=array(4,7,15,24,22,67,71,83,94);
foreach($ages as $age){
    echo $age;
    echo "<br />";
}
?>
<br />
<?php
$names=array("Michael", "Mitchell","George","Cornel", "Beckett","Jones","Singer");
foreach($names as $name){
 echo $name;
 echo "<br />";
}
?>
<br />
<?php
foreach($ages as $position=>$age)
{
    echo $position . " : " . $age;
    echo "<br />";
}
?>
<br />
<?php
$details=array(
     "id"=>1,
     "username"=>"click_one@yahoo.ca",
     "password"=>"secret"
     );
     foreach($details as $key=>$value){
         echo $key. " : " .$value;
         echo "<br />";
     }
?>
</body>
</html>