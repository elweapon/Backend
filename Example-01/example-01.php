<?php
$name = "Hello World!";
define("SITE_TITLE", "PHP Example Site");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1><?php echo SITE_TITLE ?></h1>
<h4><?php echo "$name"; ?></h4>

<?php 
echo strlen($name) . "<br>";
echo strtolower($name) . "<br>";
echo strtoupper($name) . "<br>";
echo strrev($name) . "<br>";
?>

</body>
</html>

