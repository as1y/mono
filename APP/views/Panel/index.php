<?php

show($company);

?>


<?php foreach ($company as $row): ?>

    <div class="col-lg-12">

        <!-- Icon button -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title"><?=$company['name']?></h6>
                <div class="header-elements">
                    <button type="button" class="btn bg-success-400 btn-icon"><i class="icon-task"></i></button>
                </div>
            </div>

            <div class="card-body">
                Card header with single icon button
            </div>
        </div>
        <!-- /icon button -->


        <!-- Outline icon button -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Outline button</h6>
                <div class="header-elements">
                    <button type="button" class="btn btn-outline bg-pink-400 text-pink-400 border-pink-400 btn-icon border-2">
                        <i class="icon-checkmark3"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                Header with outline icon button
            </div>
        </div>
        <!-- /outline icon button -->


        <!-- Icon button dropdown -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Icon button dropdown</h6>
                <div class="header-elements">
                    <div class="btn-group">
                        <button type="button" class="btn bg-blue btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu6"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                Card header with icon button dropdown
            </div>
        </div>
        <!-- /icon button dropdown -->


        <!-- Segmented icon button -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Segmented icon button</h6>
                <div class="header-elements">
                    <div class="btn-group">
                        <button class="btn bg-danger-400 btn-icon"><i class="icon-accessibility"></i></button>
                        <button class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">One more separated line</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                Card header with segmented icon button
            </div>
        </div>
        <!-- /segmented icon button -->


        <!-- Multiple icon buttons -->
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Multiple icon buttons</h6>
                <div class="header-elements">
                    <button type="button" class="btn bg-blue btn-icon"><i class="icon-download"></i></button>
                    <button type="button" class="btn bg-pink-400 btn-icon ml-3"><i class="icon-upload"></i></button>
                </div>
            </div>

            <div class="card-body">
                Card headers with multiple icon buttons
            </div>
        </div>
        <!-- /multiple icon buttons -->

    </div>




<?php endforeach;?>



