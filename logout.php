<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to index.php with a success message
header("Location: index.php?logout=1");
exit();
?>
<?php
session_start();

// Check if the logout parameter is present
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    echo '<script>alert("Successfully Logged Out!");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Your CSS and other head elements go here -->
</head>

<body>
    <!-- Your HTML content goes here -->

    <a href="logout.php">Logout</a>

    <!-- Your JavaScript and other body elements go here -->
</body>

</html>
