<?php
// session_functions.php

session_start();

// Function to check if user is logged in
function isLoggedIn() {
    if (isLoggedIn()) {
        header("Location: Q5.php");
        exit();
    }
}
// Function to redirect to login page if user is not logged in
function redirectToLogin() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}
?>


