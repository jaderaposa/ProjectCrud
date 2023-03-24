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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=3d|fire-animation">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<style>

.card {
    background-color: rgb(0,0,0,0);
    backdrop-filter: blur(5px);
    border: 2px solid black;
}

input#email {
    background: transparent;
    border: none;
}

input#password {
    background: transparent;
    border: none;
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
                <form id="myForm" method="POST" action="registration.php" name="users">
                    <div class="parent" style="text-align: center;">
                    <div class="msg">Create an Account</div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email" required autofocus>
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
                    <div class="row" style="width: 100%;">
                        <div class="col-xs-8 p-t-5" style="width: 100%;">
                            <input type="checkbox" id="myCheckbox" name="myCheckbox" class="filled-in chk-col-pink">
                            <label for="myCheckbox"><b style="line-height: 18px;">I ACCEPT TO THE TERMS AND CONDITIONS FOR THE CREATION OF THIS ACCOUNT.</b></label>
                        </div>
                        <!-- <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="submit">ENTER</button>
                        </div> -->
                    </div>
                    <div class="row" style="display: flex;margin: 0;transform: translateX(-5px);">
                        <div class="box-1">
                            <button onClick="window.location.href='signin2.php';" type="button" class="btn btn-info" href="students2.php">Back</button>
                        </div>
                        <div class="box-2" style="transform: translateX(70px);">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="register" style="width: auto;">REGISTER</button>
                        </div>
                    </div>
                </form>
                <script>
                const form = document.querySelector('#myForm');
                const checkbox = document.querySelector('#myCheckbox');

                form.addEventListener('submit', (event) => {
                    if (!checkbox.checked) {
                    event.preventDefault();
                    alert('Please Agree to the Terms and Conditions before submitting.');
                    }
                });
                </script>
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