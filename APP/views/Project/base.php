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


        <div class="table-responsive">
            <table class="table  table-bordered">
                <tbody>

                <tr>
                    <td class="wmin-md-100"><b>Вознаграждение за цель:</b></td>
                    <td class="wmin-md-350">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>ОПЛАТА ЗА ЦЕЛЬ:<span class="text-danger">*</span></label>

                                <div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">РУБ.</span>
											</span>
                                    <input type="text" name="priceresult" placeholder="500" value="<?=$company['priceresult']?>" class="form-control required" aria-invalid="false">
                                </div>



                            </div>

                            <div class="col-md-6">
                                <label>Лимит в день:<span class="text-danger">*</span></label>
                                <div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">ШТ.</span>
											</span>
                                    <input type="text" name="daylimit" placeholder="50" value="<?=$company['daylimit']?>" class="form-control required" aria-invalid="false">
                                </div>

                            </div>

                        </div>






                    </td>
                </tr>







                </tbody>
            </table>
        </div>



    </div>


</div>

