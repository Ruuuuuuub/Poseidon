<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include('config/login-config.php');

$servername = "srv1804.hstgr.io";
$database = "u126520968_poseidon";
$username = "u126520968_risdahl";
$password = "ExcoreZzz1";

$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT PASSWORD, ORGANISATION, DEPARTMENT, APPROVED, ROLE FROM users WHERE USERNAME = ?");
$stmt->bind_param("s", $login_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['PASSWORD'];
    $organisation = $row['ORGANISATION'];
    $department = $row['DEPARTMENT'];
    $approved = $row['APPROVED'];
    $role = $row['ROLE']; // Assuming you want to store the user's role as well

    // Verify the password with the stored hash
    if (password_verify($login_password, $hashed_password)) {
        if (isset($_POST['remember_me'])) {
            // Save the username in a cookie for 30 days
            setcookie('remembered_username', $_POST['login_username'], time() + (30 * 24 * 60 * 60), "/");
        } else {
            // Remove the cookie if checkbox is not checked
            setcookie('remembered_username', '', time() - 3600, "/");
        }
        
        if ($approved == 1) {
            // Set session variables
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $login_username;
            $_SESSION['role'] = $role; // You can also set other session variables here if needed
            $_SESSION['organisation'] = $organisation;
            $_SESSION['department'] = $department;

            // Redirect based on organisation and department
            if ($organisation == 1 && $department == 1) {
                header("Location: ".$MAINTENANCE);
            } elseif ($organisation == 1 && $department == 2) {
                header("Location: ".$THREE_SQUADRON);
            } else {
                header("Location: ".$FRONT_PAGE); // Default page for other combinations
            }
            exit(); // Always exit after redirect

        } else {
            // If the user is not approved, redirect to the contact page or show an error
            header("Location: ".$NOT_APPROVED);
            exit();
        }

    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "User not found.";
}

$stmt->close();
$conn->close();
?>