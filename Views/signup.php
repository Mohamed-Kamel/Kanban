<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png">
    <title>KANBAN</title>

    <!-- CSS FILES -->
    <link href="./Views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Views/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="./Views/assets/css/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="login-page">
<div id="wrapper">
    <div class="container">
        <div class="row login-wrapper">
            <div class="col-md-6 col-md-offset-3">
                <div class="logo logo-center">
                    <a href="index.html"><img src="./Views/assets/images/logo.png" alt=""></a>
                </div>
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link"> <i class="fa fa-sign-in"></i> Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link"><i class="fa fa-user-plus"></i> Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--START LOGIN FORM-->
                                <form id="login-form" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1"
                                               class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2"
                                               class="form-control" placeholder="Password">
                                    </div>
                                    <!--<div class="form-group text-center">-->
                                    <!--<input type="checkbox" tabindex="3" class="" name="remember" id="remember">-->
                                    <!--<label for="remember">  &nbsp; Remember Me</label>-->
                                    <!--</div>-->

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" name="login" id="login"
                                                        class="form-control btn btn-default">
                                                    Login
                                                    Account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if (isset($data["errors"])) {
                                        $errors = $data["errors"];
                                        foreach ($errors as $error) {
                                            echo '<div class="alert alert-danger">' . $error . '</div>';
                                        }
                                    }
                                    ?>
                                </form>
                                <!--END LOGIN FORM-->


                                <!--START REGISTRATION FORM-->
                                <form id="register-form" action="" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1"
                                               class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control"
                                               placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2"
                                               class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password"
                                               tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" name="signup" id="signup"
                                                        class="form-control btn btn-default btn-block">
                                                    Register an Account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="signup-error" class="alert alert-danger"></div>
                                </form>
                                <!--END REGISTRATION FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end wrapper -->

<!--JAVASCRIPT FILES-->
<script src="./Views/assets/js/jquery.min.js"></script>
<script src="./Views/assets/js/bootstrap.min.js"></script>
<script src="./Views/assets/js/custom.js"></script>
<!--<script src="./Views/assets/js/login.js"></script>-->
<script>
    $("#signup-error").empty().hide();
    $("#signup").on("click", function (event) {
        event.preventDefault();

        var form = $("#register-form");
        var username = form.find("#username").val();
        var password = form.find("#password").val();
        var email = form.find("#email").val();
        var confirm_password = form.find("#confirm-password").val();

        $("#signup-error").empty();
        $.ajax({
            method: "POST",
            data: {
                "username": username,
                "email": email,
                "password": password,
                "confirm_password": confirm_password,
                "signup" : "signup"
            },
            success: function (data) {
                data = JSON.parse(data);
                if(data === true){
                    window.location.replace("");
                }
            },
            error: function (error) {
                error = error.responseText;
                error = JSON.parse(error);
                var list = "<ul>";
                for(var i=0; i < error.length; i++){
                    list+="<li>"+error[i]+"</li>";
                }
                $("#signup-error").append(list).show();
            }
        });
    });
</script>
</body>

</html>