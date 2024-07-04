<?php
// Variable to check
$email = "john.doe@example.com";

// filter_input($email, FILTER_VALIDATE_EMAIL) //error on this line
// filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL); //valid when server has post req

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

//validate ip address
$ip_address = "192.168.0.1";
if(filter_var($ip_address, FILTER_VALIDATE_IP)){
  echo "$ip_address is a valid IP address";
} else {
  echo "$ip_address is not a valid IP address";
}
?>