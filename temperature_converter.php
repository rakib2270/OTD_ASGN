<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <img src="logo_ostad.png" alt="logo_ostad">
        <h3>Temperature Converter</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="temperature">Enter Temperature</label>
            <input type="number" id="temperature" name="temperature" placeholder="Enter Temperature in Farenheit or Celsius" required>
            <br>
            <label for="conversionType">Select Conversion Type:</label>
            <select id="conversionType" name="conversionType" required>
                <option value="">Select Conversion Type</option>
                <option value="celsius-to-fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit-to-celsius">Fahrenheit to Celsius</option>
            </select>
            <br>
            <input type="submit" value="Convert">
        </form>
        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversionType = $_POST["conversionType"];
            $result= "";
          
            if ($conversionType == "celsius-to-fahrenheit") {
                $result = round(($temperature * 9/5) + 32);
            } elseif ($conversionType == "fahrenheit-to-celsius") {
               $result = round(($temperature - 32) * 5/9);
            }
            echo "</br>";
           
            echo '<div id="result">Result: ' . $result . '</div>';

            

        }
        ?>
    </div>
</body>
</html>
