<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Orders</title>
    <link rel="stylesheet" href="../CSS/Show.css">
</head>

<body>
    <div class="container">
        <h1>Anime Figurine Orders</h1>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Anime Character</th>
                <th>Quantity</th>
                <th>Quality</th>
                <th>Shipping Method</th>
                <th>Total Price</th>
                <th>Information</th>
            </tr>
            <?php include '../orders/Show_Orders.php'; ?>
        </table>

        <br>

        <form action="Menu.php">
            <button type="submit">Main Menu</button>
        </form>
    </div>


</body>

</html>
