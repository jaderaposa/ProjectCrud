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
    <link rel="icon" href="../../xbox.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- another animate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Google Font Effect -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=3d">
    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<style>

.card.animate__animated.animate__fadeIn.animate__delay-1s {
    background-color: rgba(0, 0, 0, 0);
    border: 2px solid #333;
    backdrop-filter: blur(5px);
}

.col-xs-6 p b a:hover {
    color: red;
}

.col-xs-6.align-right a:hover {
    color: red;
}

</style>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a class="font-effect-3d animate__animated animate__heartBeat animate__infinite animate__slower" href="javascript:void(0);">Jaded<b>BootStrapMaster</b></a>
            <!-- <small>Jade BootStrap Based Game</small> -->
        </div>  
        <div class="card animate__animated animate__fadeIn animate__delay-1s"> 
            <div class="body">
            <!-- <div id="blur"></div> -->
                <form method="POST" action="login.php" name="users">
                    <div class="msg" style="font-size: 15px;text-align: center;">Sign In to Initiate Bootstrap Sequence</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line fire-animation">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required style="background:transparent; border:none;">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required style="background:transparent; border:none;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme"><b>Remember My Account</b></label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="submit">ENTER</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <p><b>No Account Yet?<br>Click&nbsp;<a href="signup2.php" style="font-weight: bolder;">Here</a>&nbsp;To Register</b></p>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html"><b>Forgot Your Password?</b></a>
                        </div>

                        <?php
                        // if(isset($_SESSION["error"])){
                        //     $error = $_SESSION["error"];
                        //     echo "<span>$error</span>";
                        // }
                        ?>  
                    </div>
                </form>
            </div>
        </div>
    </div>

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