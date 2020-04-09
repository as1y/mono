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

    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/demo_pages/login.js"></script>
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


            <li>
                <div class="mb-3 mb-xl-0 ml-xl-auto">


                    <?php if($this->route['action'] == "index"): ?>
                    <a href="/user/register/" type="button" class="btn btn-success"><i class="icon-user-plus mr-2"></i> Регистрация</a>
                    <?php endif;?>

                    <?php if($this->route['action'] == "register"): ?>
                        <a href="/user/" type="button" class="btn btn-success"><i class="icon-circle-right2 mr-2"></i> Войти</a>
                    <?php endif;?>




                </div>
            </li>



        </ul>
    </div>
</div>
<!-- /main navbar -->

<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">

                <?php \APP\core\base\View::getBreadcrumbs();?>

            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        
    </div>


</div>


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <?php if(isset($_SESSION['errors'])): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                <span class="font-weight-semibold">Ошибка!</span> <br><?=$_SESSION['errors']; unset($_SESSION['errors']);?>
            </div>
        <?php endif;?>

        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                <span class="font-weight-semibold">Успех!</span> <?=$_SESSION['success']; unset($_SESSION['success']);?>
            </div>

        <?php endif;?>
        
        <!-- Content area -->
        <div class="content d-flex justify-content-center ">




            <?=$content?>

        </div>
        <!-- /content area -->


    </div>
    <!-- /main content -->

</div>
<!-- /page content -->



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


</body>
</html>








