<?php 
// validate with isset() if $_POST variables name, email and message are set(exist)

// create a string of POST data in format  name | email | message use "\n" to create end of line in file
// for example: alex | alex@app.com | Hello this is my message 

// use file_put_contents()  to  save form data in file requests.txt  use FILE_APPEND to append to the file (not overwrite it)
// check documentation https://www.php.net/manual/en/function.file-put-contents.php for examples

// inform user with Echo that his request is saved and he will be contacted soon via email
$file = 'files/requests.txt';
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) ) {
    $userInput = $_POST["name"] .' | '. $_POST["email"] .' | '. $_POST["message"] . "\n" ;
    if(!file_get_contents($file)) {
        file_put_contents($file, $userInput); 
    } else {
        file_put_contents($file, $userInput , FILE_APPEND);
    }
    
    echo "The request is saved and you will be contacted soon via email";
} else {
    echo "Please fill all inputs";
}

?>