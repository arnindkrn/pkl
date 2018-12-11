<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">
        <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/') ?>jquery-3.3.1.slim.min.js"></script>
        <script src="<?php echo base_url('assets/js/') ?>popper.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>bootstrap.min.css">
        <script src="<?php echo base_url('assets/js/') ?>bootstrap.min.js"></script>


        <title>Login</title>
<style>
    
body{
    margin: 0;
    padding: 0;
    background: url(pic1.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;

}

/*.responsive img{
    width: 340px;
    height: auto;
    padding: 20px 30px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}*/

.loginbox{
    width: 100%;
    height: 440px;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    /*top: 65%;
    left: 50%;*/
    position: absolute;
    /*transform: translate(-50%,-50%);*/
    box-sizing: border-box;
    margin-top: 60px;
    padding-top: 70px;
    padding-left: 30px;
    padding-right: 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    padding-left: 5px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: darkred;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: darkred;
}
</style>

    <body style="background-image: url(<?php echo base_url('assets/img/bg1.jpg')?>); height: 100%; background-position: center center; background-repeat:no-repeat; background-attachment: fixed; background-size:  cover;" >

        <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $_SESSION['login_error'] ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <?php endif ?>
              <?php unset($_SESSION['login_error']) ?>


        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="<?php echo base_url(); ?>dashboard"><span class="w-100"><img src="<?php echo base_url(); ?>assets/img/logo.png"></span></a>
                </div>
                <div class="col-4 offset-4">
                    
                    <div class="loginbox">
                    <img src="<?php echo base_url('assets/img/avatar.png')?>" class="avatar">
                        <h1>Masuk Admin</h1>
                        <form action="<?php echo base_url('Form/aksi_login'); ?>" method="post">
                            <p>Username</p>
                            <input type="text" name="username" placeholder="Enter Username">
                            <p>Kata Sandi</p>
                            <input type="password" name="password" placeholder="Enter Password">
                            <input type="submit" name="" value="Masuk">
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>

    </body>
    </head>
</html>