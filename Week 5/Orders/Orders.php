<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>

    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
 
</head>
<body>

<?php

/*
* Display the summary of the order, including the quality and method details.
*/
function displaySummary(){

    echo "<div class = 'container'>";

    // Check if the request method is POST
    if($_SERVER["REQUEST_METHOD"] === 'POST'){


    // The prices of the Quality and Method of delivery you choose
    $qualityPrices = [
        "Regular" => 1500.00,
        "Limited" => 3000.00,
    ];

    $methodPrices = [
        "Standard" => 50.00,
        "Express" => 100.00,
    ];

    // htmlspecialchars to prevent XSS injection
    $Quality = htmlspecialchars($_POST["Quality"]);
    $Method = htmlspecialchars($_POST["Method"]);
    $Address = htmlspecialchars($_POST["Address"]);
    $Fullname = htmlspecialchars($_POST["Fullname"]);
    $Choose = htmlspecialchars($_POST["Choose"]);
    $Email = htmlspecialchars($_POST["Email"]);
    $Phone = htmlspecialchars($_POST["Phone"]);
    $Information = htmlspecialchars($_POST["Information"]);
    $Quantity = htmlspecialchars($_POST["Quantity"]);

    // Calculates the total price
    $total=calculateTotal($qualityPrices, $methodPrices, $Quantity, $Quality, $Method);

    // Display the Order Details
    displayOrderDetails($Fullname, $Address , $Phone, $Email, $Choose, $Quantity, $Quality, $Method,  $total, $Information);

    // Display the message
    displaymessage($total);

    // Generate the receipt content based on the order details
    $receiptContent = generateReceiptContent($Fullname, $Address, $Phone, $Email, $Choose, $Quality, $Quantity, $Method, $total ,$Information);

    // Save the receipt content to a text file
    saveReceiptToFile($receiptContent);

    insertOrdersToTheDatabase($Fullname, $Address, $Phone, $Email, $Choose, $Quantity, $Quality, $Method, $total, $Information);

    }
}
/**
 * Calculate the total price of the order.
 *
 * @param array $qualityPrices An array of quality prices
 * @param array $methodPrices An array of method prices
 * @param string $Quality The selected quality
 * @param string $Method The selected shipping method
 * @param int $Quantity The quantity of the figurine
 *
 * @return float The total price of the order
 */
function calculateTotal($qualityPrices, $methodPrices, $Quantity, $Quality, $Method)
    {
    return ($qualityPrices[$Quality] * $Quantity) + $methodPrices[$Method];
    }
/** 
* Display the Order Details
*
* @param string $fullname The fullname of the customer.
* @param string $Choose The selected anime figurine.
* @param int $quality The quality of the order.
* @param string $method The shipping method.
* @param string $address The address of the customer.
* @param string $Phone The phone number of the customer.
* @param float $total The total price of the order in decimal form.
* @param string $Information An Additional Information provided by the customer.
*/
function displayOrderDetails($Fullname, $Address , $Phone, $Email, $Choose, $Quantity, $Quality, $Method,  $total, $Information)
    {

        // Output the user's order details in a table
    echo "<div class = centered >";
    echo "<table>";
    echo "<tr><td>Name</td><td>" . htmlspecialchars($Fullname) . "</td></tr>";
    echo "<tr><td>Address</td><td>" . htmlspecialchars($Address) . "</td></tr>";
    echo "<tr><td>Contact</td><td>" . htmlspecialchars($Phone) . "</td></tr>";
    echo "<tr><td>Email</td><td>" . htmlspecialchars($Email) . "</td></tr>";
    echo "<tr><td>Anime Character</td><td>" . htmlspecialchars($Choose) . "</td></tr>";
    echo "<tr><td>Quantity</td><td>" . htmlspecialchars($Quantity) . "</td></tr>";
    echo "<tr><td>Quality Type</td><td>" . htmlspecialchars($Quality) . "</td></tr>";
    echo "<tr><td>Shipping Method</td><td>" . htmlspecialchars($Method) . "</td></tr>";
    echo "<tr><td>Total Price</td><td>₱" . number_format($total, 2) . "</td></tr>";
    echo "<tr><td>Additional Instructions</td><td>" . htmlspecialchars($Information) . "</td></tr>";
    echo "</table>";
    

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
    
            case "SG SSJB":
                echo "Son Goku SSJB";
                break;
    
            case "SG SSJGBK":
                echo "Son Goku SSJB Kaioken";
                break;
    
            case "SG UI":
                echo "Son Goku Ultra Instinct";
                break;
    
            case "SG MUI":
                echo "Son Goku Mastered Ultra Instinct";
                break;
    
            case "Kid Vegeta":
                echo "Vegeta (Kid)";
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
    
            case " Vegeta SSJG Royal Blue":
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

            echo "</div>";
        }

        function displaymessage($total){
            echo "<div class = 'centered'>";
        if($total == 3000 || $total <= 4600 ){
            echo"<p>Thank you so much😍😍</p>";
        } elseif($total >= 9000 ){
            echo"<p>Oh wow! <br> Thank you so much purchasing that many 😍😍😍</p>";
            }
        echo "<p>But, please take care of it!🥺</p>";
        echo "</div>";
        }

        

        function generateReceiptContent($Fullname, $Address, $Phone, $Email, $Choose, $Quality, $Quantity, $Method, $total, $Information){
            // Initialize the receipt content with a title and separator
            $receiptContent = "-----------------\n";
            $receiptContent .="| Order Summary |\n";
            $receiptContent .= "-----------------\n";
    
            // Add customer name to the receipt content
            $receiptContent .= "Name: " . $Fullname . "\n";

            // Add the address of the customer to the receipt content
            $receiptContent .= "Address : " .$Address . "\n";

            // Add the phone number of the customer to the receipt content
            $receiptContent .= "Contact : " .$Phone . "\n";

            // Add the email address of the customer to the receipt content
            $receiptContent .= "Email : " .$Email . "\n";

            // Add the chosen Anime Figurine of the customer to the receipt content
            $receiptContent .= "Anime Figurine : " .$Choose . "\n";

            // Add the Quality Type of the Anime Figurine that the customer choosed and add it to the receipt content
            $receiptContent .= "Quality Type : " .$Quality . "\n";

            // Add the Quantity of the Anime Figurine that the customer choosed and add it to the receipt content
            $receiptContent .= "Quantity : " .$Quantity . "\n";

            // Add the Shipping method to the receipt content
            $receiptContent .= "Shipping Method : " .$Method . "\n";

            // Add the total price to the receipt content
            $receiptContent .= "Total Price: ₱" . number_format($total, 2) . "\n";
    
            // Add any special instructions to the receipt content
            $receiptContent .= "Special Instructions: " . $Information . "\n";
    
            // Add a thank you message to the receipt content
            $receiptContent .= "\n";
            $receiptContent .= "Thank you for your ordering to my shop!";
    
            // Return the complete receipt content
            return $receiptContent;
        }
    
    
        /**
         * Saves the receipt content to a text file.
         * 
         * @param string $receiptContent The content of the receipt to be saved
         */
        function saveReceiptToFile($receiptContent){
            echo "<div class = 'centered' >";
            // Open a file for writing. If the file does not exist, it will be created.
            // If the file cannot be opened, display an error message and terminate the script.
            $file = fopen("Anime Shop Order Summary.txt", "w") or die("Unable to open the file!");
    
            // Write the receipt content to the file.
            fwrite($file, $receiptContent);
    
            // Close the file after writing is complete.
            fclose($file);
    
            // Display a success message indicating that the receipt was created.
            
            echo "Receipt created successfully as Anime Shop Order Summary.txt!";
            echo "</div>";
        }
            

    // Calls the displaySummary function
    displaySummary();

    echo "<form action='../pages/Menu.php'>";
            echo "<button type='submit'>Back</button>";
       echo  "</form>";
           
       echo "</div>";

    function insertOrdersToTheDatabase($Fullname, $Address, $Phone, $Email, $Choose, $Quantity, $Quality, $Method, $total, $Information)
    {

        include "../Database/database.php";

        try {
            // Open the database connection
            $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepares an SQL statement for execution
            $stmt = $conn->prepare("INSERT INTO orders (Fullname, Address, Phone, Email, AnimeCharacter, Quantity, Quality, ShippingMethod, TotalPrice, Information) 
                VALUES (:fullname, :address, :phone, :email, :anime_character, :quantity, :quality, :shippingmethod, :total_price, :information)");

            // Bind the value of the variable to the parameter
            $stmt->bindParam(':fullname', $Fullname);
            $stmt->bindParam(':address', $Address);
            $stmt->bindParam(':phone', $Phone);
            $stmt->bindParam(':email', $Email);
            $stmt->bindParam(':anime_character', $Choose);
            $stmt->bindParam(':quantity', $Quantity);
            $stmt->bindParam(':quality', $Quality);
            $stmt->bindParam(':shippingmethod', $Method);
            $stmt->bindParam(':total_price', $total);
            $stmt->bindParam(':information', $Information);

            // Executes the prepared statement
            $stmt->execute();

            echo "<br /> Order details inserted into the database successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    // Close the database connection
    $conn = null;
    ?>

    <br />
?>
        
</body>
</html>
