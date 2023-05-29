<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Hai Anh" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
     function sanitise_input ($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars ($data);
         return $data;
     }
     if(isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
        echo "<p>This is a test: You first name is $firstname</p>";
     }
     else {
        header ("location: register.html");
     }
     
     if(isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
        echo "<p>This is a test: You last name is $lastname</p>";
     }
     else {
        echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
     }
     if(isset($_POST["age"])) {
        $age = $_POST["age"];
        echo "<p>This is a test: You age is $age</p>";
     }
     else {
        echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
     }
     if(isset($_POST["food"])) {
        $food = $_POST["food"];
        echo "<p>This is a test: You food is $food</p>";
     }
     else {
        echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
     }
     if(isset($_POST["partysize"])) {
        $partysize = $_POST["partysize"];
        echo "<p>This is a test: You partysize is $partysize</p>";
     }
     else {
        echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
     }  
     if(isset($_POST["species"])) {
        $species = $_POST["species"];
     }  
     else {
        $species = "Unknown species";
     }  
     $tour = "";    
     if(isset($_POST["1day"])){ $tour = $tour. "One-day tour";}
    
     if(isset($_POST["4day"])){ $tour = $tour. "Four-day tour";}
     
     if(isset($_POST["10day"])){ $tour = $tour. "Ten-day tour";}
     $firstname = sanitise_input($firstname);
     $lastname = sanitise_input($lastname);
     $species =  sanitise_input($species);
     $age =  sanitise_input($age);
     $food =  sanitise_input($food);
     $partysize =  sanitise_input($partysize);

    $errMsg = "";
    if ($firstname=="") {
      $errMsg = "<p>You must enter your first name.</p>";
    } 
     else if (!preg_match("/^[a-zA-Z]*$/",$firstname)){
      $errMsg = "<p>Only alpha letters allowed in your first name.</p>";
     }
     if ($lastname=="") {
      $errMsg = "<p>You must enter your last name.</p>";
    } 
     else if (!preg_match("/^[a-zA-Z]*$/",$lastname)){
      $errMsg = "<p>Only alpha letters allowed in your last name.</p>";
     }
     if ($age=="") {
      $errMsg = "<p>You must enter your age.</p>";
    } 
     else if ((!is_numeric($age))(!preg_match("[0-10000]+",$age))){
      $errMsg = "<p>Only age between 10 and 10,000.</p>";
     }
    if ($errMsg != ""){
      echo"<p>$errMsg</p>";
    }
    else {
    echo "<p>Welcome $name!<br>
    You are now booked on the $tour<br>
    Species: $species<br>Age: $age<br>
    Meal preferece: $food<br>
    Number of travellers: $partysize</p>";
    }
    ?>
</body>
</html>