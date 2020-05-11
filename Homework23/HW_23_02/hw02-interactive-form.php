<?php
    $displayForm = True;
    if(isset($_POST['city'])){
        echo "
                <h1>Favorite City</h1>
                <p>Your favorite city is ".$_POST['city']." </p>
            " ;
        $displayForm = False;
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

    <h1 id="h1">Favorite City</h1>
    <form action="" method="POST" >
        <p>Please enter your favorite city:</p>
        <input name="city" type="text" id="cityName"></input>
        <input type="submit" name="submit" id="button" value="Go"></input>
    </form>

    <?php
         }
    ?>
</body>
</html>