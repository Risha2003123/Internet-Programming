<?php

include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    $credentials_matched = false;

    foreach ($users as $user) {
        if (($user['username'] == $username) &&
            ($user['password'] == $password)) {
            // Redirect if credentials match
            header("location: directpage.php");
            exit(); // Make sure to exit after redirection
        }
    }

    // If none of the users match, show the "WRONG INFORMATION" alert
    echo "<script language='javascript'>";
    echo "alert('WRONG INFORMATION')";
    echo "</script>";
    die();
}

?>
