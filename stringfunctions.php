<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Series4, String Functions!</title>
</head>
<body>
<?php      
$firststring="The quick brown fox";
$secondstring=" jumped over the lazy dog";
?>
<?php
$thirdstring=$firststring;
$thirdstring .=$secondstring;
echo $thirdstring; 
echo "<br />";
?>
<?php echo strtolower($thirdstring); ?><br />
<?php echo strtoupper($thirdstring); ?><br />
<?php echo ucfirst($thirdstring); ?><br />
<?php echo ucwords($thirdstring); ?><br />
</body>
</html>