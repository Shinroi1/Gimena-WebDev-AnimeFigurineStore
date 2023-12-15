<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Orders</title>
    </head>
<body>
<?php
include "../Database/database.php";

try {
    // Open the database connection
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

    // Set the PDO error mode to exception -  useful for error handling and allows you to catch and handle any errors that occur during the execution of the database operations.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepares an SQL statement for execution
    $stmt = $conn->prepare("SELECT * FROM orders");

    // Executes the prepared statement
    $stmt->execute();

    // Fetch all the orders
    $results = $stmt->fetchAll();

    // Display each order as a table row
    foreach ($results as $result) {
        echo "<tr>";
        echo "<td>" . $result['OrderID'] . "</td>";
        echo "<td>" . $result['FullName']. "</td>";
        echo "<td>" . $result['Address'] . "</td>";
        echo "<td>" . $result['Phone'] . "</td>";
        echo "<td>" . $result['Email'] . "</td>";
        echo "<td>" . $result['AnimeCharacter'] . "</td>";
        echo "<td>" . $result['Quantity'] . "</td>";
        echo "<td>" . $result['Quality'] . "</td>";
        echo "<td>" . $result['ShippingMethod'] . "</td>";
        echo "<td>₱" . number_format($result['TotalPrice'], 2) . "</td>";
        echo "<td>" . $result['Information'] . "</td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
</body>
</html>
