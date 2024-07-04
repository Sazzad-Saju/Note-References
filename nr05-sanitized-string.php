<?php
// Original string with potentially harmful characters
$originalString = '<script>alert("Hello, this is a malicious script!");</script>';

// Sanitize the string using FILTER_SANITIZE_STRING
//FILTER_SANITIZE_STRING is deprecated
$sanitizedString = filter_var($originalString, FILTER_SANITIZE_STRING);
// Output the sanitized string
echo $sanitizedString;
echo "\n";

//using htmlspecialchars
$sanitizedStr2 = htmlspecialchars($originalString);
echo $sanitizedStr2;
echo "\n";

$sanitizedStr3 = strip_tags($originalString);
echo $sanitizedStr3;
?>
