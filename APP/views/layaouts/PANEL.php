<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php \APP\core\base\View::getMeta()?>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../../../../global_assets/js/main/jquery.min.js"></script>
    <script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../../../../global_assets/js/plugins/forms/wizards/steps.min.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/inputs/inputmask.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/validation/validate.min.js"></script>
    <script src="../../../../global_assets/js/plugins/extensions/cookie.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="../../../../global_assets/js/demo_pages/form_wizard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-xl rounded-top">

    <a href="/panel/" class="navbar-nav-link " >
        <img src="../../../../global_assets/images/dribbble.png" class="align-top mr-2 rounded" width="20" height="20" alt="">
        <b>CASHCALL.RU</b>
    </a>


    <div class="d-xl-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1-mobile">
            <i class="icon-grid3"></i>
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-demo1-mobile">



        <span class="navbar-text ml-xl-3">
   Операторов онлайн:  <span class="badge bg-success"><b>8</b></span>
        </span>

        <ul class="navbar-nav ml-xl-auto">

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles5"></i>
                    <span class="d-md-none ml-2">Мои сообщения</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-xl-0">1</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Сообщения</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">James Alexander</span>
                                            <span class="text-muted float-right font-size-sm">04:58</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>



                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="" data-original-title="Показать все"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>





            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span><?=$_SESSION['ulogin']['username']?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Мой профиль</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> Баланс</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Настройки аккаунта</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Выход</a>
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

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">


                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Прочитать FAQ
                </a>


                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Написать тикет
                </a>







            </div>
        </div>
    </div>


</div>



<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md align-self-start">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            <span class="font-weight-semibold">Main sidebar</span>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content nav-item-divider">
            <div class="card card-sidebar-mobile">


                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold"><?=$_SESSION['ulogin']['username']?></div>
                                <div class="font-size-xs opacity-50">
                                    <i class="fa fa-user font-size-sm"></i> Рекламодатель
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="/panel/profile/" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->

                <?php
                $active[$this->route['action']] = 'active';
                ?>



                <!-- Main navigation -->
                <div class="card-body p-0">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-sm line-height-sm">МОИ ПРОЕКТЫ</div>
                        </li>


                        <li class="nav-item">
                            <a href="/panel/" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>">
                                <i class="icon-home4"></i>
                                <span>	Проекты </span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="/panel/add" class="nav-link <?=isset($active['add']) ? $active['add'] : ''; ?>"><i class="icon-phone-plus"></i> <span>Добавить проект</span></a></li>
                        <!-- /main -->

                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-sm line-height-sm">ОБЗОР БИРЖИ</div>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-users4"></i>
                                <span>	Операторы </span>
                                <span class="badge badge-pill bg-secondary ml-auto">39</span>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-stats-growth"></i>
                                <span>	Проекты </span>
                                <span class="badge badge-pill bg-secondary ml-auto">1</span>
                            </a>
                        </li>





                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->






    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Wizard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="form_wizard.html" class="breadcrumb-item">Forms</a>
                        <span class="breadcrumb-item active">Wizard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Basic setup -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Basic example</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <form class="wizard-form steps-basic" action="#" data-fouc>
                    <h6>Personal data</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select location:</label>
                                    <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="North America">
                                            <option value="1">United States</option>
                                            <option value="2">Canada</option>
                                        </optgroup>
                                        <optgroup label="Latin America">
                                            <option value="3">Chile</option>
                                            <option value="4">Argentina</option>
                                            <option value="5">Colombia</option>
                                            <option value="6">Peru</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="8">Croatia</option>
                                            <option value="9">Hungary</option>
                                            <option value="10">Ukraine</option>
                                            <option value="11">Greece</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select position:</label>
                                    <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Developer Relations">
                                            <option value="1">Sales Engineer</option>
                                            <option value="2">Ads Solutions Consultant</option>
                                            <option value="3">Technical Solutions Consultant</option>
                                            <option value="4">Business Intern</option>
                                        </optgroup>

                                        <optgroup label="Engineering &amp; Design">
                                            <option value="5">Interaction Designer</option>
                                            <option value="6">Technical Program Manager</option>
                                            <option value="7">Software Engineer</option>
                                            <option value="8">Information Security Engineer</option>
                                        </optgroup>

                                        <optgroup label="Marketing &amp; Communications">
                                            <option value="13">Media Outreach Manager</option>
                                            <option value="14">Research Manager</option>
                                            <option value="15">Marketing Intern</option>
                                            <option value="16">Business Intern</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Applicant name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone #:</label>
                                    <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Date of birth:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="...">...</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1980</option>
                                                <option value="2">1981</option>
                                                <option value="3">1982</option>
                                                <option value="4">1983</option>
                                                <option value="5">1984</option>
                                                <option value="6">1985</option>
                                                <option value="7">1986</option>
                                                <option value="8">1987</option>
                                                <option value="9">1988</option>
                                                <option value="10">1989</option>
                                                <option value="11">1990</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your education</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>University:</label>
                                    <input type="text" name="university" placeholder="University name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="1">United States</option>
                                        <option value="2">France</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Spain</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree level:</label>
                                    <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Specialization:</label>
                                    <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Language of education:</label>
                                    <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your experience</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company:</label>
                                    <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Position:</label>
                                    <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brief description:</label>
                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Recommendations:</label>
                                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Additional info</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-block">Applicant resume:</label>
                                    <input type="file" name="resume" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Where did you find us?</label>
                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="monster">Monster.com</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="google">Google</option>
                                        <option value="adwords">Google AdWords</option>
                                        <option value="other">Other source</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Availability:</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            Immediately
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            1 - 2 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            3 - 4 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            More than 1 month
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Additional information:</label>
                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /basic setup -->


            <!-- Wizard with validation -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Wizard with validation</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <form class="wizard-form steps-validation" action="#" data-fouc>
                    <h6>Personal data</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select location: <span class="text-danger">*</span></label>
                                    <select name="location" data-placeholder="Select position" class="form-control form-control-select2 required" data-fouc>
                                        <option></option>
                                        <optgroup label="North America">
                                            <option value="1">United States</option>
                                            <option value="2">Canada</option>
                                        </optgroup>

                                        <optgroup label="Latin America">
                                            <option value="3">Chile</option>
                                            <option value="4">Argentina</option>
                                            <option value="5">Colombia</option>
                                            <option value="6">Peru</option>
                                        </optgroup>

                                        <optgroup label="Europe">
                                            <option value="8">Croatia</option>
                                            <option value="9">Hungary</option>
                                            <option value="10">Ukraine</option>
                                            <option value="11">Greece</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select position: <span class="text-danger">*</span></label>
                                    <select name="position" data-placeholder="Select position" class="form-control form-control-select2 required" data-fouc>
                                        <option></option>
                                        <optgroup label="Developer Relations">
                                            <option value="1">Sales Engineer</option>
                                            <option value="2">Ads Solutions Consultant</option>
                                            <option value="3">Technical Solutions Consultant</option>
                                            <option value="4">Business Intern</option>
                                        </optgroup>

                                        <optgroup label="Engineering &amp; Design">
                                            <option value="5">Interaction Designer</option>
                                            <option value="6">Technical Program Manager</option>
                                            <option value="7">Software Engineer</option>
                                            <option value="8">Information Security Engineer</option>
                                        </optgroup>

                                        <optgroup label="Marketing &amp; Communications">
                                            <option value="13">Media Outreach Manager</option>
                                            <option value="14">Research Manager</option>
                                            <option value="15">Marketing Intern</option>
                                            <option value="16">Business Intern</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Applicant name: <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control required" placeholder="John Doe">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address: <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control required" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone #:</label>
                                    <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Date of birth:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="...">...</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1980</option>
                                                <option value="2">1981</option>
                                                <option value="3">1982</option>
                                                <option value="4">1983</option>
                                                <option value="5">1984</option>
                                                <option value="6">1985</option>
                                                <option value="7">1986</option>
                                                <option value="8">1987</option>
                                                <option value="9">1988</option>
                                                <option value="10">1989</option>
                                                <option value="11">1990</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your education</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>University: <span class="text-danger">*</span></label>
                                    <input type="text" name="university" placeholder="University name" class="form-control required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="1">United States</option>
                                        <option value="2">France</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Spain</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree level: <span class="text-danger">*</span></label>
                                    <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control required">
                                </div>

                                <div class="form-group">
                                    <label>Specialization:</label>
                                    <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Language of education:</label>
                                    <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your experience</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company: <span class="text-danger">*</span></label>
                                    <input type="text" name="experience-company" placeholder="Company name" class="form-control required">
                                </div>

                                <div class="form-group">
                                    <label>Position: <span class="text-danger">*</span></label>
                                    <input type="text" name="experience-position" placeholder="Company name" class="form-control required">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brief description:</label>
                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Recommendations:</label>
                                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Additional info</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-block">Applicant resume:</label>
                                    <input type="file" name="resume" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Where did you find us? <span class="text-danger">*</span></label>
                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 required" data-fouc>
                                        <option></option>
                                        <option value="monster">Monster.com</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="google">Google</option>
                                        <option value="adwords">Google AdWords</option>
                                        <option value="other">Other source</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Availability: <span class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled required" data-fouc>
                                            Immediately
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            1 - 2 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            3 - 4 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            More than 1 month
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Additional information:</label>
                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /wizard with validation -->


            <!-- Saving state -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Saving wizard state</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <form class="wizard-form steps-state-saving" action="#" data-fouc>
                    <h6>Personal data</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select location:</label>
                                    <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="North America">
                                            <option value="1">United States</option>
                                            <option value="2">Canada</option>
                                        </optgroup>

                                        <optgroup label="Latin America">
                                            <option value="3">Chile</option>
                                            <option value="4">Argentina</option>
                                            <option value="5">Colombia</option>
                                            <option value="6">Peru</option>
                                        </optgroup>

                                        <optgroup label="Europe">
                                            <option value="8">Croatia</option>
                                            <option value="9">Hungary</option>
                                            <option value="10">Ukraine</option>
                                            <option value="11">Greece</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select position:</label>
                                    <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Developer Relations">
                                            <option value="1">Sales Engineer</option>
                                            <option value="2">Ads Solutions Consultant</option>
                                            <option value="3">Technical Solutions Consultant</option>
                                            <option value="4">Business Intern</option>
                                        </optgroup>

                                        <optgroup label="Engineering &amp; Design">
                                            <option value="5">Interaction Designer</option>
                                            <option value="6">Technical Program Manager</option>
                                            <option value="7">Software Engineer</option>
                                            <option value="8">Information Security Engineer</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Applicant name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone #:</label>
                                    <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Date of birth:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="...">...</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1980</option>
                                                <option value="2">1981</option>
                                                <option value="3">1982</option>
                                                <option value="4">1983</option>
                                                <option value="5">1984</option>
                                                <option value="6">1985</option>
                                                <option value="7">1986</option>
                                                <option value="8">1987</option>
                                                <option value="9">1988</option>
                                                <option value="10">1989</option>
                                                <option value="11">1990</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your education</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>University:</label>
                                    <input type="text" name="university" placeholder="University name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="1">United States</option>
                                        <option value="2">France</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Spain</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree level:</label>
                                    <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Specialization:</label>
                                    <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Language of education:</label>
                                    <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your experience</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company:</label>
                                    <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Position:</label>
                                    <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brief description:</label>
                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Recommendations:</label>
                                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Additional info</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-block">Applicant resume:</label>
                                    <input type="file" name="resume" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Where did you find us?</label>
                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="monster">Monster.com</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="google">Google</option>
                                        <option value="adwords">Google AdWords</option>
                                        <option value="other">Other source</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Availability:</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            Immediately
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            1 - 2 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            3 - 4 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            More than 1 month
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Additional information:</label>
                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /saving state -->


            <!-- Starting step -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Change starting step</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <form class="wizard-form steps-starting-step" action="#" data-fouc>
                    <h6>Personal data</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select location:</label>
                                    <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="North America">
                                            <option value="1">United States</option>
                                            <option value="2">Canada</option>
                                        </optgroup>

                                        <optgroup label="Latin America">
                                            <option value="3">Chile</option>
                                            <option value="4">Argentina</option>
                                            <option value="5">Colombia</option>
                                            <option value="6">Peru</option>
                                        </optgroup>

                                        <optgroup label="Europe">
                                            <option value="8">Croatia</option>
                                            <option value="9">Hungary</option>
                                            <option value="10">Ukraine</option>
                                            <option value="11">Greece</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select position:</label>
                                    <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Developer Relations">
                                            <option value="1">Sales Engineer</option>
                                            <option value="2">Ads Solutions Consultant</option>
                                            <option value="3">Technical Solutions Consultant</option>
                                            <option value="4">Business Intern</option>
                                        </optgroup>

                                        <optgroup label="Engineering &amp; Design">
                                            <option value="5">Interaction Designer</option>
                                            <option value="6">Technical Program Manager</option>
                                            <option value="7">Software Engineer</option>
                                            <option value="8">Information Security Engineer</option>
                                        </optgroup>

                                        <optgroup label="Marketing &amp; Communications">
                                            <option value="13">Media Outreach Manager</option>
                                            <option value="14">Research Manager</option>
                                            <option value="15">Marketing Intern</option>
                                            <option value="16">Business Intern</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Applicant name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone #:</label>
                                    <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Date of birth:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="...">...</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1980</option>
                                                <option value="2">1981</option>
                                                <option value="3">1982</option>
                                                <option value="4">1983</option>
                                                <option value="5">1984</option>
                                                <option value="6">1985</option>
                                                <option value="7">1986</option>
                                                <option value="8">1987</option>
                                                <option value="9">1988</option>
                                                <option value="10">1989</option>
                                                <option value="11">1990</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your education</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>University:</label>
                                    <input type="text" name="university" placeholder="University name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="1">United States</option>
                                        <option value="2">France</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Spain</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree level:</label>
                                    <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Specialization:</label>
                                    <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Language of education:</label>
                                    <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your experience</h6>
                    <fieldset data-step-start>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company:</label>
                                    <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Position:</label>
                                    <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brief description:</label>
                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Recommendations:</label>
                                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Additional info</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-block">Applicant resume:</label>
                                    <input type="file" name="resume" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Where did you find us?</label>
                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="monster">Monster.com</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="google">Google</option>
                                        <option value="adwords">Google AdWords</option>
                                        <option value="other">Other source</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Availability:</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            Immediately
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            1 - 2 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            3 - 4 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            More than 1 month
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Additional information:</label>
                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /starting step -->


            <!-- Starting step -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Enable all steps <span class="text-muted font-size-base ml-2">and make them clickable</span></h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <form class="wizard-form steps-enable-all" action="#" data-fouc>
                    <h6>Personal data</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select location:</label>
                                    <select name="location" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="North America">
                                            <option value="1">United States</option>
                                            <option value="2">Canada</option>
                                        </optgroup>

                                        <optgroup label="Latin America">
                                            <option value="3">Chile</option>
                                            <option value="4">Argentina</option>
                                            <option value="5">Colombia</option>
                                            <option value="6">Peru</option>
                                        </optgroup>

                                        <optgroup label="Europe">
                                            <option value="8">Croatia</option>
                                            <option value="9">Hungary</option>
                                            <option value="10">Ukraine</option>
                                            <option value="11">Greece</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select position:</label>
                                    <select name="position" data-placeholder="Select position" class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <optgroup label="Developer Relations">
                                            <option value="1">Sales Engineer</option>
                                            <option value="2">Ads Solutions Consultant</option>
                                            <option value="3">Technical Solutions Consultant</option>
                                            <option value="4">Business Intern</option>
                                        </optgroup>

                                        <optgroup label="Engineering &amp; Design">
                                            <option value="5">Interaction Designer</option>
                                            <option value="6">Technical Program Manager</option>
                                            <option value="7">Software Engineer</option>
                                            <option value="8">Information Security Engineer</option>
                                        </optgroup>

                                        <optgroup label="Marketing &amp; Communications">
                                            <option value="13">Media Outreach Manager</option>
                                            <option value="14">Research Manager</option>
                                            <option value="15">Marketing Intern</option>
                                            <option value="16">Business Intern</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Applicant name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone #:</label>
                                    <input type="text" name="tel" class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Date of birth:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="...">...</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="1">1980</option>
                                                <option value="2">1981</option>
                                                <option value="3">1982</option>
                                                <option value="4">1983</option>
                                                <option value="5">1984</option>
                                                <option value="6">1985</option>
                                                <option value="7">1986</option>
                                                <option value="8">1987</option>
                                                <option value="9">1988</option>
                                                <option value="10">1989</option>
                                                <option value="11">1990</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your education</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>University:</label>
                                    <input type="text" name="university" placeholder="University name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="1">United States</option>
                                        <option value="2">France</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Spain</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree level:</label>
                                    <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Specialization:</label>
                                    <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Language of education:</label>
                                    <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Your experience</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company:</label>
                                    <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Position:</label>
                                    <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>From:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>To:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="January">January</option>
                                                        <option value="...">...</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
                                                        <option value="1995">1995</option>
                                                        <option value="...">...</option>
                                                        <option value="1980">1980</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brief description:</label>
                                    <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="d-block">Recommendations:</label>
                                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h6>Additional info</h6>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="d-block">Applicant resume:</label>
                                    <input type="file" name="resume" class="form-input-styled" data-fouc>
                                    <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Where did you find us?</label>
                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                        <option></option>
                                        <option value="monster">Monster.com</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="google">Google</option>
                                        <option value="adwords">Google AdWords</option>
                                        <option value="other">Other source</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Availability:</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            Immediately
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            1 - 2 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            3 - 4 weeks
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                            More than 1 month
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Additional information:</label>
                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /starting step -->


            <!-- Remote content source -->
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Remote content source</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <form class="wizard-form steps-async" action="#" data-fouc>
                    <h6>Personal data</h6>
                    <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/personal_data.html"></fieldset>

                    <h6>Your education</h6>
                    <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/education.html"></fieldset>

                    <h6>Your experience</h6>
                    <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/experience.html"></fieldset>

                    <h6>Additional info</h6>
                    <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/additional.html"></fieldset>
                </form>
            </div>
            <!-- /remote content source -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content wrapper -->

</div>
<!-- /page content -->

</body>
</html>
