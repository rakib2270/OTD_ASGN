<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="logo_ostad.png" alt="logo_ostad">
        <h3>Weather Report</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="temperature">Enter The Temperature</label>
            <input type="number" id="temperature" name="temperature" placeholder="Enter Temperature in Celsius"required>
            <br>

            <input type="submit" value="Check Weather">
        </form>

        <?php
        // Initialize variables
        $temperature = 0;
        $weatherMessage = '';

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $temperature = $_POST["temperature"];

            // Determine the weather message based on the temperature range
            if ($temperature < 0) {
                $weatherMessage = "It's Freezing!";
            } elseif ($temperature >= 0 && $temperature < 15) {
                $weatherMessage = "It's cool.";
            } elseif ($temperature >= 15 && $temperature < 25) {
                $weatherMessage = "It's Warm.";
            } else {
                $weatherMessage = "It's Hot!";
            }
        }
        ?>

        <?php
        // Display the result
        if (!empty($weatherMessage)) {
            echo "<h3><u>Weather</u></h3>";
            echo "<h2>$weatherMessage</h2>";
        }
        ?>
    </div>
</body>
</html>