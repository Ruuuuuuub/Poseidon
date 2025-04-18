<?php require "../../../../php/function.php";

if (!isset($_GET['id'])) {
    echo "User ID not provided.";
    exit;
}

$employeeNumber = $_GET['id'];
$conn = dbConnect();

if (!$conn) {
    echo "Database connection failed.";
    exit;
}

$stmt = $conn->prepare("SELECT 
    u.EMPLOYEE_NUMBER,
    CONCAT(u.LASTNAME, ', ', u.FIRSTNAME) as NAME,
    u.PHONE,
    u.EMAIL,
    u.POSITION,
    p.POSITION AS POS,
    CONCAT_WS(', ', 
    NULLIF(u.ADDRESS, ''), 
    CONCAT_WS(' ', NULLIF(u.CITY, ''), NULLIF(u.ZIP, ''))) as FULL_ADDRESS,
    u.ORGANISATION,
    o.ORGANISATION AS ORG,
    u.DEPARTMENT,
    d.DEPARTMENT AS DEP,
    u.USER_CREATED,
    u.LAST_LOGIN,
    u.APPROVED
    FROM tbl_users u
    LEFT JOIN tbl_position p ON p.ID = u.POSITION
    LEFT JOIN organisation o ON o.ID = u.ORGANISATION
    LEFT JOIN department d ON d.ID = u.DEPARTMENT
    WHERE EMPLOYEE_NUMBER = ?");
$stmt->bind_param("s", $employeeNumber);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit;
}

$user = $result->fetch_assoc();
?>