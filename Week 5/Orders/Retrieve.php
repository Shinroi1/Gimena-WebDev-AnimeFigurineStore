<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve an Order</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="container">
        <?php
        include "../Database/database.php";

        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve the order details from the database based on the provided orderID
            $OrderID = $_POST["OrderID"];

            try {
                 // Open the database connection
                $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

                // Set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepares an SQL statement for execution
                $stmt = $conn->prepare("SELECT * FROM orders WHERE OrderID = :OrderID");

                // Bind the value of the variable to the parameter
                $stmt->bindParam(':OrderID', $OrderID);

                // Executes the prepared statement
                $stmt->execute();

                // Fetch the orders
                $result = $stmt->fetch();

                if ($result) {
                    // Display the retrieved order details
                    echo "<h1> Anime Figurine Order Details</h1>";
                    echo "<table>";
                    echo "<tr><td>Order ID</td><td>" . $result['OrderID'] . "</td></tr>";
                    echo "<tr><td>Full Name</td><td>" . $result['FullName'] . "</td></tr>";
                    echo "<tr><td>Address</td><td>" . $result['Address'] . "</td></tr>";
                    echo "<tr><td>Phone</td><td>" . $result['Phone'] . "</td></tr>";
                    echo "<tr><td>Email</td><td>" . $result['Email'] . "</td></tr>";
                    echo "<tr><td>Anime Character</td><td>" . $result['AnimeCharacter'] . "</td></tr>";
                    echo "<tr><td>Quantity</td><td>" . $result['Quantity'] . "</td></tr>";
                    echo "<tr><td>Quality</td><td>" . $result['Quality'] . "</td></tr>";
                    echo "<tr><td>Shipping Method</td><td>" . $result['ShippingMethod'] . "</td></tr>";
                    echo "<tr><td>Total Price</td><td>₱" . number_format($result['TotalPrice'], 2) . "</td></tr>";
                    echo "<tr><td>Information</td><td>" . $result['Information'] . "</td></tr>";
                    echo "</table>";
                } else {
                    // Display an error message if the order ID is not found
                    echo "The OrderID $OrderID didn't exist. Please check the Order ID and try again.";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        // Close the database connection
        $conn = null;
        ?>

        <br />

        <form action="../pages/Retrieve.html">
            <button type="submit">Back</button>
        </form>     
    </div>
</body>

</html>
