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
                            <a href="/panel/profile/"><img src="<?=$_SESSION['ulogin']['avatar']?>" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"><?=$_SESSION['ulogin']['username']?></div>
                            <div class="font-size-xs opacity-50">
                                <i class="fa fa-user font-size-sm"></i> <?=rendertypeaccount($_SESSION['ulogin']['role'])?>
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


                    <li class="nav-item">
                        <a href="/panel/" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>">
                            <i class="icon-home4"></i>
                            <span>	Статистика </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/panel/" class="nav-link <?=isset($active['my']) ? $active['my'] : ''; ?>">
                            <i class="icon-home4"></i>
                            <span>	Мои проекты </span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/panel/" class="nav-link <?=isset($active['all']) ? $active['all'] : ''; ?>">
                            <i class="icon-home4"></i>
                            <span>	Все проекты </span>
                        </a>
                    </li>

                    <!-- /main -->
                    <li class="nav-item-header">
                        <div class="text-uppercase font-size-sm line-height-sm">РЕЗУЛЬТАТЫ</div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-calendar"></i>
                            <span>	Перезвон </span>
                            <span class="badge badge-pill bg-secondary ml-auto">39</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-users4"></i>
                            <span>	На модерации </span>
                            <span class="badge badge-pill bg-secondary ml-auto">39</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-wrench"></i>
                            <span>	Доработка </span>
                            <span class="badge badge-pill bg-secondary ml-auto">1</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-stats-growth"></i>
                            <span>	Успешно </span>
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