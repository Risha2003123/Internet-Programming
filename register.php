<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $role = $_POST["role"];
    $qualification = $_POST["qualification"];
    $company_details = isset($_POST["company_details"]) ? $_POST["company_details"] : "";
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security

    // Replace with your MySQL server details
    $servername = "127.0.0.1"; 
    $username_db = "root"; 
    $password_db = ""; 
    $dbname = "jobapplication"; 

    try {
        // Create a new PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_db, $password_db);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert user details into the 'users' table
        
        // Insert login details into the 'userlogin' table
        $loginSql = "INSERT INTO adminlogin (username, password) VALUES (:username, :password)";
        
        $loginStmt = $conn->prepare($loginSql);
        $loginStmt->bindParam(':username', $username);
        $loginStmt->bindParam(':password', $password);

        $loginStmt->execute();

        echo "New record created successfully";

        // Redirect to login page
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>
