<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Functions</title>
</head>
<body>
<?php
function say_hello()
{
  echo "Hello World! <br />";
}
say_hello();
function say_hello2($word)
{
 echo "Hello " .$word. "!";
 echo "<br />";
}
say_hello2("World");
say_hello2("Everyone");
?>
</body>
</html>