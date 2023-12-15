<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>

<?php
session_start();
include "../Database/database.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["YEmail"];
    $newPassword = $_POST["Forgot"];

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the email exists
        $checkStmt = $conn->prepare("SELECT * FROM users WHERE Email = :email");
        $checkStmt->bindParam(':email', $email);
        $checkStmt->execute();

        if ($checkStmt->rowCount() > 0) {
            // Email exists, update the password

            $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $updateStmt = $conn->prepare("UPDATE users SET Password = :newPassword WHERE Email = :email");
            $updateStmt->bindParam(':newPassword', $newPassword);
            $updateStmt->bindParam(':email', $email);
            $updateStmt->execute();

             // Redirect with a query parameter
             header("Location: ../Pages/LogIn.html?passwordUpdated=1");
             exit();
         } else {
             echo "Email not found. Please enter a valid email address.";
         }
     } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
     }
 }
 ?>
