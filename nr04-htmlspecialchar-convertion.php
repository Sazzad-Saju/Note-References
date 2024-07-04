<?php
$originalString = "Hello, <b>world</b>!";
$escapedString = htmlspecialchars($originalString);

echo $escapedString;
?>