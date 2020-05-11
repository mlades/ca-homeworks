<?php
    $displayForm = True;
    $heading = "";
    $months = array(
      "January"=>31,
      "February"=>'28 days, if leap year 29',
      "March"=>31,
      "April"=>30,
      "May"=>31,
      "June"=>30,
      "July"=>31,
      "August"=>31,
      "September"=>30,
      "October"=>31,
      "November"=>30,
      "December"=>31
    );
    
    if(isset($_POST['month'])){
        $selectedMonth = $_POST['month'];
        $heading =  "<h1>Days in a month</h1>" ;
        if ($selectedMonth === "February"){
          $heading .= "<p>The month of $selectedMonth has $months[$selectedMonth]</p>";
        } else {
          $heading .= "<p>The month of $selectedMonth has $months[$selectedMonth] days.</p>";
        }
        
        $displayForm = False;
    }
    function option($str){
      echo "<option value='$str'>" .strtoupper($str). "</option>\n";
    }
    echo $heading ;      
    if ($displayForm) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive form</title>
</head>
<body>

    <h1 id="h1">Days in a month</h1>
    <form action="" method="POST" >
        <p>Please choose a month:</p>
        <select name="month">
          <?php
          foreach ($months as $key => $value){
          option($key);
          }
          ?>
        </select>
        <input type="submit" name="submit" id="button" value="Go" ></input>
    </form>

    <?php
         }
    ?>
</body>
</html>