<!DOCTYPE html>
<html>
<head>
    <title>My Personal Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="logo_ostad.png" alt="logo_ostad">
        <h2>My Personal Information</h2>

        <?php
        // Define variables for personal information
        $name = "Rakibul Islam";
        $age = 20;
        $country = "Bangladesh";
        $phoneNumber = "++88 01618-805636";
        $email ="rakib2270gp@gmail.com";
        $education ="I am Honors 1st year student of Gouripur Govt College Business Education Department";
        $address = "725/Gujikha, Gouripur-2270, Mymensingh, Bangladesh";
        $introduction = "Hello! I'm $name. I'm a student  of Ostad Platform. $education. Feel free to contact me at $phoneNumber / $email, My address is- $address"; 
        ?>
        
        <h5><?php echo "Name : ".$name; ?></h5>


        <h5><?php echo "Age : " .$age; ?></h5>

        
        <h5><?php echo "Country : " .$country; ?></h5>

    
        <h5><?php echo "Phone Number : " .$phoneNumber; ?></h5>
       
        <h5><?php echo "Address : " .$address; ?></h5>

        <h3>Introduction:</h3>
        <p class="intro" ><?php echo $introduction; ?></p>


    </div>
</body>
</html>
