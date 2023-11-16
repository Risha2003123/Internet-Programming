<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables to hold form data
$companyName = $directorName = $gender = $dob = $address = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = test_input($_POST['companyName']);
    $directorName = test_input($_POST['directorName']);
    $gender = test_input($_POST['gender']);
    $dob = test_input($_POST['dob']);
    $address = test_input($_POST['address']);
}

// HTML for profile page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director's Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #profileContainer {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #111;
        }

        #output {
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Welcome, Director!</h1>

    <div id="profileContainer">
        <h2>Your Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="companyName">Company Name:</label>
            <input type="text" name="companyName" id="companyName" required>

            <label for="directorName">Director Name:</label>
            <input type="text" name="directorName" id="directorName" required>

            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" required>

            <label for="dob">DOB:</label>
            <input type="date" name="dob" id="dob" required>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>

            <input type="submit" value="Save Profile">
        </form>

        <?php
        // Display entered information
        if ($companyName || $directorName || $gender || $dob || $address) {
            echo "<div id='output'>";
            echo "<h3>Your Profile Information:</h3>";
            echo "<p><strong>Company Name:</strong> $companyName</p>";
            echo "<p><strong>Director Name:</strong> $directorName</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>DOB:</strong> $dob</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
