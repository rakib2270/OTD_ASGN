<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
    <img src="logo_ostad.png" alt="logo_ostad">
        <h3>Number Comparison Tool</h3>    
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="number1">Enter the first number:</label>
            <input type="number" id="number1" name="number1" placeholder="Enter Your 1st Comparison Number" required>
            <br>

            <label for="number2">Enter the second number:</label>
            <input type="number" id="number2" name="number2"placeholder="Enter Your 2nd Comparison Number" required>
            <br>

            <input type="submit" value="Compare">
        </form>

        <?php
        // Initialize variables
        $number1 = 0;
        $number2 = 0;
        $largerNumber = '';

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];

            // Use the ternary operator to determine the larger number
            $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        }
        ?>

        <?php
        // Display the result
        
        if  ($number1==$number2){
            echo "<h2> <u>Result</u></h2>";
            echo "The Number are Equal";
        }
        elseif ($largerNumber !== ''){
            echo "<h2> <u>Result</u></h2>";
            echo "<p>The larger number is: $largerNumber</p>";
        }
        ?>
    </div>
</body>
</html>
