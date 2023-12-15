<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
<?php
        include "../Database/database.php";
        session_start();
        
         //Check if the user is logged in
        if (isset($_SESSION['Username'])) {
            $Username = $_SESSION['Username'];
            echo "<p class = 'color'>Welcome, $Username!</p>";
        } else {
            // Redirect to the login page if not logged in
            header("Location: ../Pages/LogIn.html");
            exit();
        }
?>
</body>
</html>
