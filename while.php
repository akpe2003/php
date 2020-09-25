<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>PHP SERIES 4</title>
</head>
<body>
<?php
//working with a while loop
$x=0;
while($x<=10){
    echo $x;
    echo "<br />";
    $x++;
} 
?>
<br />
<?php
 $x=0;
 while($x <= 10){
     if($x==5){
         echo "FIVE";
     }else{
        echo $x;
     }
     echo "<br />";
     $x++;
    }
?>
</body>
</html>