<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require "config.php";

$conn = null;

function dbConnect() {
    global $servername, $username, $password, $database, $conn;

    if ($conn === null) {
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            return false;
        }
    }

    return $conn;
}

function getUsers() {
    $conn = dbConnect();
    if (!$conn) return [];

    $users = [];
    $result = $conn->query("SELECT 
    u.EMPLOYEE_NUMBER,
    CONCAT(u.LASTNAME, ', ', u.FIRSTNAME) as NAME,
    u.PHONE,
    u.EMAIL,
    u.POSITION,
    p.POSITION AS POS,
    CONCAT_WS(', ', 
    NULLIF(u.ADDRESS, ''), 
    CONCAT_WS(' ', NULLIF(u.CITY, ''), NULLIF(u.ZIP, ''))
) as FULL_ADDRESS

    FROM tbl_users u
    LEFT JOIN tbl_position p ON p.ID = u.POSITION");

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    return $users;
}

function getDeviation() {
    $conn = dbConnect();
    if (!$conn) return [];

    $deviations = [];
    $result = $conn->query("SELECT * FROM tbl_deviations");
    while ($row = $result->fetch_assoc()) {
        $deviations[] = $row;
    }

    return $deviations;
}

function getAuthP8() {
    $conn = dbConnect();
    if (!$conn) return [];

    $authP8 = [];
    $result = $conn->query("SELECT 
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
        LEFT JOIN tbl_users u ON u.EMPLOYEE_NUMBER  = a.USER_ID");
    while ($row = $result->fetch_assoc()) {
        $authP8[] = $row;
    }

    return $authP8;
}

function getAuthBU() {
    $conn = dbConnect();
    if (!$conn) return [];

    $authBU = [];
    $result = $conn->query("SELECT * FROM tbl_user_authorisation_bu");
    while ($row = $result->fetch_assoc()) {
        $authBU[] = $row;
    }

    return $authBU;
}

function getAuthRU() {
    $conn = dbConnect();
    if (!$conn) return [];

    $authRU = [];
    $result = $conn->query("SELECT * FROM tbl_user_authorisation_ru");
    while ($row = $result->fetch_assoc()) {
        $authRU[] = $row;
    }

    return $authRU;
}

function getAuthLVT() {
    $conn = dbConnect();
    if (!$conn) return [];

    $authLVT = [];
    $result = $conn->query("SELECT * FROM tbl_user_authorisation_lvt");
    while ($row = $result->fetch_assoc()) {
        $authLVT[] = $row;
    }

    return $authLVT;
}

    function closeDb() {
        global $conn;
        if ($conn !== null) {
            $conn->close();
            $conn = null;
        }
    }
?>