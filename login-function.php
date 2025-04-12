<?php
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

        if ($approved == 1) {
            if ($organisation == 1 && $department == 1) {
                header("Location: /133aw/maint_sqd/home.php");
            } elseif ($organisation == 1 && $department == 2) {
                header("Location: /133aw/333_sqd/home.php");
            } else {
                header("Location: index.php");
            }
        } else {
            header("Location: not-approved.php");
        }

        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "User not found.";
}
$stmt->close();
$conn->close();
?>
