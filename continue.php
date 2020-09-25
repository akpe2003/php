<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Continue and Break</title>
</head>
<body>
<?php 
for($x=0; $x<=10; $x++){
    if($x==5){
    continue;
    }
    echo $x;
    echo "<br />";
}
?>
<br />
<?php 
for($x=0; $x<=10; $x++){
    if($x==5){
    break;
    }
    echo $x;
    echo "<br />";
}
?>
</body>
</html>