    <?php
    htmlspecialchars($_POST["carmake"]);
    htmlspecialchars($_POST["carmodel"]);
    htmlspecialchars($_POST["price"]);  
    htmlspecialchars($_POST["yom"]);
   $make = trim($_POST["carmake"]);
   $model = trim($_POST["carmodel"]);
   $price = trim($_POST["price"]);
   $yom = trim($_POST["yom"]);
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd,$sql_db);
   
    if(!$conn){
        echo"<p>Database connection failure</p>";
    }else{
        $sql_table = 'cars';
        if ((is_numeric($price))&&(is_numeric($yom) === TRUE)) {
            $query = "insert into $sql_table(make, model, price, yom) values ('$make', '$model', '$price', '$yom')";
            $result = mysqli_query($conn, $query);
            echo "<p class=\"ok\">Sucessfully added New Car record</p>";
        }
        else {
            echo "<p>Please check your input!</p>";
        }
        mysqli_close($conn);
    }
    ?>