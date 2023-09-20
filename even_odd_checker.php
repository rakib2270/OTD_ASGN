<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
    <img src="logo_ostad.png" alt="logo_ostad">
        <h3>Even-Odd Checker</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="number">Enter a Number:</label>
            <input type="number" id="number" name="number" placeholder="Enater Your Number" required>
            <br>

            <input type="submit" value="Check">
        </form>

        <?php
        // Initialize variables
        $number = 0;
        $resultMessage = '';

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $number = $_POST["number"];

            // Check if the number is even or odd
            if ($number % 2 == 0) {
                $resultMessage = "The number $number is even.";
            } else {
                $resultMessage = "The number $number is odd.";
            }
        }
        ?>

        <?php
        // Display the result message
        if (!empty($resultMessage)) {
            echo "<h2>Result:</h2>";
            echo "<p>$resultMessage</p>";
        }
        ?>
    </div>
</body>
</html>
