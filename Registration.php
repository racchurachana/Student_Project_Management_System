<?php
// Include database connection code here

// Define variables to store user input
$username = $email = $password = $confirm_password = $address = $course = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["username"]);
    }
    
    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email address.";
    } else {
        $email = trim($_POST["email"]);
    }
    
    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";     
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";     
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // If no validation errors, proceed with registration
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        // Hash password before saving to database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert user data into database (add your database logic here)

        // Redirect to login page
        header("location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Add your CSS styles for better look and feel here */
    </style>
</head>
<body>
    <h2>Register</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <span><?php echo $username_err; ?></span><br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
        <span><?php echo $email_err; ?></span><br>
        <input type="password" name="password" placeholder="Password">
        <span><?php echo $password_err; ?></span><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <span><?php echo $confirm_password_err; ?></span><br>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</body>
</html>
