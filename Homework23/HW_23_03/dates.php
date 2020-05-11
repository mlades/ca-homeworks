<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <p>Exercise 1</p>
    &copy; <?php echo date("Y") ." PHP Exercises - CodeAcademy"; ?>

    <p>Exercise 2</p>
    <?php 
        $now = strtotime("now");
        $birthday = strtotime("11 June 2020");

        echo floor(abs($birthday - $now) / 86400);
    ?>

    <p>Exercise 3</p>
    <?php 
        //$date = strtotime("01 September 2020");
        echo date("Y/m/d" , strtotime("01 September 2020")) ."<br>";
        echo date("y.m.d" , strtotime("01 September 2020")) ."<br>";
        echo date("d-m-y" , strtotime("01 September 2020")) ."<br>";
    ?>

    <p>Exercise 4</p>
    <?php 
        $diff = abs(strtotime("2013-09-04") - strtotime("1981-11-04"));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
       
        echo ($years ." years, " . $months ." months, " .$days." days");
    ?>

    <p>Exercise 5</p>
    <?php 
        echo date("d-m-Y", strtotime("2020-09-12"));
    ?>

    <p>Exercise 6</p>
    <?php 
        $firstDate = strtotime("now");
        $secondDate = strtotime("02 December 2018");

        echo floor(abs($secondDate - $firstDate) / 86400);
    ?>
    <p>Exercise 7</p>
    <?php 
        $date = strtotime("12 May 2020");
        echo "First date is " . date("01-m-Y", $date) . " and last date is " . date("t-m-Y", $date);
    ?>

    <p>Exercise 8</p>
    <?php 
       $date = strtotime("12 May 2020");
       echo date('l \t\h\e jS', $date) ;
    ?>

    <p>Exercise 9</p>
    <?php 
        $date = strtotime("2020-09-07 10:30:00");
         echo date('g\:ia jS \o\f F' ,$date)
    ?>

    <p>Exercise 10</p>
    <?php 
        function convertTime($userDate, $mer){
            $date = $userDate . "" . $mer;
            
            if ($mer === "AM") {
                echo date("Y-m-d h:i", strtotime($date)) . "<br>";               
            } else {
                echo date("Y-m-d H:i", strtotime($date)) . "<br>";               
            }
        }
        convertTime("2020-05-19 09:00:00", "AM");
       // output : 2020-05-19 09:00:0H
       
        convertTime("2020-05-19 09:00:00", "PM");
       // output : 2020-05-19 12:00:00

      
    ?>
    
</body>
</html>
