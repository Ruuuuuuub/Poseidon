<?php
$servername = "srv1804.hstgr.io";
$database = "u126520968_poseidon";
$username = "u126520968_risdahl";
$password = "ExcoreZzz1";

// Get posted login values
$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Prepare and execute query to fetch user info
$stmt = $conn->prepare("SELECT PASSWORD, ORGANISATION, DEPARTMENT, APPROVED FROM users WHERE USERNAME = ?");
$stmt->bind_param("s", $login_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['PASSWORD'];
    $organisation = $row['ORGANISATION'];
    $department = $row['DEPARTMENT'];
    $approved = $row['APPROVED'];

    if (password_verify($login_password, $hashed_password)) {

        // ✅ Check if account is approved
        if ($approved == 1) {
            // ✅ Approved → route based on org/dep
            if ($organisation == 1 && $department == 1) {
                header("Location: /133aw/maint_sqd/home.html");
            } elseif ($organisation == 1 && $department == 2) {
                header("Location: /133aw/333_sqd/home.html");
            } else {
                header("Location: index.html");
            }
        } else {
            header("Location: not-approved.html");
        }

        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "User not found.";
}

// Close
$stmt->close();
$conn->close();
?>
