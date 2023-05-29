<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Using PHP Variables, arrays and operators</title>

    </head>
    <body>
        <h1>PHP Variables, Arrays and Operators</h1>
    <?php
    $days = array ("Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The Days of the week in English are:<br> $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";
    $days[1] = "Lundi";
    $days[2] = "Mardi";
    $days[3] = "Mercredi";
    $days[4] = "Jeudi";
    $days[5] = "Vendredi";
    $days[6] = "Samedi";
    $days[0] = "Dimanche";
    echo "<p>The Days of the week in French are:<br> $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";
    ?>
    </body>
</html>