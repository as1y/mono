<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">БАЛАНС</h5>

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
                                <h3 class="font-weight-semibold mb-0"><?=\APP\core\base\Model::getBal()?></h3>
                                <span class="text-uppercase font-size-sm text-muted">РУБЛЕЙ</span>
                            </div>
                        </div>
                    </div>



            </div>

            <div class="col-md-3">

                <form method="post" action="https://payeer.com/merchant/">

                    <div class="form-group">
                        <input type="text" name="amount" placeholder="Сумма"  class="form-control">
                    </div>

                    <?php
                    $m_shop = '1009839670';
                    $m_orderid = '1';
                    $m_amount = number_format(100, 2, '.', '');
                    $m_curr = 'USD';
                    $m_desc = base64_encode('Test');
                    $m_key = 'Ваш секретный ключ';

                    $arHash = array(
                        $m_shop,
                        $m_orderid,
                        $m_amount,
                        $m_curr,
                        $m_desc
                    );

                    /*
                    $arParams = array(
                        'success_url' => 'http://cashcall.ru/new_success_url',
                        //'fail_url' => 'http://cashcall.ru/new_fail_url',
                        //'status_url' => 'http://cashcall.ru/new_status_url',
                        'reference' => array(
                            'var1' => '1',
                            //'var2' => '2',
                            //'var3' => '3',
                            //'var4' => '4',
                            //'var5' => '5',
                        ),
                        //'submerchant' => 'mail.com',
                    );

                    $key = md5('Ключ для шифрования дополнительных параметров'.$m_orderid);

                    $m_params = @urlencode(base64_encode(openssl_encrypt(json_encode($arParams), 'AES-256-CBC', $key, OPENSSL_RAW_DATA)));

                    $arHash[] = $m_params;
                    */

                    $arHash[] = $m_key;

                    $sign = strtoupper(hash('sha256', implode(':', $arHash)));
                    ?>

                    <input type="hidden" name="m_shop" value="<?=$m_shop?>">
                    <input type="hidden" name="m_orderid" value="<?=$m_orderid?>">
                    <input type="hidden" name="m_amount" value="<?=$m_amount?>">
                    <input type="hidden" name="m_curr" value="<?=$m_curr?>">
                    <input type="hidden" name="m_desc" value="<?=$m_desc?>">
                    <input type="hidden" name="m_sign" value="<?=$sign?>">
                    <input type="hidden" name="m_process" value="send" />

                    <button type="submit" class="btn btn-success"><i class="icon-plus-circle2 mr-2"></i>ПОПОЛНИТЬ БАЛАНС</button>

                </form>


            </div>

        <?php if ($_SESSION['ulogin']['role'] == "O"):?>

            <div class="col-md-3">
                <a href="/panel/cashout/" type="button" class="btn btn-warning"><i class="icon-credit-card mr-2"></i>Вывести средства</a>
            </div>
            <?php endif;?>



        </div>




        <table  class="table datatable-basic ">
            <thead>
            <tr>
                <th>ДАТА</th>
                <th>СУММА</th>
                <th>ТИП</th>
                <th>КОММЕНТАРИЙ</th>
                <th>СТАТУС</th>

            </tr>
            </thead>


            <tbody>


            <?php foreach ($balancelog as $key=>$val):?>

                <tr>
                    <td><?=$val['date']?></td>
                    <td><b><?=$val['sum']?></b></td>
                    <td><?=$val['type']?></td>
                    <td><?=$val['comment']?></td>
                    <td ><?=paystatus($val['status'])?></td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>



</div>
