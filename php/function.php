<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
    require "config.php";

    function dbConnect(){
        global $servername, $username, $password, $database;
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error != 0) {
            return FALSE;
        } else {
            return $conn;
        }
    }

    function getUsers(){
        $conn = dbConnect();
        if (!$conn) {
            return [];
        }

        $result = $conn->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }

        return $users;
    }
?>