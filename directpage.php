<?php
include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to post a job without a specific user ID
function postJob($conn, $companyName, $position, $qualification, $vacancy, $experience) {
    $sql = "INSERT INTO director (company_name, position, qualification, vacancy, experience)
            VALUES ( '$companyName', '$position', '$qualification', '$vacancy', '$experience')";

    if ($conn->query($sql) === TRUE) {
        echo "Job posted successfully!";
        header("Location: homepage.php"); // Redirect to homepage.php
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . implode(", ", $conn->errorInfo());
    }
}

// HTML for director's page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director's Page</title>
    <style>
        body {
            background-color: lightgreen;
            background-image: url(image3.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            img{
                opacity:0.3;
            }
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
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
        }

        li a:hover {
            background-color: #111;
        }

        #postJobForm {
            display: none;
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 100%;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="number"],
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
    </style>
</head>
<body>
    <h1>Welcome, Director!</h1>
    
    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="applied_users.php">Check Applied Users</a></li>
        <li><a href="#" onclick="document.getElementById('postJobForm').style.display='block'">Post Job</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <div id="postJobForm">
        <h2>Post a Job</h2>
        <form action="" method="post">
            Director id: <input type="text" name="ID" required><br>
            Company Name: <input type="text" name="companyName" required><br>
            Position: <input type="text" name="position" required><br>
            Qualification: <input type="text" name="qualification" required><br>
            Vacancy: <input type="number" name="vacancy" required><br>
            Experience: <input type="text" name="experience" required><br>
            <input type="submit" name="postJob" value="Post Job">
        </form>
    </div>

    <?php
    // Handle form submission
    if (isset($_POST['postJob'])) {
        $companyName = test_input($_POST['companyName']);
        $position = test_input($_POST['position']);
        $qualification = test_input($_POST['qualification']);
        $vacancy = test_input($_POST['vacancy']);
        $experience = test_input($_POST['experience']);

        postJob($conn, $companyName, $position, $qualification, $vacancy, $experience);
    }

    // Close the database connection
    $conn = null;
    ?>
</body>
</html>
