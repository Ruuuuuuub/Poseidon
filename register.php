<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$servername = "srv1804.hstgr.io";
$database = "u126520968_poseidon";
$username = "u126520968_risdahl";
$password = "ExcoreZzz1";

include('config/register-config.php');

$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$user_id = $_POST['user_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$organisation = $_POST['organisation'];
$department = $_POST['department'];

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM users WHERE USERNAME = ? OR USER_ID = ?");
$stmt->bind_param("ss", $login_username, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Username or Email already exists. Please try a different one.";
} else {
    $hashed_password = password_hash($login_password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (USERNAME, PASSWORD, FIRSTNAME, LASTNAME, USER_ID, EMAIL, PHONE, ORGANISATION, DEPARTMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $login_username, $hashed_password, $firstName, $lastName, $user_id, $email, $phone, $organisation, $department);
    $stmt->execute();

    header("Location: ".$NOT_APPROVED);
        exit();
}
$stmt->close();
$conn->close();
?>