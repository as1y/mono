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
                        <div class="text-uppercase font-size-sm line-height-sm">УПРАВЛЕНИЕ ПРОЕКТОМ</div>
                    </li>


                    <li class="nav-item">
                        <a href="/panel/" class="nav-link <?=isset($active['index']) ? $active['index'] : ''; ?>">
                            <i class="icon-home4"></i>
                            <span>	Статистика </span>
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