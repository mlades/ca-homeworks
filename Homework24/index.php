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
          <?php
            makeSelect();
          ?>
        <input type="submit" name="submit" id="button" value="Go" ></input>
    </form>
   
</body>
</html>