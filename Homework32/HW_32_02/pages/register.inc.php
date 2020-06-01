<?php
    $msg = "";
    if(isset($_POST['registerButton']) && isset($_POST['name']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        if ($_POST['password'] === $_POST['confirm_password']) {

            $link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'company');

            $name = $_POST["name"];
            $login = $_POST["login"];
            $password = base64_encode($_POST["password"]);

            $query = mysqli_query($link, "SELECT * FROM users WHERE login_name='".$login."'");
            
            if(mysqli_num_rows($query) > 0){            
                $msg = "username already registered";
            }else{
                $sql = "INSERT INTO users VALUES (NULL, '$name' , '$login' , '$password');";        
                mysqli_query($link, $sql);
               
            }

            mysqli_close($link);           

        } else {
            $msg = 'The two passwords must match!';              
        }
        
    }
?>
<div class="container" style="margin-top: 70px !important;">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">
                        <i class="fas fa-user-circle fa-3x"></i></div>
                    <h3 style="text-align: center" class="pb-4">Register </h3>
                    <form class="form-group" method="POST" action="">
                        <input type="text" class="form-control" name="name" placeholder="Your name">
                        <br>
                        <input type="text" class="form-control" name="login" placeholder="Login Name">
                        <br>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"></input>
                        <br>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password"></input>
                        <br>
                        <?php if(!empty($msg)) 
                           echo  '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
                        ?>
                        <br>
                        <button class="btn btn-primary btn-block" name="registerButton">Register</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>

<script>
    var pass = document.querySelector("#password");
    var passConf = document.querySelector("#confirm_password");

    passConf.addEventListener('change', validatePass);

    function validatePass() {
        if(pass.value !== passConf.value) {
            alert("The two passwords must match");
        }
    }
</script>