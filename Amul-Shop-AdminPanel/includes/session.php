<?php
session_start();

// Check if user is logged in
function checkLogin() {
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: login.php');
        exit();
    }
}

// Check if user is admin
function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

// Get current user info
function getCurrentUser() {
    return [
        'username' => $_SESSION['username'] ?? '',
        'role' => $_SESSION['role'] ?? ''
    ];
}
?>
