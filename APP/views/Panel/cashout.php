<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ЗАЯВКА НА ВЫВОД</h5>

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

                <a href="/panel/cashout/" type="button" class="btn btn-warning"><i class="icon-credit-card mr-2"></i>Вывести средства</a>

            </div>


            <div class="col-md-6">

                <div class="form-group">
                    <label>QIWI</label>
                    <input type="qiwi"    placeholder="QIWI" class="form-control">
                </div>

                <div class="form-group">
                    <label>Яндекс.Деньги</label>
                    <input type="yandexmoney"   placeholder="Яндекс.Деньги" class="form-control">
                </div>


                <button  type="button" class="btn btn-warning"><i class="icon-checkmark mr-2"></i>СОХРАНИТЬ РЕКВИЗИТЫ</button>




            </div>


        </div>





    </div>



</div>
