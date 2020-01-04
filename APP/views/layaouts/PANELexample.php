<!doctype html>
<!--[if lte IE 9]>         <html lang="ru" class="lt-ie10 lt-ie10-msg no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="ru" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<?php \APP\core\base\View::getMeta()?>


        <meta name="robots" content="noindex, nofollow">
        <base href="/">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/codebase/css/codebase.min.css">
         <link rel="stylesheet" id="css-theme" href="assets/codebase/css/themes/corporate.min.css">
       <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
          
    	<script src="assets/codebase/js/core/jquery.min.js"></script>
        <script src="assets/codebase/js/core/popper.min.js"></script>
        <script src="assets/codebase/js/core/bootstrap.min.js"></script>
        <!-- END Stylesheets -->

    </head>
    <body>

        <div id="page-container" class="sidebar-inverse side-scroll page-header-inverse page-header-fixed main-content-boxed">


            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Logo -->
                        <div class="content-header-item" style="padding-top: 15px;">
                        
                            <a  href="/panel/">


                        </a>
                            
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->


                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">

                        
<?
$active[$this->route['action']] = 'class="active"';
?>
                 
                        <ul class="nav-main-header">
                         <li>
                                    <a <?=isset($active['index']) ? $active['index'] : ''; ?>  href="/panel/index/">
                                        <i class="si si-cup"></i>
                                        <span class="sidebar-mini-hide">Мои проекты</span>
                                    </a>
                                </li>
                                
  
  
                                    <li>
                                    <a <?=isset($active['add']) ? $active['add'] : ''; ?>  href="/panel/add/">
                                        <i class="si si-plus"></i>
                                        <span class="sidebar-mini-hide">Добавить проект</span>
                                    </a>
                                </li>
                                
                                  <li>
                                    <a <?=isset($active['profile']) ? $active['profile'] : ''; ?> href="/panel/profile">
                                        <i class="fa fa-user"></i>
                                        <span class="sidebar-mini-hide">Профиль</span>
                                    </a>
                                </li>
                                
                                
                                 <li>
                                    <a <?=isset($active['help']) ? $active['help'] : ''; ?> href="/panel/help">
                                        <i class="si si-question"></i>
                                        <span class="sidebar-mini-hide">Поддержка</span>
                                       
                                    </a>
                                </li>
                                
    

                                
                                <li>
                                    <a href="/user/logout/">
                                        <i class="si si-logout"></i>
                                        <span class="sidebar-mini-hide">Выход</span>
                                    </a>
                                </li>     
                                
                                
                                                                       
                            
                        </ul>
                        


                        <!-- END Header Navigation -->
                    </div>
                    <!-- END Middle Section -->
                    <!-- Right Section -->
                    <div class="content-header-section">
                                <a href ="/panel/balance" class="btn btn-success min-width-125">Баланс</a>
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

  



            </header>
            <!-- END Header -->
            




            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content content-full">
                
                
                   <!-- Dummy content -->
                    <div class="row">

                        <div class="col-12">
                            <div class="block">
                                <div class="block-content">
                                
        <?php if(isset($_SESSION['errors'])): ?>
              <div class="alert alert-danger alert-dismissable" role="alert">
               <h3 class="alert-heading font-size-h4 font-w400">Ошибка!</h3>
              <p class="mb-0"> <?=$_SESSION['errors']; unset($_SESSION['errors']);?> </p>
               </div>
                <?php endif;?>
                
        <?php if(isset($_SESSION['success'])): ?>
              <div class="alert alert-success alert-dismissable" role="alert">
               <h3 class="alert-heading font-size-h4 font-w400">Успешно!</h3>
              <p class="mb-0"> <?=$_SESSION['success']; unset($_SESSION['success']);?> </p>
               </div>
                <?php endif;?>
                                
                
                
                
                                       <?=$content?>
                                 
                                 
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- END Dummy content -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
     Служба поддержки: <b><a class="font-w600" href="mailto:<?=CONFIG['BASEMAIL']['email']?>" target="_blank"><?=CONFIG['BASEMAIL']['email']?></a></b>
                    </div>
                    <div class="float-left">
	                    Ваш ID: <?=$_SESSION["ulogin"]['id'];?><br>
                        <a class="font-w600" href="#" target="_blank">RUMGO</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->

        <script src="/assets/codebase/js/core/jquery.slimscroll.min.js"></script>
        <script src="/assets/codebase/js/core/jquery.scrollLock.min.js"></script>
        <script src="/assets/codebase/js/core/jquery.appear.min.js"></script>
        <script src="/assets/codebase/js/core/jquery.countTo.min.js"></script>
        <script src="/assets/codebase/js/core/js.cookie.min.js"></script>
        <script src="/assets/codebase/js/codebase.js"></script>


    			<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>





    </body>
</html>
