<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="HaiAnh" content="Car display">
    <title>Cars display</title>
</head>
<body>
    <h1>Creating web appplication - Lab10</h1>
    <?php
    require_once ("setting.php");
    
    $conn = @mysqli_connect($host, $user, $pwd,$sql_db);

    if(!$conn){
        echo"<p>Database connection failure</p>";
    }else{
        $sql_table="cars";
        $query = "select make, model, price FROM cars ORDER BY make, model";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "<p>Something is wrong with ",$query, "</p>";
        } else {
            echo "<table border=\"1\">\n";
            echo "<tr>\n<th>Make</th>\n<th>Model</th>\n<th>Price</th>\n</tr>\n";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>\n";
                echo "<td>",$row["make"],"</td>\n";
                echo "<td>",$row["model"],"</td>\n";
                echo "<td>",$row["price"],"</td>\n";
                echo "</tr>\n";
            }
            echo "</table>";
            
            mysqli_free_result($result);
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>