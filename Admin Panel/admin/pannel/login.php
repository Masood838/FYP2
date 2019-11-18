<?php include 'loginscript.php'?>
<!DOCTYPE html>
<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <link href="../../dist/css/style.min.css" rel="stylesheet">
        
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
                <div class="auth-box">
                    <div id="loginform">
                        <div class="logo">
                            
                            <h5 class="font-medium m-b-20">Sign In to Admin</h5>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <form class="form-horizontal m-t-20" method="post" id="loginform" action="index.php">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <button  style = "border-radius:50px;"class="btn btn-block btn-lg btn-info" name="btn-login" formaction="loginscript.php" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="recoverform">
                        <div class="logo">
                            <span class="db"><img src="../../assets/images/logo-icon.png" alt="logo" /></span>
                            <h5 class="font-medium m-b-20">Recover Password</h5>
                            <span>Enter your Email and instructions will be sent to you!</span>
                        </div>
                        <div class="row m-t-20">
                          
                            <form class="col-12" action="index.html">
                              
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                                    </div>
                                </div>
                               
                                <div class="row m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
        });
        </script>
    </body>
</html>