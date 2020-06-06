<?php 
//Create array of browsers
$browsers=array(
  "Firefox",
  "Chrome",
  "Internet Explorer",
  "Safari",
  "Opera",
  "Other" 
);
// import Select class
include "Select.php";
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>
 <h2>User Registration - Browser<br /></h2>
 
<?php
//If form not submitted, display form.
if(!isset($_POST['submit'])){
?>
 
<form method="post" action="registered.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php
//Instantiate object.
$browser = new Select();
//Set properties.
$browser->setName('browser');
$browser->setValue($browsers);
//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
$browser->makeSelect();

?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
 }
 
?>
 </body>
 </html>
 