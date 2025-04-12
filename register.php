<?php
// Database connection parameters (replace with your actual values)
$servername = "srv1804.hstgr.io";
$database = "u126520968_poseidon";
$username = "u126520968_risdahl";
$password = "ExcoreZzz1";

// Receiving data from the registration form
$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$employee_number = $_POST['employee_number'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$organisation = $_POST['organisation'];
$department = $_POST['department'];

// Check if username or email already exists in the database
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Prepare and execute a query to check for an existing username
$stmt = $conn->prepare("SELECT * FROM users WHERE USERNAME = ? OR EMPLOYEE_NUMBER = ?");
$stmt->bind_param("ss", $login_username, $employee_number);
$stmt->execute();
$result = $stmt->get_result();

// Check if there is any matching record
if ($result->num_rows > 0) {
    // User exists with the same username or email
    echo "Username or Email already exists. Please try a different one.";
} else {
    // Hash the password before storing
    $hashed_password = password_hash($login_password, PASSWORD_DEFAULT);

    // Prepare and execute the insert query to store the new user data
    $stmt = $conn->prepare("INSERT INTO users (USERNAME, PASSWORD, FIRSTNAME, LASTNAME, EMPLOYEE_NUMBER, EMAIL, PHONE, ORGANISATION, DEPARTMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $login_username, $hashed_password, $firstName, $lastName, $employee_number, $email, $phone, $organisation, $department);
    $stmt->execute();

    header("Location: login.html");
        exit();
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
