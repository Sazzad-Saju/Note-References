<?php
// Initialize the error variable
$emailErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use filter_input to get and validate the email input
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Check if the email is valid
    if ($email === false) {
        $emailErr = "Please re-enter a valid email address";
    } else {
        // Process the valid email, e.g., save it to the database or perform other actions
        echo "Email is valid: " . $email;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation Example</title>
</head>
<body>

<!-- Simple HTML form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span style="color: red;"><?php echo $emailErr; ?></span>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
