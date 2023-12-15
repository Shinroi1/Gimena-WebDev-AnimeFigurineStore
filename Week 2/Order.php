<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    echo "<div class = 'container'>";

    // The prices of the Quality and Method of delivery you choose
    $qualityPrices = [
        "Regular" => 1500.00,
        "Limited" => 3000.00,
    ];

    $methodPrices = [
        "Standard" => 50.00,
        "Express" => 100.00,
    ];

    $Quality = $_POST["Quality"];
    $Method = $_POST["Method"];
    $Fullname = $_POST["Fullname"];
    $Choose = $_POST["Choose"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $Information = $_POST["Information"];
    $Quantity = $_POST["Quantity"];
    $Address = $_POST["Address"];

    // Calculates the total price: qualityPrices x Quantity, then the result + methodPrices = $total 
    $total = ($qualityPrices[$Quality] * $Quantity) + $methodPrices[$Method];

    // Output the user's order details in a table
    echo "<div class = centered >";
    echo "<table>";
    echo "<tr><td>Name</td><td>" . htmlspecialchars($Fullname) . "</td></tr>";
    echo "<tr><td>Address</td><td>" . htmlspecialchars($Address) . "</td></tr>";
    echo "<tr><td>Contact</td><td>" . htmlspecialchars($Phone) . "</td></tr>";
    echo "<tr><td>Email</td><td>" . htmlspecialchars($Email) . "</td></tr>";
    echo "<tr><td>Anime Figurine</td><td>" . htmlspecialchars($Choose) . "</td></tr>";
    echo "<tr><td>Quality Type</td><td>" . htmlspecialchars($Quality) . "</td></tr>";
    echo "<tr><td>Quantity</td><td>" . htmlspecialchars($Quantity) . "</td></tr>";
    echo "<tr><td>Shipping Method</td><td>" . htmlspecialchars($Method) . "</td></tr>";
    echo "<tr><td>Total Price</td><td>₱" . number_format($total, 2) . "</td></tr>";
    echo "<tr><td>Additional Instructions</td><td>" . htmlspecialchars($Information) . "</td></tr>";
    echo "</table>";
    echo "</div>";

    switch($Choose){
        case "Naruto (Kid)":
            break;

        case "Naruto Uzumaki":
            break;
        
        case "Naruto Uzumaki (Sage Form)":
            break;

        case "Naruto Uzumaki (Six Tails Rage)":
            break;

        case "Naruto Uzumaki (Kyuubi Control Mode)":
            break;

        case "Naruto Uzumaki (Kyuubi Control Sage Six Path)":
            break;

        case "Sasuke (Kid)":
            break;

        case "Sasuk Uchicha (Clothing: Hebi)":
            break;

        case "Sasuk Uchicha (Clothing: Taka)":
            break;

        case "Sasuk Uchicha (Clothing: Akatsuki)":
            break;

        case "Sasuk Uchicha (Eyes of Rinnegan)":
            break;

        case "Son Goku (Kid)":
            break;

        case "Son Goku (Adult Base)":
            break;

        case "Son Goku Kaioken":
            break;

        case "Son Goku SSJ":
            break;

        case "Son Goku SSJ2":
            break;

        case "Son Goku SSJ3":
            break;

        case "Son Goku GT (Kid)":
            break;
            
        case "Son Goku SSJ GT (Kid)":
            break;

        case "Son Goku SSJ2 GT (Kid)":
            break;

        case "Son Goku SSJ3 GT (Kid)":
            break;

        case "Son Goku SSJ4 GT":
            break;

        case "Son Goku SSJG":
            break;

        case "Son Goku SSJB":
            break;

        case "Son Goku SSJB Kaioken":
            break;

        case "Son Goku Ultra Instinct":
            break;

        case "Son Goku Mastered Ultra Instinct":
            break;

        case "Vegeta (Kid)":
            break;

        case "Vegeta Scouter (Adult Base )":
            break;

        case "Vegeta SSJ":
            break;

        case "Vegeta SSJ2":
            break;
       
        case "Majin Vegeta SSJ":
            break;

        case "Majin Vegeta SSJ2":
            break;

        case "Vegeta SSJG":
            break;

        case "Vegeta SSJB":
            break;

        case "Vegeta SSJG Royal Blue":
            break;

        case "Vegeta Ultra Ego":
            break;

        case "Luffy (Kid)":
            break;

        case "Luffy (Adult)":
            break;

        case "Luffy (Second Gear)":
            break;

        case "Luffy (Third Gear)":
            break;

        case "Luffy (Fourth Gear Bounce Man)":
            break;

        case "Luffy (Fourth Gear Snake Man)":
            break;

        case "Luffy (Joyboy)":
            break;
        }

    // Output additional messages based on the total price
        echo "<div class = 'center'>";
            if ($total == 3000 || $total <= 4600) {
                echo "<p>Thank you so much😍😍</p>";
                } elseif ($total >= 9000) {
        echo "<p>Oh wow! <br> Thank you so much for purchasing that many 😍😍😍</p>";
                  }
        echo "<p>But, please take care of it!🥺</p>";

        echo "</div>";

    echo "</div>";
}
?>

</body>
</html>
