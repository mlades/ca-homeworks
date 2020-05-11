<?php
    $displayForm = True;
    $heading = "";
    $button = "";
    
    if(isset($_POST['day'])){
        $heading =  "<h1>Pick a day</h1>" ;
        switch ($_POST['day']) {
            case "Monday" :
                $heading .= "<p>Laugh on Monday, laugh for danger.</p>";
                break;
            case "Tuesday" :
                $heading .= "<p>Laugh on Tuesday, kiss a stranger.</p>";
                break;
            case "Wednesday" :
                $heading .= "<p>Laugh on Wednesday, laugh for a letter.</p>";
                break;
            case "Thursday" :
                $heading .= "<p>Laugh on Thursday, something better.</p>";
                break;
            case "Friday" :
                $heading .= "<p>Laugh on Friday, laugh for sorrow.</p>";
                break;
            case "Saturday" :
                $heading .= "<p>Laugh on Saturday, joy tomorrow.</p>";
                break;
            default:
            $heading .= "<p>Pick another day";
        }
        $button = '<input type="submit" name="submit" id="button" value="Back" onclick="history.back()"  ></input>';
        $displayForm = False;
    }
    echo $heading . $button  ; 
     
        
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

    <h1 id="h1">Pick a day</h1>
    <form action="" method="POST" >
        <p>Please choose your day:</p>
        <select name="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        
        <input type="submit" name="submit" id="button" value="Go" ></input>
    </form>

    <?php
         }
    ?>
    
</body>
</html>