<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php \APP\core\base\View::getMeta()?>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/global_assets/js/main/jquery.min.js"></script>
    <script src="/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-xl rounded-top">

    <a href="/panel/" class="navbar-nav-link " >
        <img src="/global_assets/images/dribbble.png" class="align-top mr-2 rounded" width="20" height="20" alt="">
        <b>CASHCALL.RU</b>
    </a>


    <div class="d-xl-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1-mobile">
            <i class="icon-grid3"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-demo1-mobile">



        <span class="navbar-text ml-xl-3">
   Операторов онлайн:  <span class="badge bg-success"><b>1</b></span>
        </span>

        <ul class="navbar-nav ml-xl-auto">




            <li class="nav-item dropdown dropdown-user">
                <a href="/panel/profile/" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span>Виктор</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/panel/profile/" class="dropdown-item"><i class="icon-user-plus"></i> Мой профиль</a>
                    <a href="/panel/refferal/" class="dropdown-item"><i class="icon-cash"></i> Партнерскся программа</a>

                    <a href="/panel/faq/" class="dropdown-item"><i class="icon-question3"></i> F.A.Q</a>

                    <a href="/panel/balance/" class="dropdown-item"><i class="icon-wallet"></i> Баланс</a>
                    <div class="dropdown-divider"></div>
                    <a href="/panel/settings/" class="dropdown-item"><i class="icon-cog5"></i> Настройки аккаунта</a>
                    <a href="/user/logout/" class="dropdown-item"><i class="icon-switch2"></i> Выход</a>
                </div>
            </li>




        </ul>
    </div>
</div>
<!-- /main navbar -->

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" action="index.html">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Your credentials</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" placeholder="Username">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
                                    Remember
                                </label>
                            </div>

                            <a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">or sign in with</span>
                        </div>

                        <div class="form-group text-center">
                            <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
                            <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
                            <button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
                            <button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
                        </div>

                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Don't have an account?</span>
                        </div>

                        <div class="form-group">
                            <a href="#" class="btn btn-light btn-block">Sign up</a>
                        </div>

                        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-dark">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2020 <b><a href="/panel/">CASHCALL.RU</a></b> - Биржа удаленных операторов на телефоне.
			</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="mailto: <?=CONFIG['BASEMAIL']['email']?>" class="navbar-nav-link" target="_blank"><i class="icon-mail-read mr-2"></i> <?=CONFIG['BASEMAIL']['email']?></a></li>


                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>








