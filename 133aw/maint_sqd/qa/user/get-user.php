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

// Fetch user info
$stmt = $conn->prepare("SELECT 
    u.EMPLOYEE_NUMBER,
    CONCAT(u.LASTNAME, ', ', u.FIRSTNAME) as NAME,
    u.PHONE,
    u.EMAIL,
    u.POSITION,
    p.POSITION AS POS,
    u.ADDRESS,
    u.CITY,
    u.ZIP,
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
WHERE u.EMPLOYEE_NUMBER = ?");
$stmt->bind_param("s", $employeeNumber);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit;
}

$user = $result->fetch_assoc();

// Fetch authorisation data
$authStmt = $conn->prepare("SELECT 
    a.ID,
    CONCAT(u.LASTNAME, ', ', u.FIRSTNAME) as NAME,
    a.USER_ID,
    a.CATEGORY,
    cat.CATEGORY AS CAT, 
    a.CS_MP_TT,
    auth.CS_MP_TT AS AUTH,
    a.MP_ORG,
    a.MP_DUE,
    a.CS_ORG,
    a.CS_DUE,
    a.CS_CAT_C_ORG,
    a.CS_CAT_C_DUE,
    a.QI_ORG,
    a.QI_DUE,
    a.OJT_SUPERVISOR_ORG,
    a.OJT_SUPERVISOR_DUE,
    a.ASSESSOR_ORG,
    a.ASSESSOR_DUE
FROM tbl_user_authorisation_p8a a
LEFT JOIN tbl_dropdown_category cat ON cat.ID = a.CATEGORY
LEFT JOIN tbl_dropdown_auth auth ON auth.ID = a.CS_MP_TT
LEFT JOIN tbl_users u ON u.EMPLOYEE_NUMBER = a.USER_ID
WHERE a.USER_ID = ?");
$authStmt->bind_param("s", $employeeNumber);
$authStmt->execute();
$authResult = $authStmt->get_result();

$authorisations = [];
while ($row = $authResult->fetch_assoc()) {
    $authorisations[] = $row;
}
?>