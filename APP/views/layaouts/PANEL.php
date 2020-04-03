


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


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

    <script src="/assets/js/app.js"></script>
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


<!-- Page header -->
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
<!-- /page header -->




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

                <form class="wizard-form steps-basic wizard clearfix" action="#" data-fouc="" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0" class=""><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1" class="disabled"><span class="number">2</span> Your education</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2" class="disabled"><span class="number">3</span> Your experience</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3" class="disabled"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
                        <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Personal data</h6>
                        <fieldset id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select location:</label>
                                        <select name="location" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-location-g0-container"><span class="select2-selection__rendered" id="select2-location-g0-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select position:</label>
                                        <select name="position" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="6"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-pl-container"><span class="select2-selection__rendered" id="select2-position-pl-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="9"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-month-4k-container"><span class="select2-selection__rendered" id="select2-birth-month-4k-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="10" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="12"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-day-d5-container"><span class="select2-selection__rendered" id="select2-birth-day-d5-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Day</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="15"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-year-nd-container"><span class="select2-selection__rendered" id="select2-birth-year-nd-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-0-h-1" tabindex="-1" class="title">Your education</h6>
                        <fieldset id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
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
                                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="16" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="18"></option>
                                            <option value="1">United States</option>
                                            <option value="2">France</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Spain</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-university-country-cs-container"><span class="select2-selection__rendered" id="select2-university-country-cs-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="19" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="21"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="20" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-9n-container"><span class="select2-selection__rendered" id="select2-education-from-month-9n-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="22" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="24"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="23" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-u4-container"><span class="select2-selection__rendered" id="select2-education-from-year-u4-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="25" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="27"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="26" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-kq-container"><span class="select2-selection__rendered" id="select2-education-to-month-kq-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="28" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="30"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="29" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-yk-container"><span class="select2-selection__rendered" id="select2-education-to-year-yk-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

                        <h6 id="steps-uid-0-h-2" tabindex="-1" class="title">Your experience</h6>
                        <fieldset id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="31" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="33"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="32" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-qr-container"><span class="select2-selection__rendered" id="select2-education-from-month-qr-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="34" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="36"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="35" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-oz-container"><span class="select2-selection__rendered" id="select2-education-from-year-oz-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="37" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="39"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="38" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-5j-container"><span class="select2-selection__rendered" id="select2-education-to-month-5j-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="40" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="42"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="41" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-y1-container"><span class="select2-selection__rendered" id="select2-education-to-year-y1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <div class="uniform-uploader"><input name="recommendations" type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-0-h-3" tabindex="-1" class="title">Additional info</h6>
                        <fieldset id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Applicant resume:</label>
                                        <div class="uniform-uploader"><input type="file" name="resume" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Where did you find us?</label>
                                        <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="43" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="45"></option>
                                            <option value="monster">Monster.com</option>
                                            <option value="linkedin">LinkedIn</option>
                                            <option value="google">Google</option>
                                            <option value="adwords">Google AdWords</option>
                                            <option value="other">Other source</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="44" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-source-h4-container"><span class="select2-selection__rendered" id="select2-source-h4-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose an option...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Availability:</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                Immediately
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                1 - 2 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                3 - 4 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
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
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" class="btn btn-light disabled" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
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

                <form class="wizard-form steps-validation wizard clearfix" action="#" data-fouc="" role="application" id="steps-uid-5" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-5-t-0" href="#steps-uid-5-h-0" aria-controls="steps-uid-5-p-0" class=""><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-5-t-1" href="#steps-uid-5-h-1" aria-controls="steps-uid-5-p-1" class="disabled"><span class="number">2</span> Your education</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-5-t-2" href="#steps-uid-5-h-2" aria-controls="steps-uid-5-p-2" class="disabled"><span class="number">3</span> Your experience</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-5-t-3" href="#steps-uid-5-h-3" aria-controls="steps-uid-5-p-3" class="disabled"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
                        <h6 id="steps-uid-5-h-0" tabindex="-1" class="title current">Personal data</h6>
                        <fieldset id="steps-uid-5-p-0" role="tabpanel" aria-labelledby="steps-uid-5-h-0" class="body current" aria-hidden="false">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select location: <span class="text-danger">*</span></label>
                                        <select name="location" data-placeholder="Select position" class="form-control form-control-select2 required select2-hidden-accessible" data-fouc="" data-select2-id="46" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="48"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="47" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-location-ci-container"><span class="select2-selection__rendered" id="select2-location-ci-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select position: <span class="text-danger">*</span></label>
                                        <select name="position" data-placeholder="Select position" class="form-control form-control-select2 required select2-hidden-accessible" data-fouc="" data-select2-id="49" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="51"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="50" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-4i-container"><span class="select2-selection__rendered" id="select2-position-4i-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="52" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="54"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="53" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-month-79-container"><span class="select2-selection__rendered" id="select2-birth-month-79-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="55" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="57"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="56" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-day-81-container"><span class="select2-selection__rendered" id="select2-birth-day-81-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Day</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="58" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="60"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="59" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-year-bp-container"><span class="select2-selection__rendered" id="select2-birth-year-bp-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-5-h-1" tabindex="-1" class="title">Your education</h6>
                        <fieldset id="steps-uid-5-p-1" role="tabpanel" aria-labelledby="steps-uid-5-h-1" class="body" aria-hidden="true" style="display: none;">
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
                                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="61" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="63"></option>
                                            <option value="1">United States</option>
                                            <option value="2">France</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Spain</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="62" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-university-country-w2-container"><span class="select2-selection__rendered" id="select2-university-country-w2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="64" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="66"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="65" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-sq-container"><span class="select2-selection__rendered" id="select2-education-from-month-sq-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="67" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="69"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="68" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-ko-container"><span class="select2-selection__rendered" id="select2-education-from-year-ko-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="70" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="72"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="71" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-tr-container"><span class="select2-selection__rendered" id="select2-education-to-month-tr-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="73" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="75"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="74" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-qt-container"><span class="select2-selection__rendered" id="select2-education-to-year-qt-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

                        <h6 id="steps-uid-5-h-2" tabindex="-1" class="title">Your experience</h6>
                        <fieldset id="steps-uid-5-p-2" role="tabpanel" aria-labelledby="steps-uid-5-h-2" class="body" aria-hidden="true" style="display: none;">
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="76" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="78"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="77" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-d6-container"><span class="select2-selection__rendered" id="select2-education-from-month-d6-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="79" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="81"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="80" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-u0-container"><span class="select2-selection__rendered" id="select2-education-from-year-u0-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="82" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="84"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="83" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-55-container"><span class="select2-selection__rendered" id="select2-education-to-month-55-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="85" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="87"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="86" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-rm-container"><span class="select2-selection__rendered" id="select2-education-to-year-rm-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <div class="uniform-uploader"><input name="recommendations" type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-5-h-3" tabindex="-1" class="title">Additional info</h6>
                        <fieldset id="steps-uid-5-p-3" role="tabpanel" aria-labelledby="steps-uid-5-h-3" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Applicant resume:</label>
                                        <div class="uniform-uploader"><input type="file" name="resume" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Where did you find us? <span class="text-danger">*</span></label>
                                        <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 required select2-hidden-accessible" data-fouc="" data-select2-id="88" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="90"></option>
                                            <option value="monster">Monster.com</option>
                                            <option value="linkedin">LinkedIn</option>
                                            <option value="google">Google</option>
                                            <option value="adwords">Google AdWords</option>
                                            <option value="other">Other source</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="89" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-source-hg-container"><span class="select2-selection__rendered" id="select2-source-hg-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose an option...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Availability: <span class="text-danger">*</span></label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled required" data-fouc=""></span></div>
                                                Immediately
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                1 - 2 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                3 - 4 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
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
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" class="btn btn-light disabled" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
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

                <form class="wizard-form steps-state-saving wizard clearfix" action="#" data-fouc="" id="steps-uid-2" role="application"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-2-t-0" href="#steps-uid-2-h-0" aria-controls="steps-uid-2-p-0" class=""><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-2-t-1" href="#steps-uid-2-h-1" aria-controls="steps-uid-2-p-1" class="disabled"><span class="number">2</span> Your education</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-2-t-2" href="#steps-uid-2-h-2" aria-controls="steps-uid-2-p-2" class="disabled"><span class="number">3</span> Your experience</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-2-t-3" href="#steps-uid-2-h-3" aria-controls="steps-uid-2-p-3" class="disabled"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
                        <h6 id="steps-uid-2-h-0" tabindex="-1" class="title current">Personal data</h6>
                        <fieldset id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select location:</label>
                                        <select name="location" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="91" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="93"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="92" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-location-23-container"><span class="select2-selection__rendered" id="select2-location-23-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select position:</label>
                                        <select name="position" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="94" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="96"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="95" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-xn-container"><span class="select2-selection__rendered" id="select2-position-xn-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="97" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="99"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="98" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-month-lw-container"><span class="select2-selection__rendered" id="select2-birth-month-lw-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="100" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="102"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="101" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-day-7z-container"><span class="select2-selection__rendered" id="select2-birth-day-7z-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Day</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="103" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="105"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="104" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-year-ej-container"><span class="select2-selection__rendered" id="select2-birth-year-ej-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-2-h-1" tabindex="-1" class="title">Your education</h6>
                        <fieldset id="steps-uid-2-p-1" role="tabpanel" aria-labelledby="steps-uid-2-h-1" class="body" aria-hidden="true" style="display: none;">
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
                                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="106" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="108"></option>
                                            <option value="1">United States</option>
                                            <option value="2">France</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Spain</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="107" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-university-country-0r-container"><span class="select2-selection__rendered" id="select2-university-country-0r-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="109" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="111"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="110" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-m6-container"><span class="select2-selection__rendered" id="select2-education-from-month-m6-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="112" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="114"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="113" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-9e-container"><span class="select2-selection__rendered" id="select2-education-from-year-9e-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="115" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="117"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="116" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-sm-container"><span class="select2-selection__rendered" id="select2-education-to-month-sm-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="118" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="120"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="119" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-mr-container"><span class="select2-selection__rendered" id="select2-education-to-year-mr-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

                        <h6 id="steps-uid-2-h-2" tabindex="-1" class="title">Your experience</h6>
                        <fieldset id="steps-uid-2-p-2" role="tabpanel" aria-labelledby="steps-uid-2-h-2" class="body" aria-hidden="true" style="display: none;">
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="121" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="123"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="122" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-5c-container"><span class="select2-selection__rendered" id="select2-education-from-month-5c-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="124" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="126"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="125" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-v0-container"><span class="select2-selection__rendered" id="select2-education-from-year-v0-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="127" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="129"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="128" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-ga-container"><span class="select2-selection__rendered" id="select2-education-to-month-ga-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="130" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="132"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="131" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-bq-container"><span class="select2-selection__rendered" id="select2-education-to-year-bq-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <div class="uniform-uploader"><input name="recommendations" type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-2-h-3" tabindex="-1" class="title">Additional info</h6>
                        <fieldset id="steps-uid-2-p-3" role="tabpanel" aria-labelledby="steps-uid-2-h-3" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Applicant resume:</label>
                                        <div class="uniform-uploader"><input type="file" name="resume" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Where did you find us?</label>
                                        <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="133" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="135"></option>
                                            <option value="monster">Monster.com</option>
                                            <option value="linkedin">LinkedIn</option>
                                            <option value="google">Google</option>
                                            <option value="adwords">Google AdWords</option>
                                            <option value="other">Other source</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="134" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-source-eu-container"><span class="select2-selection__rendered" id="select2-source-eu-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose an option...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Availability:</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                Immediately
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                1 - 2 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                3 - 4 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
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
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" class="btn btn-light disabled" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
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

                <form class="wizard-form steps-starting-step wizard clearfix" action="#" data-fouc="" role="application" id="steps-uid-3"><div class="steps clearfix"><ul role="tablist"><li role="tab" aria-disabled="false" class="done first"><a id="steps-uid-3-t-0" href="#steps-uid-3-h-0" aria-controls="steps-uid-3-p-0"><span class="number">1</span> Personal data</a></li><li role="tab" aria-disabled="false" class="done"><a id="steps-uid-3-t-1" href="#steps-uid-3-h-1" aria-controls="steps-uid-3-p-1"><span class="number">2</span> Your education</a></li><li role="tab" class="current" aria-disabled="false" aria-selected="true"><a id="steps-uid-3-t-2" href="#steps-uid-3-h-2" aria-controls="steps-uid-3-p-2" class=""><span class="current-info audible">current step: </span><span class="number">3</span> Your experience</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-3-t-3" href="#steps-uid-3-h-3" aria-controls="steps-uid-3-p-3" class="disabled"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
                        <h6 id="steps-uid-3-h-0" tabindex="-1" class="title">Personal data</h6>
                        <fieldset id="steps-uid-3-p-0" role="tabpanel" aria-labelledby="steps-uid-3-h-0" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select location:</label>
                                        <select name="location" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="136" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="138"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="137" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-location-vt-container"><span class="select2-selection__rendered" id="select2-location-vt-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select position:</label>
                                        <select name="position" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="139" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="141"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="140" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-oa-container"><span class="select2-selection__rendered" id="select2-position-oa-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="142" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="144"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="143" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-month-js-container"><span class="select2-selection__rendered" id="select2-birth-month-js-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="145" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="147"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="146" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-day-28-container"><span class="select2-selection__rendered" id="select2-birth-day-28-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Day</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="148" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="150"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="149" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-year-y1-container"><span class="select2-selection__rendered" id="select2-birth-year-y1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-3-h-1" tabindex="-1" class="title">Your education</h6>
                        <fieldset id="steps-uid-3-p-1" role="tabpanel" aria-labelledby="steps-uid-3-h-1" class="body" aria-hidden="true" style="display: none;">
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
                                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="151" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="153"></option>
                                            <option value="1">United States</option>
                                            <option value="2">France</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Spain</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="152" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-university-country-lp-container"><span class="select2-selection__rendered" id="select2-university-country-lp-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="154" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="156"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="155" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-j2-container"><span class="select2-selection__rendered" id="select2-education-from-month-j2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="157" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="159"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="158" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-q8-container"><span class="select2-selection__rendered" id="select2-education-from-year-q8-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="160" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="162"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="161" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-15-container"><span class="select2-selection__rendered" id="select2-education-to-month-15-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="163" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="165"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="164" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-os-container"><span class="select2-selection__rendered" id="select2-education-to-year-os-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

                        <h6 id="steps-uid-3-h-2" tabindex="-1" class="title current">Your experience</h6>
                        <fieldset data-step-start="" id="steps-uid-3-p-2" role="tabpanel" aria-labelledby="steps-uid-3-h-2" class="body current" aria-hidden="false">
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="166" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="168"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="167" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-yq-container"><span class="select2-selection__rendered" id="select2-education-from-month-yq-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="169" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="171"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="170" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-0l-container"><span class="select2-selection__rendered" id="select2-education-from-year-0l-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="172" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="174"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="173" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-3x-container"><span class="select2-selection__rendered" id="select2-education-to-month-3x-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="175" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="177"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="176" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-aa-container"><span class="select2-selection__rendered" id="select2-education-to-year-aa-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <div class="uniform-uploader"><input name="recommendations" type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-3-h-3" tabindex="-1" class="title">Additional info</h6>
                        <fieldset id="steps-uid-3-p-3" role="tabpanel" aria-labelledby="steps-uid-3-h-3" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Applicant resume:</label>
                                        <div class="uniform-uploader"><input type="file" name="resume" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Where did you find us?</label>
                                        <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="178" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="180"></option>
                                            <option value="monster">Monster.com</option>
                                            <option value="linkedin">LinkedIn</option>
                                            <option value="google">Google</option>
                                            <option value="adwords">Google AdWords</option>
                                            <option value="other">Other source</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="179" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-source-ut-container"><span class="select2-selection__rendered" id="select2-source-ut-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose an option...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Availability:</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                Immediately
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                1 - 2 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                3 - 4 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
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
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li aria-disabled="false"><a href="#previous" class="btn btn-light" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
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

                <form class="wizard-form steps-enable-all wizard clearfix" action="#" data-fouc="" role="application" id="steps-uid-4"><div class="steps clearfix"><ul role="tablist"><li role="tab" aria-disabled="false" class="first current" aria-selected="true"><a id="steps-uid-4-t-0" href="#steps-uid-4-h-0" aria-controls="steps-uid-4-p-0"><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" aria-disabled="false"><a id="steps-uid-4-t-1" href="#steps-uid-4-h-1" aria-controls="steps-uid-4-p-1"><span class="number">2</span> Your education</a></li><li role="tab" aria-disabled="false"><a id="steps-uid-4-t-2" href="#steps-uid-4-h-2" aria-controls="steps-uid-4-p-2"><span class="number">3</span> Your experience</a></li><li role="tab" aria-disabled="false" class="last"><a id="steps-uid-4-t-3" href="#steps-uid-4-h-3" aria-controls="steps-uid-4-p-3"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
                        <h6 id="steps-uid-4-h-0" tabindex="-1" class="title current">Personal data</h6>
                        <fieldset id="steps-uid-4-p-0" role="tabpanel" aria-labelledby="steps-uid-4-h-0" class="body current" aria-hidden="false">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select location:</label>
                                        <select name="location" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="181" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="183"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="182" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-location-1k-container"><span class="select2-selection__rendered" id="select2-location-1k-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select position:</label>
                                        <select name="position" data-placeholder="Select position" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="184" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="186"></option>
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
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="185" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-qf-container"><span class="select2-selection__rendered" id="select2-position-qf-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select position</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <select name="birth-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="187" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="189"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="188" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-month-0z-container"><span class="select2-selection__rendered" id="select2-birth-month-0z-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-day" data-placeholder="Day" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="190" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="192"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="191" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-day-xf-container"><span class="select2-selection__rendered" id="select2-birth-day-xf-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Day</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="193" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="195"></option>
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
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="194" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-birth-year-ec-container"><span class="select2-selection__rendered" id="select2-birth-year-ec-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-4-h-1" tabindex="-1" class="title">Your education</h6>
                        <fieldset id="steps-uid-4-p-1" role="tabpanel" aria-labelledby="steps-uid-4-h-1" class="body" aria-hidden="true" style="display: none;">
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
                                        <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="196" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="198"></option>
                                            <option value="1">United States</option>
                                            <option value="2">France</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Spain</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="197" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-university-country-52-container"><span class="select2-selection__rendered" id="select2-university-country-52-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="199" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="201"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="200" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-wv-container"><span class="select2-selection__rendered" id="select2-education-from-month-wv-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="202" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="204"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="203" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-ht-container"><span class="select2-selection__rendered" id="select2-education-from-year-ht-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="205" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="207"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="206" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-8s-container"><span class="select2-selection__rendered" id="select2-education-to-month-8s-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="208" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="210"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="209" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-86-container"><span class="select2-selection__rendered" id="select2-education-to-year-86-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

                        <h6 id="steps-uid-4-h-2" tabindex="-1" class="title">Your experience</h6>
                        <fieldset id="steps-uid-4-p-2" role="tabpanel" aria-labelledby="steps-uid-4-h-2" class="body" aria-hidden="true" style="display: none;">
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
                                                        <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="211" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="213"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="212" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-month-ly-container"><span class="select2-selection__rendered" id="select2-education-from-month-ly-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="214" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="216"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="215" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-from-year-1o-container"><span class="select2-selection__rendered" id="select2-education-from-year-1o-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>To:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="217" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="219"></option>
                                                            <option value="January">January</option>
                                                            <option value="...">...</option>
                                                            <option value="December">December</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="218" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-month-kz-container"><span class="select2-selection__rendered" id="select2-education-to-month-kz-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="220" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="222"></option>
                                                            <option value="1995">1995</option>
                                                            <option value="...">...</option>
                                                            <option value="1980">1980</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="221" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-education-to-year-59-container"><span class="select2-selection__rendered" id="select2-education-to-year-59-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                        <div class="uniform-uploader"><input name="recommendations" type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6 id="steps-uid-4-h-3" tabindex="-1" class="title">Additional info</h6>
                        <fieldset id="steps-uid-4-p-3" role="tabpanel" aria-labelledby="steps-uid-4-h-3" class="body" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Applicant resume:</label>
                                        <div class="uniform-uploader"><input type="file" name="resume" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-blue" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Where did you find us?</label>
                                        <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="223" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="225"></option>
                                            <option value="monster">Monster.com</option>
                                            <option value="linkedin">LinkedIn</option>
                                            <option value="google">Google</option>
                                            <option value="adwords">Google AdWords</option>
                                            <option value="other">Other source</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="224" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-source-9e-container"><span class="select2-selection__rendered" id="select2-source-9e-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose an option...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Availability:</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                Immediately
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                1 - 2 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
                                                3 - 4 weeks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" name="availability" class="form-input-styled" data-fouc=""></span></div>
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
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" class="btn btn-light disabled" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
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

                <form class="wizard-form steps-async wizard clearfix" action="#" data-fouc="" role="application" id="steps-uid-1"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-1-t-0" href="#steps-uid-1-h-0" aria-controls="steps-uid-1-p-0" class=""><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-1-t-1" href="#steps-uid-1-h-1" aria-controls="steps-uid-1-p-1" class="disabled"><span class="number">2</span> Your education</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-1-t-2" href="#steps-uid-1-h-2" aria-controls="steps-uid-1-p-2" class="disabled"><span class="number">3</span> Your experience</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-1-t-3" href="#steps-uid-1-h-3" aria-controls="steps-uid-1-p-3" class="disabled"><span class="number">4</span> Additional info</a></li></ul></div><div class="content clearfix">
                        <h6 id="steps-uid-1-h-0" tabindex="-1" class="title current">Personal data</h6>
                        <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/personal_data.html" id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false" aria-busy="true"><div class="card-body text-center"><i class="icon-spinner2 spinner mr-2"></i>  Loading ...</div></fieldset>

                        <h6 id="steps-uid-1-h-1" tabindex="-1" class="title">Your education</h6>
                        <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/education.html" id="steps-uid-1-p-1" role="tabpanel" aria-labelledby="steps-uid-1-h-1" class="body" aria-hidden="true" style="display: none;"></fieldset>

                        <h6 id="steps-uid-1-h-2" tabindex="-1" class="title">Your experience</h6>
                        <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/experience.html" id="steps-uid-1-p-2" role="tabpanel" aria-labelledby="steps-uid-1-h-2" class="body" aria-hidden="true" style="display: none;"></fieldset>

                        <h6 id="steps-uid-1-h-3" tabindex="-1" class="title">Additional info</h6>
                        <fieldset data-mode="async" data-url="../../../../global_assets/demo_data/wizard/additional.html" id="steps-uid-1-p-3" role="tabpanel" aria-labelledby="steps-uid-1-h-3" class="body" aria-hidden="true" style="display: none;"></fieldset>
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" class="btn btn-light disabled" role="menuitem"><i class="icon-arrow-left13 mr-2"></i> Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" class="btn btn-primary" role="menuitem">Next <i class="icon-arrow-right14 ml-2"></i></a></li><li aria-hidden="true" style="display: none;"><a href="#finish" class="btn btn-primary" role="menuitem">Submit form <i class="icon-arrow-right14 ml-2"></i></a></li></ul></div></form>
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
						© 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
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




<!DOCTYPE html>


