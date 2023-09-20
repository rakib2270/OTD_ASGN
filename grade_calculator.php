<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container">
    <img src="logo_ostad.png" alt="logo_ostad">
        <h2>Grade Calculator</h2>
        <form method="post" action="";
        <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="score1">Enter your grade in the box below</label>
            <input type="number" id="score1" name="score1" placeholder="Input Marks For Bangla" required>
            <br>

            <label for="score2">Enter your grade in the box below </label>
            <input type="number" id="score2" name="score2"placeholder="Input Marks For English" required>
            <br>

            <label for="score3">Enter your grade in the box below</label>
            <input type="number" id="score3" name="score3"placeholder="Input Marks For Math" required>
            <br>
            
            <label for="score4">Enter your grade in the box below</label>
            <input type="number" id="score4" name="score4"placeholder="Input Marks For Physics" required>
            <br>
            <label for="score5">Enter your grade in the box below</label>
            <input type="number" id="score5" name="score5"placeholder="Input Marks For Chemistry" required>

            <input type="submit" value="Calculate">
        </form>

        <?php
        // Initialize variables
        $score1 = 0;
        $score2 = 0;
        $score3 = 0;
        $score4 = 0;
        $score5 = 0;
        $average = 0;
        $letterGrade = '';

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];
            $score4 = $_POST["score4"];
            $score5 = $_POST["score5"];
        }
               
        // Calculate the average
            $average = ($score1 + $score2 + $score3+$score4+$score5) / 5;
          
            // Determine the letter grade
            if ($average <= 32) {
                $letterGrade = 'F';
            }
             elseif ($average >= 80) {
                $letterGrade = 'A+';}
             elseif ($average >= 70) {
                $letterGrade = 'A';
            } elseif ($average >= 60) {
                $letterGrade = 'A-';
            } elseif ($average >= 50) {
                $letterGrade = 'B';
             } elseif ($average >= 40) {
                $letterGrade = 'C';
             } elseif ($average >= 32) {
                $letterGrade = 'D';
            }
             

              // Display the result
        if ($average > 0) {
            echo "<h2>Result</h2>";
            echo "Average: ".round($average);
            echo "<p>Letter Grade: $letterGrade</p>";
        }
        ?>
    </div>
</body>

</html>