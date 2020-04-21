<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md align-self-start">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
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
                        <a href="/operator/" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>">
                            <i class="icon-stats-bars"></i>
                            <span>	Статистика </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/operator/my/" class="nav-link <?=isset($active['my']) ? $active['my'] : ''; ?>">
                            <i class="icon-briefcase3"></i>
                            <span>	Мои проекты </span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/operator/all/" class="nav-link <?=isset($active['all']) ? $active['all'] : ''; ?>">
                            <i class="icon-star-full2"></i>
                            <span>	Все проекты </span>
                        </a>
                    </li>



                    <?php
                    $contact = \APP\core\base\Model::contact($_SESSION['ulogin']['id'], "user");
                    $result = \APP\core\base\Model::getres($_SESSION['ulogin']['id'], "user");

                    ?>


                    <!-- /main -->
                    <li class="nav-item-header">
                        <div class="text-uppercase font-size-sm line-height-sm">РЕЗУЛЬТАТЫ</div>
                    </li>
                    <li class="nav-item">
                        <a href="/operator/perezvon/" class="nav-link <?=isset($active['perezvon']) ? $active['perezvon'] : ''; ?>">
                            <i class="icon-calendar"></i>
                            <span>	Перезвон </span>
                            <span class="badge badge-pill bg-info ml-auto"><?=$contact['perezvon']?></span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/operator/moderate/" class="nav-link <?=isset($active['moderate']) ? $active['moderate'] : ''; ?>">
                            <i class="icon-eye"></i>
                            <span>	На модерации </span>
                            <span class="badge badge-pill bg-secondary ml-auto"><?=$result['moderation']?></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/operator/dorabotka/" class="nav-link <?=isset($active['dorabotka']) ? $active['dorabotka'] : ''; ?>">
                            <i class="icon-wrench"></i>
                            <span>	Доработка </span>

                            <span class="badge badge-pill bg-secondary ml-auto">0</span>


                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/operator/success/" class="nav-link <?=isset($active['success']) ? $active['success'] : ''; ?>">
                            <i class="icon-checkmark"></i>
                            <span>	Успешно </span>
                            <span class="badge badge-pill bg-success ml-auto"><?=$result['all']?></span>
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