<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">БАЗА КОНТАКТОВ</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>

    <div class="card-body justify-content-center">

        <div class="panel panel-default">

            <div class="panel-body">



                <div class="panel-body">
                    <table class="table table-bordered " >
                        <tr>
                            <td><b>ВСЕГО ЗАГРУЖЕННО:</b></td>
                            <td><?=$contact['all']?></td>
                        </tr>


                        <tr>
                            <td><b>СВОБОДНЫХ:</b></td>
                            <td><?=$contact['free']?></td>
                        </tr>

                        <tr>
                            <td><b>ОБРАБОТАННО:</b></td>
                            <td><?=$contact['ready']?></td>
                        </tr>


                        <tr>
                            <td>ПЕРЕЗВОНИТЬ ПОЗЖЕ:</td>
                            <td><?=$contact['late']?></td>
                        </tr>

                        <tr>
                            <td>ОТКАЗ:</td>
                            <td><?=$contact['otkaz']?> <button class='btn btn-success' onclick="switchotkaz('<?=$idc?>')" > <i class='fa fa-refresh'></i> ПОВТОРНО <i class='fa fa-refresh'></i></button></td>

                        </tr>

                        <tr>
                            <td>ТЕЛЕФОН НЕ ДОСТУПЕН:</td>
                            <td><?=$contact['bezdostupa']?> <button class='btn btn-success' onclick="switcnedostup('<?=$idc?>')" > <i class='fa fa-refresh'></i> ПОВТОРНО <i class='fa fa-refresh'></i></button></td>
                        </tr>
                        <tr>
                            <td>ДУБЛИ:</td>
                            <td><button class='btn btn-danger' onclick="dubli('<?=$idc?>')" > <i class='fa fa-refresh'></i> УДАЛИТЬ ДУБЛИ ТЕЛЕФОНОВ <i class='fa fa-refresh'></i></button></td>
                        </tr>

                        <tr>
                            <td>УСПЕШНО ВСЕГО:</td>
                            <td><?=$result['all']?></td>
                        </tr>


                    </table>

                    <hr>
                </div>

            </div>
        </div>




    </div>


</div>

