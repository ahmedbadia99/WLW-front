<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Einloggen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                     <!--  <div class="text-center mb-4">
                            <a href="index.html">
                                <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">Symox</span>
                            </a>
                       </div>-->

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Herzlich willkommen !!</h5>
                                    <p class="text-muted">Loggen Sie sich ein, um zum Dashboard zu gelangen !</p>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert" style="display: none;">
                                    <i class="mdi mdi-alert-outline me-2"></i>
                                    Falsche E-Mail oder falsches Passwort!!!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="p-2 mt-4">
                                    <form>
        
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Benutzername Oder E-Mail</label>
                                            <input type="text" class="form-control" id="username" placeholder="Geben Sie Ihren Benutzernamen oder Ihre E-Mail-Adresse ein.">
                                        </div>
                
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="forget-password.php" class="text-muted">Passwort vergessen?</a>
                                            </div>
                                            <label class="form-label" for="userpassword">Passwort</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Geben Sie Ihr Passwort ein">
                                        </div>
                
                                        <!--<div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>-->
                                        
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" id="Login" type="submit">Einloggen</button>
                                        </div>

                                        <!--<div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 title">Sign in with</h5>
                                            </div>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->

                                       <!-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div>-->
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Rheinwunder Gmbh. <!-- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand --></p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        


        <script>
            
            $(document).ready(function(){
                $('#Login').click(function(e){
                    e.preventDefault();
                    var user=$('#username').val();
                    var pass=$('#userpassword').val();

                    $.ajax({
                                "url":"PHP/Login/login.php",
                                "method":"POST",
                                "data":{user:user,
                                Password:pass},
                                success:function(rep)
                                {
                                    //alert(rep);
                                    var Res=JSON.parse(rep);
                                    if(Res.length==0)
                                    {
                                        $("#alert").css("display","block");
                                    }
                                    else
                                    {
                                        //alert('Ok');
                                        window.location.href = "Apercu.php";
                                    }
                                    

                                }
                            });
                })
            })



        </script>

    </body>
</html>
