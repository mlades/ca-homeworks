<?php
    $displayForm = True;
    $heading = "";
    
    
    if(isset($_POST['city']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['checkedWaether'])){
        $checked = [];
        $heading =  "<h1>Pick a day</h1> 
                     <h1>With Arrays</h1>" ;
        $userInputs = array(
            $_POST['city'],
            $_POST['month'],
            $_POST['year']
        );

        $heading .= "In $userInputs[0] in the month of $userInputs[1] $userInputs[2], you observed the following weather:<br> <ul>";
        foreach ($_POST['checkedWaether'] as $value){
            $heading .= "<li>$value</li>";
        }
        $heading .= "</ul>";
        $displayForm = False;
        echo $heading ; 
    }        
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

    <h1>How's your weather</h1>
    <h1>With Arrays</h1>
    <form action="" method="POST" >
        <p>Please chooseyou information:</p>
        <span>City:</span>
        <input type="text" name="city"></input>
        <span>Month:</span>
        <input type="text" name="month"></input>
        <span>Year:</span>
        <input type="text" name="year"></input> 
        <p>PLease choose the kind of weather you experienced from the list below.</p>
        <p>Choose all that can apply.</p>
        <input type="checkbox" id="sunshine" name="checkedWaether[sunshine]" value="Sunshine">Sunshine</input><br>      
        <input type="checkbox" id="clouds" name="checkedWaether[clouds]" value="Clouds">Clouds</input><br>     
        <input type="checkbox" id="rain" name="checkedWaether[rain]" value="Rain">Rain</input><br>  
        <input type="checkbox" id="hail" name="checkedWaether[hail]" value="Hail">Hail</input><br>   
        <input type="checkbox" id="sleet" name="checkedWaether[sleet]" value="Sleet">Sleet</input><br>       
        <input type="checkbox" id="snow" name="checkedWaether[snow]" value="Snow">Snow</input><br>      
        <input type="checkbox" id="wind" name="checkedWaether[wind]" value="Wind">Wind</input><br>      
        <input type="checkbox" id="cold" name="checkedWaether[cold]" value="Cold">Cold</input><br>      
        <input type="checkbox" id="heat" name="checkedWaether[heat]" value="Heat">Heat</input><br>        
        <input type="submit" name="submit" id="button" value="Go" ></input>
    </form>

    <?php
         }
    ?>
    
</body>
</html>