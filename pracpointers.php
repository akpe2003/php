<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Practise of Array Pointers</title>
</head>
<body>
    <?php
    $numbers=array(0,1,2,3,4,5,6,7,8,9);
    echo "1: " . current($numbers);
    next($numbers);
    echo "<br />";
    echo "2: " . current($numbers);
    next($numbers);
    echo "<br />";
    echo "3: " . current($numbers);
    echo "<br />";
    next($numbers);
    echo "4: " . current($numbers);
    echo "<br />";
    while($number=current($numbers))
    {
        echo $number;
        echo "<br />";
        next($numbers);
    }
     ?>
    </body>
</html>
