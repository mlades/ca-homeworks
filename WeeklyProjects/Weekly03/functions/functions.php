<?php  
    
    function registerUser($name, $userName, $pass) {
        $files =  'files';
        $msg = "";
        $location = $files."/".$name.".ini";
        if (!file_exists ($location)) {                
            $content = "Name= "  .$name . "\n"; 
            $content .= "User= " .$userName ."\n"; 
            $content .=  "Password= " .$pass ."\n";
            file_put_contents($location, $content);
            header('Location: ./index.php?id=login');
        } else {
            $msg = "User already registered!";
        } 
        return $msg;
    }

    function loginUser($name, $password){
        $files =  'files';
        $loginMsg = "";        
        $location = $files."/".$name.".ini";
               
        if (is_file($location) ) {
            $userData = file_get_contents($location);
            $regPass = base64_decode(substr($userData, strrpos($userData, ' ') + 1));
            $loginPass = base64_decode($password);
            if ($regPass === $loginPass) {
                setcookie("username", $_POST['userName'], time() + 3600); 
                header('Location: ./index.php?id=about');
            } else {
                $loginMsg = "Wrong password. Please try again";
            }
        } else {
            $loginMsg = "The user <b>".$name. "</b> is not registered!";
        }
        return $loginMsg;
    }

?>