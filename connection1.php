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

    // Check if the provided username and password are 'admin'
    if ($username === 'abc' && $password === 'abc') {
        header("location: adminpage.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "<script language='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
        die();
    }
}

?>
