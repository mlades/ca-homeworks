<?php
    $displayForm = True;
    $heading = "";
    
    if(isset($_POST['day'])){
        $heading =  "<h1>Pick a day</h1>" ;
        if ($_POST['day'] === "Monday") {
            $heading .= "<p>Laugh on Monday, laugh for danger.</p>";
        } elseif ($_POST['day'] === "Tuesday") {
            $heading .= "<p>Laugh on Tuesday, kiss a stranger.</p>";
        } elseif ($_POST['day'] === "Wednesday") {
            $heading .= "<p>Laugh on Wednesday, laugh for a letter.</p>";
        } elseif ($_POST['day'] === "Thursday") {
            $heading .= "<p>Laugh on Thursday, something better.</p>";
        } elseif ($_POST['day'] === "Friday") {
            $heading .= "<p>Laugh on Friday, laugh for sorrow.</p>";
        } elseif ($_POST['day'] === "Saturday") {
            $heading .= "<p>Laugh on Saturday, joy tomorrow.</p>";
        } else {
            $heading .= "<p>Pick another day";
        }
        $displayForm = False;
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