<?php

//show($statuscall);

?>


<div class="card text-center">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h6 class="card-title">МОЙ СТАТУС:  <b><?= $statuscall['text']?></b></h6>

    </div>
    <div class="card-body">


        <?php
        if ($statuscall['acess'] === false){
            renderacesscall($statuscall);
        }
        ?>

        <?php ?>



        <?php if($statuscall['acess'] === true): ?>

        <div class="row">

            <?php foreach ($mycompanies as $key=>$val):?>

                <div class="col-md-4">
                    <?php
                    $mystatus = \APP\models\Operator::mystatusincompany($val);
                    $add = "";
                    if ($mystatus == 1) $add = "bg-secondary";
                    ?>
                    <div class="card text-center <?=$add?>">
                        <div class="card-body">
                            <h1><?=$val['company']?></h1>

                            <img src="<?=$val['logo']?>" width="100" height="50"><hr>

                            <table width="100%" border="1">
                                <tr>
                                    <td>Цель звонка</td>
                                    <td><?=companytype($val['type'])?></td>
                                </tr>

                                <tr>
                                    <td>Оплата</td>
                                    <td> <b> <?=$val['priceresult']?> руб.</b></td>
                                </tr>

                                <tr>
                                    <td>Бонусы</td>
                                    <td>   За <?=$val['mincall']?> звонков <b> <?=$val['bonuscall']?> руб.</b></td>
                                </tr>

                            </table>
                            <hr>


                            <?php renderstatus($mystatus, $val['id']) ?>


                        </div>
                    </div>
                </div>
            <?php endforeach;?>




        </div>

        <?php endif; ?>



    </div>
</div>