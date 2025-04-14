<?php
    require "config.php";

    function dbConnect(){
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error != 0) {
            return FALSE;
        } else {
            return $conn;
        }
    }

    function getUsers(){
        $conn = dbConnect();
        $result = $conn->query("SELECT USERNAME FROM users");
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }

        return $users;
    }