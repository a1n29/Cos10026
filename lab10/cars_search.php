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
        $sql_table ="cars";
        $query ="select * from cars where make like '%$make%' and model like '%$model%' and price like '%$price%' and yom like '%$yom%'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            echo "<table border=\"1\">\n";
            echo "<tr>\n<th>Make</th>\n<th>Model</th>\n<th>Price</th>\n<th>Yom</th>\n</tr>\n";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>\n";
                echo "<td>",$row["make"],"</td>\n";
                echo "<td>",$row["model"],"</td>\n";
                echo "<td>",$row["price"],"</td>\n";
                echo "<td>",$row["yom"],"</td>\n";
                echo "</tr>\n";
            }
            echo "</table>";
          }  else {
            echo"<p>There was an error in search.</p>";
            }
        mysqli_close($conn);
    }
    ?>