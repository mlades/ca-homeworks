<?php    
    $heading = "";
    $displayForm = True;    
    const months = array(
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
          $heading .= "<p>The month of $selectedMonth has ". months[$selectedMonth] ."</p>";
        } else {
          $heading .= "<p>The month of $selectedMonth has " . months[$selectedMonth] ." days.</p>";
        }
        $displayForm = False;
    }

    function makeOptions($arr){
      $selectOptions = "";
      if (!is_array($arr)) {
        echo "Array Not Found";
        die();
      } else {
        foreach ($arr as $key => $value) {
          $selectOptions .= "<option value='$key'>" .$key. "</option><br>";
        }
      }
      return  $selectOptions;
    }

    function makeSelect(){
      echo '<select name="month"><br>'. makeOptions(months) . '</select><br>';
    }
    echo $heading;
    if ($displayForm) {
?>
<?php
    include 'index.php';
?>
<?php
  }
?>