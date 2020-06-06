<?php
  if(isset($_POST['submit'])){
    echo "Thanks for registration ".$_POST['name']."<br>";
    echo "Username: " .$_POST['username'] ."<br>";
    echo "Email: " .$_POST['email'] ."<br>";
    echo "Browswer: " .$_POST['browser'] ."<br>";
  }
?>

  