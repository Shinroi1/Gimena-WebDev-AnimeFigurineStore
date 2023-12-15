<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☕ Deleting Order</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="container">
        <?php
        include "../Database/database.php";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Check if the order_id is set and not empty
            if (isset($_POST["OrderID"]) && !empty($_POST["OrderID"])) {
                $OrderID = $_POST["OrderID"];

                try {
                    // Open the database connection
                    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
                    // Set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Prepare and execute the deletion query
                    $stmt = $conn->prepare("DELETE FROM orders WHERE OrderID = :OrderID");
                    $stmt->bindParam(':OrderID', $OrderID);
                    $stmt->execute();

                    // Check if any rows were affected
                    if ($stmt->rowCount() > 0) {
                        echo "OrderID $OrderID has been deleted successfully.";
                    } else {
                        echo "No OrderID $OrderID found. Please check the Order ID and try again.";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Please provide the Correct Order ID.";
            }
            // Close the database connection
            $conn = null;
        }
        ?>
        <form action="../Pages/Delete.html">
            <br>

            <button type="submit">Back</button>
        </form>
    </div>

</body>

</html>
