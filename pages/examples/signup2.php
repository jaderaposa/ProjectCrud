<!DOCTYPE html>
<?php
    include "connect2.php";
    session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Jade BootStrap Based Game</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Jaded<b>BootStrapMaster</b></a>
            <small>Jade BootStrap Based Game</small>
        </div>
        <div class="card"> 
            <div class="body">
            <!-- <div id="blur"></div> -->
                <form method="POST" action="#" name="users">
                    <div class="parent" style="text-align: center;">
                    <div class="msg">SIGN UP!</div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Your Preferred Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Preferred Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">check</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Your Password" required>
                        </div>
                    </div>
                    <div class="row" style="display: flex;">
                        <div class="box-1">
                            <button onClick="window.location.href='students2.php';" type="button" class="btn btn-info" href="students2.php">Back</button>
                        </div>
                        <div class="box-2" style="transform: translateX(70px);">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="register" style="width: auto;">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<style>

.box-1, .box-2 {
    width: 50%;
    padding: 1rem;
    box-sizing: border-box;
    }

</style>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-in.js"></script>
</body>

</html>

<?php
    // unset($_SESSION["error"]);
?> 