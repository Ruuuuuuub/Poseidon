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

    function getUsers(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM tbl_users");
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }

        return $users;
    }

    function getDeviation(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM tbl_deviations");
        while($row = $result->fetch_assoc()){
            $deviations[] = $row;
        }

        return $deviations;
    }

    function getAuthP8(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM tbl_user_authorisation_p8a");
        while($row = $result->fetch_assoc()){
            $authP8[] = $row;
        }

        return $authP8;
    }
    function getAuthBU(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM tbl_user_authorisation_bu");
        while($row = $result->fetch_assoc()){
            $authBU[] = $row;
        }

        return $authBU;
    }
    function getAuthRU(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM tbl_user_authorisation_ru");
        while($row = $result->fetch_assoc()){
            $authRU[] = $row;
        }

        return $authRU;
    }
    function getAuthLVT(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM tbl_user_authorisation_lvt");
        while($row = $result->fetch_assoc()){
            $AuthLVT[] = $row;
        }

        return $AuthLVT;
    }

    function closeDb() {
        global $conn;
        if ($conn !== null) {
            $conn->close();
            $conn = null;
        }
    }
?>