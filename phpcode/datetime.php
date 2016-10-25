<!DOCTYPE html>
<html>
<body>

<?php

$url = GET['url'];
$ip = gethostbyname($url);

echo "<pre>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");




?>

</body>
</html>
