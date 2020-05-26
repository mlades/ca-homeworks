<?php 

include 'functions.php';
$title = isset($_GET['id']) ? ucfirst($_GET['id']) : "Contacts";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<?php
        if(isset($_GET['id'])) {
            switch ($_GET['id']){
                case "create": {               
                 include 'pages/create.inc.php';
                 break;
             }
             case "update": {                 
                 include 'pages/update.inc.php';
                 break;
             }
             case "delete": {              
                 include 'pages/delete.inc.php';
                 break;             
             }
             default: {                 
                 include 'pages/read.inc.php';
                 break;
             }
            }
        } else {
           include 'pages/read.inc.php';
        }
    ?>
</body>
</html>