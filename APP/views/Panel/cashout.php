<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ЗАЯВКА НА ВЫВОД</h5>

    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <form action="/panel/cashout/" method="post">
                К выводу доступно <b><?=\APP\core\base\Model::getBal()?></b> рублей <br>
                <hr>

                <div class="form-group">
                    <label>СУММА</label>
                    <input type="text" name="qiwi" placeholder="QIWI" class="form-control">
                </div>

                <div class="form-group">
                    <label>СПОСОБ: <span class="text-danger">*</span> </label>
                    <select data-placeholder="Выберете направление" name="role" class="form-control form-control-select2 required" data-fouc>

                        <option <?= ($_SESSION['ulogin']['role'] == "O") ? 'selected' : ""?> value="O" >Оператор</option>
                        <option <?= ($_SESSION['ulogin']['role'] == "R") ? 'selected' : ""?> value="R" >Рекламодатель</option>
                    </select>

                </div>

                <button type="submit"  class="btn btn-success"><i class="icon-credit-card mr-2"></i>ЗАКАЗАТЬ ВЫВОД</button>
                </form>
            </div>




            <div class="col-md-6">

                <?php
               unset($_SESSION['ulogin']['requis']);
               if (empty($_SESSION['ulogin']['requis']))  $_SESSION['ulogin']['requis'] = '[{}]';

//               show($_SESSION['ulogin']['requis']);

                $requis = json_decode($_SESSION['ulogin']['requis'], true);


                ?>


                <form action="/panel/cashout/" method="post">
                <div class="form-group">
                    <label>QIWI</label>
                    <input type="text" name="qiwi" placeholder="QIWI" class="form-control">
                </div>

                <div class="form-group">
                    <label>Яндекс.Деньги</label>
                    <input type="text"  name="yamoney"  placeholder="Яндекс.Деньги" class="form-control">
                </div>

                <div class="form-group">
                    <label>Номер карты</label>
                    <input type="text"  name="card"  placeholder="Номер карты" class="form-control">
                </div>

                <button  type="submit" class="btn btn-warning"><i class="icon-checkmark mr-2"></i>СОХРАНИТЬ РЕКВИЗИТЫ</button>


                </form>

            </div>


        </div>





    </div>



</div>
