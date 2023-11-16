<?php
// Start the session (assuming you use session for authentication)
session_start();



// Include connection.php or any other necessary files
// include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director's Homepage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #34495e;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #2c3e50;
        }

        #welcome {
            background-color: #2ecc71;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        #content {
            padding: 20px;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>
    <h1>Welcome to Your Director's Homepage</h1>
    
    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="applied_users.php">Check Applied Users</a></li>
        <li><a href="#" onclick="document.getElementById('postJobForm').style.display='block'">Post Job</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <div id="welcome">
        <h2>Welcome, Director!</h2>
    </div>

    <div id="content">
        <!-- Your homepage content goes here -->
    </div>

    <?php
    // Include additional PHP code or functions as needed
    ?>

</body>
</html>
