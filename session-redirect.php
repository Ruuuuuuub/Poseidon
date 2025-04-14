<?php
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Get org/dep values if set
    $org = $_SESSION['organisation'] ?? null;
    $dep = $_SESSION['department'] ?? null;

    // Redirect based on organisation and department
    if ($org == 1 && $dep == 1) {
        header("Location: /133aw/maint_sqd/home.php");
    } elseif ($org == 1 && $dep == 2) {
        header("Location: /133aw/333_sqd/home.php");
    } else {
        header("Location: /index.php"); // fallback if nothing matches
    }

    exit();
} else {
    // Not logged in — redirect to index or login
    header("Location: /index.php");
    exit();
}
?>