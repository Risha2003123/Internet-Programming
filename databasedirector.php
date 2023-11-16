<?php
// Include your database connection file
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input data
    $companyName = htmlspecialchars(trim($_POST["company_name"]));
    $positionRequired = htmlspecialchars(trim($_POST["position_required"]));
    $vacancies = intval($_POST["vacancies"]);
    $qualificationRequired = htmlspecialchars(trim($_POST["qualification_required"]));
    $experienceRequired = htmlspecialchars(trim($_POST["experience_required"]));

    // Process file uploads
    $uploadedFiles = [];
    if (!empty($_FILES['uploaded_files']['name'][0])) {
        $uploadsDirectory = 'uploads/';
        foreach ($_FILES['uploaded_files']['name'] as $key => $value) {
            $uploadFile = $uploadsDirectory . basename($value);
            move_uploaded_file($_FILES['uploaded_files']['tmp_name'][$key], $uploadFile);
            $uploadedFiles[] = basename($value);
        }
    }

    // Prepare and execute SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO director (company_name, position_required, vacancies, qualification_required, experience_required, uploaded_file) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $companyName, $positionRequired, $vacancies, $qualificationRequired, $experienceRequired, json_encode($uploadedFiles));
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Redirect to the view page
    header("Location: viewvacancy.php");
    exit();
} else {
    // If the request method is not POST, redirect to the form page
    header("Location: your_form_page.php");
    exit();
}
?>
