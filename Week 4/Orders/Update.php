<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating an Order</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="container">
        <?php
        include "../Database/database.php";

        $qualityPrices = [
            "Regular" => 1500.00,
            "Limited" => 3000.00,
        ];
    
        $methodPrices = [
            "Standard" => 50.00,
            "Express" => 100.00,
        ];
    

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $OrderID = $_POST["OrderID"];

            try {
                // Open the database connection
                $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
                
                // Set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepare and execute the update query
                $stmt = $conn->prepare("SELECT * FROM orders WHERE OrderID = :OrderID");
                $stmt->bindParam(':OrderID', $OrderID);
                $stmt->execute();

                // Fetch the orders
                $result = $stmt->fetch();

                if ($result) {
                    // Retrieve existing values
                    $Fullname = isset($_POST["Fullname"]) && $_POST["Fullname"] !== "" ? $_POST["Fullname"] : $result['FullName'];
                    $Address = isset($_POST["Address"]) && $_POST["Address"] !== "" ? $_POST["Address"] : $result['Address'];
                    $Phone = isset($_POST["Phone"]) && $_POST["Phone"] !== "" ? $_POST["Phone"] : $result['Phone'];
                    $Email = isset($_POST["Email"]) && $_POST["Email"] !== "" ? $_POST["Email"] : $result['Email'];
                    $Choose = isset($_POST["Choose"]) && $_POST["Choose"] !== "" ? $_POST["Choose"] : $result['AnimeCharacter'];
                    $Quantity = isset($_POST["Quantity"]) && $_POST["Quantity"] !== "" ? $_POST["Quantity"] : 1;
                    $Quality = isset($_POST["Quality"]) && $_POST["Quality"] !== "" ? $_POST["Quality"] : "Regular";
                    $Method = isset($_POST["Method"]) && $_POST["Method"] !== "" ? $_POST["Method"] : "Standard";
                    $Information = isset($_POST["Information"]) && $_POST["Information"] !== "" ? $_POST["Information"] : "";
    
    

                    // Calculate the total price
                    $total_price = calculateTotal($qualityPrices, $methodPrices, $Quantity, $Quality, $Method);

                    // Update the order details
                    $updateStmt = $conn->prepare("UPDATE orders SET FullName=:fullname, Address=:address, Phone=:phone, Email=:email, AnimeCharacter=:animecharacter ,Quantity=:quantity, Quality=:quality, ShippingMethod=:shippingmethod, TotalPrice=:totalprice, Information=:information WHERE OrderID=:OrderID");
                    $updateStmt->execute(array(
                        ':fullname' => $Fullname,
                        ':address' => $Address,
                        ':phone' => $Phone,
                        'email' => $Email,
                        'animecharacter' => $Choose,
                        'quantity' => $Quantity,
                        'quality' => $Quality,
                        'shippingmethod' => $Method,
                        ':totalprice' => $total_price,
                        ':information' => $Information,
                        ':OrderID' => $OrderID
                    ));

                    $selectStmt = $conn->prepare("SELECT * FROM orders WHERE OrderID = :OrderID");
                    $selectStmt->bindParam(':OrderID', $OrderID);
                    $selectStmt->execute();
                    $updatedOrder = $selectStmt->fetch();

                    if ($updatedOrder) {
                        echo "<h1> Anime Figurine Order Details</h1>";
                    echo "<table>";
                    echo "<tr><td>Order ID</td><td>" . $updatedOrder['OrderID'] . "</td></tr>";
                    echo "<tr><td>Full Name</td><td>" . $updatedOrder['FullName'] . "</td></tr>";
                    echo "<tr><td>Address</td><td>" . $updatedOrder['Address'] . "</td></tr>";
                    echo "<tr><td>Phone</td><td>" . $updatedOrder['Phone'] . "</td></tr>";
                    echo "<tr><td>Email</td><td>" . $updatedOrder['Email'] . "</td></tr>";
                    echo "<tr><td>Anime Character</td><td>" . $updatedOrder['AnimeCharacter'] . "</td></tr>";
                    echo "<tr><td>Quantity</td><td>" . $updatedOrder['Quantity'] . "</td></tr>";
                    echo "<tr><td>Quality</td><td>" . $updatedOrder['Quality'] . "</td></tr>";
                    echo "<tr><td>Shipping Method</td><td>" . $updatedOrder['ShippingMethod'] . "</td></tr>";
                    echo "<tr><td>Total Price</td><td>₱" . number_format($updatedOrder['TotalPrice'], 2) . "</td></tr>";
                    echo "<tr><td>Information</td><td>" . $updatedOrder['Information'] . "</td></tr>";
                    echo "</table>";
                    } 

                    echo " <br> Order details updated successfully! <br>";
                    echo " <br> Please check the updated Order";
                } else {
                    echo "Order not found. Please check the Order ID and try again.";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            // Close the database connection
            $conn = null;
        }

        function calculateTotal($qualityPrices, $methodPrices, $Quantity, $Quality, $Method)
    {
    return ($qualityPrices[$Quality] * $Quantity) + $methodPrices[$Method];
    }
        ?>

        <br />
        <form action="../Pages/Update.html">
            <button type="submit">Back</button>
        </form>
    </div>
</body>

</html>
