<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Баланс</h5>

    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-3">


                    <div class="card card-body">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-wallet icon-3x text-success-400"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="font-weight-semibold mb-0"><?=$_SESSION['ulogin']['bal']?></h3>
                                <span class="text-uppercase font-size-sm text-muted">РУБЛЕЙ</span>
                            </div>
                        </div>
                    </div>


                <a href="/panel/viewticket/?id=3" type="button" class="btn btn-success"><i class="icon-plus-circle2 mr-2"></i>ПОПОЛНИТЬ БАЛАНС</a>

            </div>
            <div class="col-md-3 align-self-center">
            </div>
        </div>


        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Имя Фамилия</th>
                <th>Дата</th>
                <th>Сообщение</th>
                <th>Кол-во</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($dialogsinfo as $key=>$val):?>

                <tr>

                    <td>

                        <?php
                        $sobesednik =   \APP\models\Panel::lookingsobesednik($val);
                        ?>

                        <img src="<?=$sobesednik['avatar']?>" width="38" height="38" class="rounded-circle" alt="">
                        <a class="breadcrumb-elements-item" href="<?=generateprofilelink($sobesednik)?>" target="_blank"><?=$sobesednik['username']?></a>
                    </td>

                    <td class="text-center">
                        <?=$val['date']?>
                    </td>


                    <td class="text-center">
                        <?=$val['zagolovok']?>
                    </td>


                    <td class="text-center">


                        <?php
                        if (empty($val['messages'])) {
                            $val['messages'] = [];
                            $countv = 0;
                        }else{
                            $countv = count(json_decode($val['messages'], true));
                        }




                        ?>

                        <a href="/panel/messages/?idd=<?=$val['id']?>" class="badge bg-dark badge-pill"><?=$countv?> </a>

                        <?php if ($val['uvedomlenie'] == $_SESSION['ulogin']['id']):?>
                            <span class="badge badge-danger">NEW</span>
                        <?php endif;?>


                    </td>
                    <td class="text-center">
                        <a href="/panel/messages/?idd=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>ОТВЕТИТЬ</a>
                    </td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>

       
    </div>



</div>
