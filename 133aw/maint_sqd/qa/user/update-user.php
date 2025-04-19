<?php
require '../../../../php/function.php'; // where dbConnect() lives
$conn = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Get the values from the form
    $phone = $_POST['PHONE'];
    $email = $_POST['EMAIL'];
    $address = $_POST['ADDRESS'];
    $city = $_POST['CITY'];
    $zip = $_POST['ZIP'];
    $pos = $_POST['POS'];
    $org = $_POST['ORG'];
    $dep = $_POST['DEP'];
    $approved = isset($_POST['APPROVED']) ? 1 : 0;
    $emp = $_POST['EMPLOYEE_NUMBER'];

    // 2. Prepare the update query
    $stmt = $conn->prepare("
    UPDATE tbl_users 
    SET 
        PHONE = ?, 
        EMAIL = ?, 
        ADDRESS = ?, 
        CITY = ?, 
        ZIP = ?, 
        POSITION = ?, 
        ORGANISATION = ?, 
        DEPARTMENT = ?,
        APPROVED = ?
    WHERE EMPLOYEE_NUMBER = ?
");


    // 3. Bind and execute
    $stmt->bind_param("sssssssssi", $phone, $email, $address, $city, $zip, $pos, $org, $dep, $approved, $emp);


    if ($stmt->execute()) {
        // 4. Redirect back or show a success message
        header("Location: user.php?id=" . urlencode($emp));
        exit;
    } else {
        echo "Update failed: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>