<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Customer Relation Officer - Super Sukses Motor</title>
  <!-- <link rel="stylesheet" href="./style_v1.css"> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/cro.png">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_login/style_v1.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_login/style_ori.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_login/style_loading.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <script src="https://kit.fontawesome.com/ab00d86059.js" crossorigin="anonymous"></script>
    <form action="<?php echo base_url(); ?>C_login/aksilogin" method="post">
    <img class="wave" src="<?php echo base_url(); ?>assets/css_login/wave.png" alt="">
        <div class="container">
            <div class="img">
                <img src="<?php echo base_url(); ?>assets/css_login/user_login.svg" alt="">
            </div>
            <div class="login-container">
                <!-- <form action=""> -->
                    <!-- <img class="avatar" src="<?php echo base_url(); ?>assets/css_login/icon_user_v1.svg" alt=""> -->
                    <img class="avatar" src="<?php echo base_url(); ?>assets/logo/logo-ssm.png" alt="" style="width:240px;">
                    <h2 style="font-family: Indie Flower; color: #DD232B; height: 6%;">Welcome</h2>
                    <h3 style="font-family: Indie Flower; color: #DD232B;">Customer Relation Officer</h3>
                    <div style="height: 1%;"></div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user" style="color: red;"></i>
                        </div>
                        <div>
                            <h5>Username</h5>
                            <input class="input" type="text" name="user" required="" style="font-family: Indie Flower;" autofocus>
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock" style="color: red;"></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input class="input" type="password" name="pass" required="">
                        </div>
                    </div>
                    <!-- <a href="#">Forgot Pasword</a> -->
                    <input class="btn" type="submit" value="Login" style="font-family: Indie Flower;">
                <!-- </form> -->
            </div>
        </div>
    </form>
    <!-- <script src="<?php echo base_url(); ?>assets/css_login/jquery/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
</body>
<!-- partial -->
  <script src="<?php echo base_url(); ?>assets/css_login/script.js"></script>
  <!-- <script  src="./script.js"></script> -->

</body>
</html>
