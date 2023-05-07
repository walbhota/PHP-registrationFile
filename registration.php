<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform data validation (you can customize this according to your needs)
    if (empty($username) || empty($email) || empty($password)) {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // All data is valid, proceed with registration
        // TODO: Perform additional checks (e.g., check if username or email already exists)

        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // TODO: You can add code here to handle the registration logic without a database

        // Display success message
        $success = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>

    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

    <?php if (isset($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>