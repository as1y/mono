<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ЗАЯВКА НА ВЫВОД</h5>

    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <form action="/panel/cashout/?action=viplata" method="post">
                К выводу доступно <b><?=\APP\core\base\Model::getBal()?></b> рублей <br>
                <hr>

                <div class="form-group">
                    <label>СУММА <span class="text-danger">*</span></label>
                    <input type="text" name="summa" placeholder="Сумма на вывод" class="form-control">
                </div>

                <div class="form-group">
                    <label>Способ вывода: <span class="text-danger">*</span> </label>
                    <select data-placeholder="Выберите способ вывода" name="sposob" class="form-control form-control-select2 required" data-fouc>

                        <?php

                        foreach ($requis as $key=>$val){

                            if (empty($val)) continue;

                            if ($key == "qiwi") $name = "QIWI";
                            if ($key == "yamoney") $name = "Яндекс.Деньги";
                            if ($key == "card") $name = "Карта банка";
                            ?>

                            <option  value="<?=$key?>" ><?=$name."-".$val?></option>

                        <?php


                        }

                            ?>









                    </select>

                </div>

                <button type="submit"  class="btn btn-success"><i class="icon-credit-card mr-2"></i>ЗАКАЗАТЬ ВЫВОД</button>
                </form>
            </div>




            <div class="col-md-6">
                <h2>МОИ РЕКВИЗИТЫ</h2>

                <form action="/panel/cashout/?action=changerequis" method="post">
                <div class="form-group">
                    <label>QIWI</label>
                    <input type="text" name="qiwi" value="<?=(empty($requis['qiwi'])) ? "" : $requis['qiwi'] ?>" placeholder="Введите ваш QIWI" class="form-control">
                </div>

                <div class="form-group">
                    <label>Яндекс.Деньги</label>
                    <input type="text"  name="yamoney" value="<?=(empty($requis['yamoney'])) ? "" : $requis['yamoney'] ?>" placeholder="Введите ваш Яндекс.Деньги" class="form-control">
                </div>

                <div class="form-group">
                    <label>Номер карты</label>
                    <input type="text"  name="card" value="<?=(empty($requis['card'])) ? "" : $requis['card'] ?>"  placeholder="Введите ваш Номер карты" class="form-control">
                </div>

                <button  type="submit" class="btn btn-warning"><i class="icon-checkmark mr-2"></i>СОХРАНИТЬ РЕКВИЗИТЫ</button>


                </form>

            </div>


        </div>





    </div>



</div>
