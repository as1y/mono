<!doctype html>
<!--[if lte IE 9]>         <html lang="ru" class="lt-ie10 lt-ie10-msg no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="ru" class="no-focus"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<?php \APP\core\base\View::getMeta();?>
	<meta name="robots" content="noindex, nofollow">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<base href="/">
	<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
	<link rel="stylesheet" id="css-theme" href="assets/css/themes/corporate.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
	<script src="assets/js/core/jquery.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
</head>
<body>
<div id="page-container" class="sidebar-o side-scroll page-header-modern sidebar-inverse page-header-inverse">
    <nav id="sidebar">
        <div id="sidebar-scroll">
            <div class="sidebar-content">
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                	<div class="content-header-item">



						<a  href="/project/">



                            <div class="content-header-item">


                                <i class="si si-call-out text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark"> <?=NAME?></span>

                            </div>

						</a>



                    </div>
                </div>
                <div class="content-side content-side-full content-side-user px-10 align-parent">
                    <div class="sidebar-mini-visible-b align-v animated fadeIn">
                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar0.jpg" alt="">
                    </div>
                    <div class="sidebar-mini-hidden-b text-center">
                        <a class="img-link" href="panel/">
                            <img class="img-avatar" src="assets/img/avatars/avatar0.jpg" alt="">
                        </a>
                        <ul class="list-inline mt-10">
							<li class="list-inline-item"><b>Тех. поддержка:</b></li>
							<li class="list-inline-item"><i class="si si-phone"></i> +7(495)128-89-46</li>
                        </ul>
                    </div>
                </div>
                <div class="content-side content-side-full">
                	<span class="sidebar-mini-hidden"><b>ПРОЕКТ:</b> <?=$company['name']?></span> 
					<hr>
					<?$active[$this->route['action']] = 'class="active"';?>
                    <ul class="nav-main">
                        <li>
                            <a <?=isset($active['index']) ? $active['index'] : ''; ?> href="project/?id=<?=$_GET['id']?>">
                                <i class="si si-cup"></i>
                                <span class="sidebar-mini-hide">Сводка</span>
                            </a>
                        </li>
                        <li>
                            <a <?=isset($active['result']) ? $active['result'] : ''; ?>  href="project/result/?id=<?=$_GET['id']?>">
                                <i class="si si-target"></i>
                                <span class="sidebar-mini-hide">Результаты</span>
                            </a>
                        </li>
                        <li>
                            <a <?=isset($active['set']) ? $active['set'] : ''; ?>  href="project/set/?id=<?=$_GET['id']?>">
                                <i class="fa fa-sliders"></i>
                                <span class="sidebar-mini-hide">Настройки</span>
                            </a>
                        </li>
                        <li>
                            <a <?=isset($active['kasting']) ? $active['kasting'] : ''; ?>  href="project/kasting/?id=<?=$_GET['id']?>">
                                <i class="fa fa-users"></i>
                                <span class="sidebar-mini-hide">Кастинг операторов</span>
                            </a>
                        </li>
                        <li>
                            <a <?=isset($active['operator']) ? $active['operator'] : ''; ?>  href="project/operator/?id=<?=$_GET['id']?>">
                                <i class="fa fa-users"></i>
                                <span class="sidebar-mini-hide">Операторы</span>
                            </a>
                        </li>
                        <li>
                            <a <?=isset($active['record']) ? $active['record'] : ''; ?>  href="project/record/?id=<?=$_GET['id']?>">
                                <i class="fa fa-microphone"></i>
                                <span class="sidebar-mini-hide">Все записи</span>
                            </a>
                        </li>
                        <li>
                            <a <?=isset($active['loadbase']) ? $active['loadbase'] : ''; ?>  href="project/loadbase/?id=<?=$_GET['id']?>">
                                <i class="fa fa-upload"></i>
                                <span class="sidebar-mini-hide">Загрузка контактов</span>
                            </a>
                        </li>                         
                        <li>
                            <a <?=isset($active['script']) ? $active['script'] : ''; ?>  href="project/script/?id=<?=$_GET['id']?>">
                                <i class="fa fa-info-circle"></i>
                                <span class="sidebar-mini-hide">Скрипт разговора</span>
                            </a>
                        </li>                                                                 
                        <li>
                            <a <?=isset($active['resultform']) ? $active['resultform'] : ''; ?>  href="project/resultform/?id=<?=$_GET['id']?>">
                                <i class="fa fa-key"></i>
                                <span class="sidebar-mini-hide">Форма результата</span>
                            </a>
                        </li>
                        <? if(isset($_SESSION['ulogin']['woof']) && $_SESSION['ulogin']['woof']=="1"):?>  
                        <li>
                            <a <?=isset($active['moder']) ? $active['moder'] : ''; ?>  href="project/moder/?id=<?=$_GET['id']?>">
                                <i class="fa fa-user-secret"></i>
                                <span class="sidebar-mini-hide">Модератор</span>
                            </a>
                        </li>
                        <?endif;?>  
						<hr>
						<li>
                            <a href="/panel/">
                                <i class="si si-logout"></i>
                                <span class="sidebar-mini-hide">ВЕРНУТЬСЯ</span>
                            </a>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main id="main-container">
        <div class="content">
            <div class="block block-themed">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title"><?=$razdel?> - <?=$company['name']?></h3>
                    <div class="block-options">
						<a class="btn btn-sm btn-secondary" href="/panel/"><i class="si si-logout mr-5"></i> Панель управления</a>
                    </div>
                </div>
                <div class="block-content"><?=$content?></div>
            </div>
        </div>
    </main>
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
				Служба поддержки: <b><a class="font-w600" href="mailto:info@cplplatform.com" target="_blank"><?=BASEMAIL?></a></b>
            </div>
            <div class="float-left">
               <a class="font-w600" href="#" target="_blank"><?=NAME?></a> &copy; <span class="js-year-copy"></span>
            </div>
        </div>
    </footer>
</div>
<script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/codebase.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/ckeditor/ckeditor.js"></script>
<script src="script_rumgo.js?240318"></script>
<script>
    jQuery(function () {
        Codebase.helpers(['datepicker']);
    });
</script>
</body>
</html>