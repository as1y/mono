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
            <div  class="sidebar-user align-self-center">
                <div class="card">
                    <a href="/master/"  class="btn btn-light"><i class="icon-square-left mr-2"></i> НАЗАД</a>
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
                        <div class="text-uppercase font-size-sm line-height-sm">РАБОЧАЯ ПАНЕЛЬ</div>
                    </li>


                    <li class="nav-item">
                        <a href="/project/?id=<?=$_GET['id']?>" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>">
                            <i class="icon-home4"></i>
                            <span>	Статистика </span>
                        </a>
                    </li>

                    <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                        <a href="#" class="nav-link">Level with child</a>
                        <ul class="nav nav-group-sub" style="">
                            <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                        </ul>
                    </li>
                    





                    <li class="nav-item">
                        <a href="/project/operator/?id=<?=$_GET['id']?>" class="nav-link <?=isset($active['operator']) ? $active['operator'] : ''; ?>">
                            <i class="icon-users4"></i>
                            <span>	Операторы </span>
                        </a>
                    </li>


                    <li class="nav-item-header">
                        <div class="text-uppercase font-size-sm line-height-sm">УПРАВЛЕНИЕ ПРОЕКТОМ</div>
                    </li>

                    <li class="nav-item">
                        <a href="/project/set/?id=<?=$_GET['id']?>" class="nav-link <?=isset($active['set']) ? $active['set'] : ''; ?>">
                            <i class="icon-cog3"></i>
                            <span>	Общие настройки </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/project/base/?id=<?=$_GET['id']?>" class="nav-link <?=isset($active['base']) ? $active['base'] : ''; ?>">
                            <i class="icon-database"></i>
                            <span>	База контактов </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/project/script/?id=<?=$_GET['id']?>" class="nav-link <?=isset($active['script']) ? $active['script'] : ''; ?>">
                            <i class="icon-file-text2"></i>
                            <span>	Скрипт разговора </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/project/resultform/?id=<?=$_GET['id']?>" class="nav-link <?=isset($active['resultform']) ? $active['resultform'] : ''; ?>">
                            <i class="icon-file-eye2"></i>
                            <span>	Форма результата </span>
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