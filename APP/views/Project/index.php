11

<!--<div class="col-md-12">-->
<!-- <div class="row">-->
<!--      <div class="col-md-3">-->
<!--                            <div class="block">-->
<!--                                <div class="block-content block-content-full">-->
<!--                                -->
<!--                                --><?// if($status['company'] === FALSE):?><!--  -->
<!---->
<!--                                    <div class="py-20 text-center">-->
<!--                                        <div class="mb-20">-->
<!--                                           <i class="fa fa-frown-o fa-4x text-danger"></i>-->
<!--                                        </div>-->
<!--                                        -->
<!--                                    --><?//if ($company['status'] == 2):?>
<!--                                        <div class="font-size-h4 font-w600"><div class="badge badge-danger">ЗВОНКИ НЕ ИДУТ</div></div>                                    			    <div class="text-muted">Выполните условия и запустите проект</div>            -->
<!--                                    --><?//endif;?>
<!---->
<!--                                    --><?//if ($company['status'] == 3):?>
<!--                                        <div class="font-size-h4 font-w600"><div class="badge badge-info">НЕ РАБОЧЕЕ ВРЕМЯ</div></div>   -->
<!--                                        <div class="text-muted">Звонки сегодня запрещены</div>         -->
<!--                                    --><?//endif;?>
<!--                                                                            -->
<!--                                    --><?//if ($company['status'] == 4):?>
<!--                                        <div class="font-size-h4 font-w600"><div class="badge badge-info">НЕ РАБОЧЕЕ ВРЕМЯ</div></div>   -->
<!--                                        <div class="text-muted">Звонки в данное время запрещены</div>         -->
<!--                                    --><?//endif;?>
<!--                                    -->
<!--                                    --><?//if ($company['status'] == 5):?>
<!--                                        <div class="font-size-h4 font-w600"><div class="badge badge-info">ДОСТИГНУТ ДНЕВНОЙ ЛИМИТ</div></div>   -->
<!--                                        <div class="text-muted">Достигнут дневной лимит</div>         -->
<!--                                    --><?//endif;?>
<!--                                                                                                                -->
<!--                                        -->
<!---->
<!--                                        <div class="pt-20">-->
<!--                                            <a href="/project/?id=--><?//=$_GET['id']?><!--&action=play" class="btn btn-hero btn-success" >-->
<!--                                                <i class="fa fa-play mr-5"></i> ЗАПУСК-->
<!--                                            </a>-->
<!--                                            -->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                  --><?//else:?>
<!--                                  <form action="/project/stop/" method="post">-->
<!--                                    <div class="py-20 text-center">-->
<!--                                        <div class="mb-20">-->
<!--                                           <i class="fa fa-check fa-4x text-success"></i>-->
<!--                                        </div>-->
<!--                                        <div class="font-size-h4 font-w600"><div class="badge badge-success">ПРОЕКТ АКТИВЕН</div></div>-->
<!--                                        <div class="text-muted">Статус проекта</div>-->
<!--                                        <div class="pt-20">-->
<!--                                            <a class="btn btn-sm btn-danger" id="pause" href="/project/?id=--><?//=$_GET['id']?><!--&action=stop">-->
<!--                                                <i class="fa fa-stop mr-5"></i> ОСТАНОВИТЬ ПРОЕКТ-->
<!--                                            </a>-->
<!--                                            -->
<!--                                        </div>-->
<!--                                    </div>                                  -->
<!--								</form>-->
<!--                                --><?//endif;?>
<!--                                -->
<!--                                    -->
<!--                                    -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        -->
<!--                        -->
<!--                        -->
<!--      <div class="col-md-3">-->
<!--                            <div class="block">-->
<!--                                <div class="block-content block-content-full">-->
<!--                                    <div class="py-20 text-center">-->
<!--                                       --><?// if($status['contact'] === FALSE):?>
<!--                                            <i class="fa fa-frown-o fa-4x text-danger"></i>-->
<!--                                        --><?//else:?>
<!--                                    	    <i class="fa fa-check fa-4x text-success"></i>-->
<!--                                        --><?//endif;?>
<!--                                        -->
<!--                                        <div class="font-size-h4 font-w600">Контактов --><?//=$contact['free']?><!-- шт.</div>-->
<!--                                        <div class="text-muted">Небходимо минимум <b>10</b> контактов</div>-->
<!--                                        <div class="pt-20">-->
<!--                                        -->
<!--                                            <a class="btn btn-success" href="project/loadbase/?id=--><?//=$_GET['id']?><!--">-->
<!--                                                <i class="fa fa-plus mr-5"></i> Добавить-->
<!--                                            </a>-->
<!--                                            -->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--               </div>-->
<!---->
<!---->
<!--      <div class="col-md-3">-->
<!--                            <div class="block">-->
<!--                                <div class="block-content block-content-full">-->
<!--                                    <div class="py-20 text-center">-->
<!--                                        <div class="mb-20">-->
<!--                                        --><?// if($status['balance'] === FALSE):?>
<!--                                            <i class="fa fa-frown-o fa-4x text-danger"></i>-->
<!--                                        --><?//else:?>
<!--                                    	    <i class="fa fa-check fa-4x text-success"></i>-->
<!--                                        --><?//endif;?>
<!--                                            -->
<!--                                        </div>-->
<!--                                        <div class="font-size-h4 font-w600">Баланс --><?//=$balnow?><!-- руб.</div>-->
<!--                                        <div class="text-muted">-->
<!--                                    <!--    Должно быть не менее <b>--><?//=$company['cfc']*($company['daylimit']/2)?><!--</b> руб.-->-->
<!--                                        </div>-->
<!--                                        <div class="pt-20">-->
<!--                                        -->
<!--                                            <a class="btn btn-success" href="/panel/balance/">-->
<!--                                                <i class="fa fa-check mr-5"></i> Пополнить-->
<!--                                            </a>-->
<!--                                            -->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--               </div>-->
<!--               -->
<!--       <div class="col-md-3">-->
<!--                            <div class="block">-->
<!--                                <div class="block-content block-content-full">-->
<!--                                    <div class="py-20 text-center">-->
<!--                                        <div class="mb-20">-->
<!--                                        -->
<!--                                        --><?// if($status['script'] === FALSE):?>
<!--                                            <i class="fa fa-frown-o fa-4x text-danger"></i>-->
<!--                                        --><?//else:?>
<!--                                    	    <i class="fa fa-check fa-4x text-success"></i>-->
<!--                                        --><?//endif;?>
<!--                                            -->
<!--                                            -->
<!--                                        </div>-->
<!--                                        <div class="font-size-h4 font-w600">Скрипт</div>-->
<!--                                        <div class="text-muted">Скрипт разговора должен быть проработан-->
<!--                                        -->
<!--                                        </div>-->
<!--                                        <div class="pt-20">-->
<!--                                        -->
<!--                                            <a class="btn btn-success" href="project/script/?id=--><?//=$_GET['id']?><!--">-->
<!--                                                <i class="fa fa-check mr-5"></i> Редактировать-->
<!--                                            </a>-->
<!--                                            -->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--               </div>-->
<!--               -->
<!--                             -->
<!--               -->
<!--               -->
<!-- -->
<!--                        -->
<!--                        -->
<!-- </div>  -->
<!-- -->
<!---->
<!---->
<!--                            -->
<!--                            -->
<!--                        </div>-->
<!--                        -->
<!--                        -->
<!--                        -->
<!--<hr>-->
<!---->
<!--<div class="row js-appear-enabled animated fadeIn" data-toggle="appear">-->
<!--                        <!-- Row #1 -->-->
<!--                        <div class="col-6 col-xl-3">-->
<!--                            <a class="block block-link-pop text-right bg-corporate-dark" href="project/record/?id=--><?//=$_GET['id']?><!--&data=--><?//=date("Y-m-d")?><!--">-->
<!--                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">-->
<!--                                    <div class="float-left mt-10 d-none d-sm-block">-->
<!--                                        <i class="si si-call-out fa-3x text-light"></i>-->
<!--                                    </div>-->
<!--                                    <div class="font-size-h3 font-w600 text-white js-count-to-enabled" data-toggle="countTo" data-speed="1" data-to="--><?//=$contact['today']?><!--">--><?//=$contact['today']?><!--</div>-->
<!--                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">ЗВОНКОВ</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>                                         -->
<!--           <div class="col-6 col-xl-3">-->
<!--                            <a class="block block-link-pop text-right bg-gd-pulse" >-->
<!--                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">-->
<!--                                    <div class="float-left mt-10 d-none d-sm-block">-->
<!--                                        <i class="si si-magnifier fa-3x text-light"></i>-->
<!--                                    </div>-->
<!--                                    <div class="font-size-h3 font-w600 text-white js-count-to-enabled" data-toggle="countTo" data-speed="1" data-to="--><?//=$result['moderation']?><!--">--><?//=$result['moderation']?><!--</div>-->
<!--                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">НА МОДЕРАЦИИ</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div> -->
<!--                        -->
<!--                        -->
<!---->
<?php //if ( ($type == '1') OR ($type == '2')) :?><!--  -->
<!--                        <div class="col-6 col-xl-3">-->
<!--                            <a class="block block-link-pop text-right bg-gd-earth" href="project/result/?id=--><?//=$_GET['id']?><!--&data=--><?//=date("Y-m-d")?><!--">-->
<!--                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">-->
<!--                                    <div class="float-left mt-10 d-none d-sm-block">-->
<!--                                        <i class="si si-target fa-3x text-light"></i>-->
<!--                                    </div>-->
<!--                                    <div class="font-size-h3 font-w600 text-white js-count-to-enabled" data-toggle="countTo" data-speed="1" data-to="--><?//=$result['today']?><!--">--><?//=$result['today']?><!--/--><?//=$company['daylimit']?><!--</div>-->
<!--                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">ЛИДОВ</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        -->
<!--   --><?php //endif; ?><!--                     -->
<!--     -->
<!--      --><?php //if ( ($type == '3') OR ($type == '4') OR ($type == '5')) :?><!--                   -->
<!--                         <div class="col-6 col-xl-3">-->
<!--                            <a class="block block-link-pop text-right bg-elegance" href="javascript:void(0)">-->
<!--                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">-->
<!--                                    <div class="float-left mt-10 d-none d-sm-block">-->
<!--                                        <i class="si si-info fa-3x text-light"></i>-->
<!--                                    </div>-->
<!--                                    <div class="font-size-h3 font-w600 text-white js-count-to-enabled" data-toggle="countTo" data-speed="1" data-to="--><?//=$result['today']?><!--">--><?//=$result['today']?><!--/--><?//=$company['daylimit']?><!--</div>-->
<!--                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">ИНФО/ОПРОС/АНКЕТЫ</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>                       -->
<!--                        --><?php //endif; ?><!-- -->
<!--                        -->
<!--                             <div class="col-6 col-xl-3">-->
<!--                            <a class="block block-link-pop text-right bg-elegance-light" >-->
<!--                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">-->
<!--                                    <div class="float-left mt-10 d-none d-sm-block">-->
<!--                                        <i class="fa fa-percent fa-3x text-light"></i>-->
<!--                                    </div>-->
<!--                                    <div class="font-size-h3 font-w600 text-white js-count-to-enabled" data-toggle="countTo" data-speed="1" data-to="--><?//=$convert?><!--">--><?//=$convert?><!--</div>-->
<!--                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">КОНВЕРСИЯ%</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div> -->
<!--                        -->
<!--                        -->
<!--                                                -->
<!---->
<!--                        -->
<!--                        -->
<!--                        <!-- END Row #1 -->-->
<!--                    </div>-->
<!--                      -->
<!--                        -->
<!---->
<!--<div class="panel panel-default">-->
<!--                                 -->
<!--     <div class="panel-body">-->
<!---->
<!--                                        -->
<!--                                        -->
<!--   <div class="panel-body">-->
<!--<table class="table table-bordered " >-->
<!--<tr>-->
<!--	<td><b>ВСЕГО ЗАГРУЖЕННО:</b></td>-->
<!--	<td>--><?//=$contact['all']?><!--</td>-->
<!--</tr>-->
<!---->
<!---->
<!--<tr>-->
<!--	<td><b>СВОБОДНЫХ:</b></td>-->
<!--	<td>--><?//=$contact['free']?><!--</td>-->
<!--</tr>-->
<!---->
<!--<tr>-->
<!--	<td><b>ОБРАБОТАННО:</b></td>-->
<!--	<td>--><?//=$contact['ready']?><!--</td>-->
<!--</tr>-->
<!---->
<!---->
<!--<tr>-->
<!--	<td>ПЕРЕЗВОНИТЬ ПОЗЖЕ:</td>-->
<!--	<td>--><?//=$contact['late']?><!--</td>-->
<!--</tr>-->
<!---->
<!--<tr>-->
<!--	<td>ОТКАЗ:</td>-->
<!--	<td>--><?//=$contact['otkaz']?><!-- <button class='btn btn-success' onclick="switchotkaz('--><?//=$idc?>//')" > <i class='fa fa-refresh'></i> ПОВТОРНО <i class='fa fa-refresh'></i></button></td>
//
//</tr>
//
//<tr>
//	<td>ТЕЛЕФОН НЕ ДОСТУПЕН:</td>
//	<td><?//=$contact['bezdostupa']?><!-- <button class='btn btn-success' onclick="switcnedostup('--><?//=$idc?>//')" > <i class='fa fa-refresh'></i> ПОВТОРНО <i class='fa fa-refresh'></i></button></td>
//</tr>
//<tr>
//	<td>ДУБЛИ:</td>
//	<td><button class='btn btn-danger' onclick="dubli('<?//=$idc?>//')" > <i class='fa fa-refresh'></i> УДАЛИТЬ ДУБЛИ ТЕЛЕФОНОВ <i class='fa fa-refresh'></i></button></td>
//</tr>
//
//<tr>
//	<td>УСПЕШНО ВСЕГО:</td>
//	<td><?//=$result['all']?><!--</td>-->
<!--</tr>-->
<!---->
<!---->
<!--</table>-->
<!---->
<!--<hr>-->
<!--</div>-->
<!--   -->
<!--	</div>-->
<!--</div>-->
<!---->
<!--	-->
<!--	-->
