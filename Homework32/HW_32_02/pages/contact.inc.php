<?php 
    if( (isset($_POST["cont_name"])) && (isset($_POST["cont_email"])) && (isset($_POST["cont_message"]))) {

        $link = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'company');

        $contName = $_POST["cont_name"];
        $contEmail = $_POST["cont_email"];
        $contMessage = $_POST["cont_message"];

        $sql = "INSERT INTO contacts VALUES (NULL, '$contName' , '$contEmail' , '$contMessage');";
        
        mysqli_query($link, $sql);

        mysqli_close($link);
    }        
?>
<div class="container" style="margin-top: 70px !important;">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">
                        <i class="fas fa-user-circle fa-3x"></i></div>
                    <h3 style="text-align: center" class="pb-4">How Can We Help? </h3>
                    <form class="form-group" method="POST">
                        <input type="text" class="form-control" name="cont_name" placeholder="Your name">
                        <br>
                        <input type="email" class="form-control" name="cont_email" placeholder="Enter Email">
                        <br>
                        <textarea type="password" class="form-control" name="cont_message" placeholder="Message"></textarea>
                        <br>
                        <br>
                        <button class="btn btn-primary btn-block">Send message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>