<?php
     setcookie("username", $_POST['userName'], time() - 3600);  
     header('Location: ./index.php');      
?>
