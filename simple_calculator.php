<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="logo_ostad.png" alt="logo_ostad">
        <h3>Simple Calculator</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="number" id="number1" name="number1" placeholder="Enter Your First Number" required>
            <br>
            
            <input type="number" id="number2" name="number2" placeholder="Enter Your Second Number"required>
            <br>

            <label for="operation"></label>
            <select id="operation" name="operation" aria-placeholder="Select Operator" required>
                <option value=""> Select Operator</option>
                <option value="add">Addition (+) </option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide"> Division(/)</option>
            </select>
            <br>

            <input type="submit" value="Calculate ">
        </form>

        <?php
        // Initialize variables
        $number1 = 0;
        $number2 = 0;
        $operation = '';
        $result = '';

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $operation = $_POST["operation"];

            // Perform the selected operation
            switch ($operation) {
                case "add":
                    $result = $number1 + $number2;
                    break;
                case "subtract":
                    $result = $number1 - $number2;
                    break;
                case "multiply":
                    $result = $number1 * $number2;
                    break;
                case "divide":
                    if ($number2 != 0) {
                        $result = $number1 / $number2;
                    } else {
                        $result = "Cannot divide by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operation";
                    break;
            }
        }
        ?>

        <?php
        // Display the result
        if ($result !== '') {
            echo "<h2>Result </h2>";
            echo "<p>$result</p>";
        }

        ?>

    </div>
</body>
</html>
