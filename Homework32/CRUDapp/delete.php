<?php 
// your code here
    $link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'crud_app');

    $delete = "DELETE FROM users where id = ".$_GET['id'];
    
    $result = mysqli_query($link, $delete);

    header('Location: ./index.php');
    mysqli_close($link);

?>