<?php
      if(isset($_POST['loginButton']) && !empty($_POST['userName']) && !empty($_POST['userPass'])) {
        $msg = loginUser($_POST['userName'], base64_encode($_POST['userPass']));       
    }
?>
<div class="container" style="margin-top: 70px !important;">
    <div class="row">
      <div class="col-md-3 col-sm-12"></div>
      <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
        <div class="form">
          <div class="text-center py-4">
            <i class="fas fa-user-circle fa-3x"></i></div>
          <h3 style="text-align: center" class="pb-4">LOGIN</h3>
          <form class="form-group" method="POST" action="" >
            
            <input type="text" class="form-control" placeholder="Enter username" name="userName">
            <br>
            <input type="password" class="form-control" placeholder="Enter password" name="userPass">

            <div class="text-right mt-0"><a href="index.php?id=register" class="btn btn-default small">Register</a></div>
            <?php if(!empty($msg)) 
                echo  '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
            ?>
            <button class="btn btn-primary btn-block" name="loginButton">LOGIN</button>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-12"></div>
    </div>
</div>