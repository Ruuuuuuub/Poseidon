<?php
// Show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// DB credentials
$servername = "srv1804.hstgr.io";
$database = "u126520968_poseidon";
$username = "u126520968_risdahl";
$password = "ExcoreZzz1";

// Get POST data
$login_username = $_POST['login_username'] ?? null;
$login_password = $_POST['login_password'] ?? null;
$firstName = $_POST['firstName'] ?? null;
$lastName = $_POST['lastName'] ?? null;
$employee_number = $_POST['employee_number'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;

// Check for missing data
if (!$login_username || !$login_password) {
    die("Username and password are required.");
}

// DB connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Prepare and insert
$stmt = $conn->prepare("INSERT INTO users (USERNAME, PASSWORD, FIRSTNAME, LASTNAME, EMPLOYEE_NUMBER, EMAIL, PHONE) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $login_username, $login_password, $firstName, $lastName, $employee_number, $email, $phone);

if ($stmt->execute()) {
    echo "User added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

// Check for missing data
if (!$login_username ||!$login_password || !$firstName || !$lastName || !$employee_number || !$email || !$phone) {
    die("Fill in required fields");
}