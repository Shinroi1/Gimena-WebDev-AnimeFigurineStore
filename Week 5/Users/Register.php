<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="container">
        <?php
        session_start();
        include "../Database/database.php"; // Include your database connection file

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $Username = $_POST["Username"];
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];

            try {
                $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Check if the username already exists
                $checkStmt = $conn->prepare("SELECT * FROM users WHERE Email = :Email");
                $checkStmt->bindParam(':Email', $Email);
                $checkStmt->execute();

                if ($checkStmt->rowCount() > 0) {
                    echo "Email already exists!";
                } else {
                    // Hash the password for secure storage
                    $HashedPassword = password_hash($Password, PASSWORD_DEFAULT);

                    $insertStmt = $conn->prepare("INSERT INTO users (Username, Email, Password) VALUES (:username, :email  ,:password)");
                    $insertStmt->bindParam(':username', $Username);
                    $insertStmt->bindParam(':email', $Email);
                    $insertStmt->bindParam(':password', $HashedPassword);
                    $insertStmt->execute();

                    $_SESSION['username'] = $Username; // Store username in session for later use
                    header("Location: ../pages/LogIn.html"); // Redirect to menu page after successful registration
                    exit();
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        ?>
        <form action="../pages/Register.html">
            <button type="submit">Back</button>
        </form>
    </div>

</body>

</html>
