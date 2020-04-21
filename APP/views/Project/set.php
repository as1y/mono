<form action="/project/set/?id=<?=$company['id']?>" method="post" data-fouc>


<div class="card">
    <div class="card-header bg-white header-elements-inline">
        <h5 class="card-title">ПРЕДЛОЖЕНИЕ ОПЕРАТОРАМ</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>

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

            <tr>
                <td class="wmin-md-100" ><b>Бонусы за звонки:</b></td>
                <td class="wmin-md-350">

                    <div class="form-group row">

                        <div class="col-md-6">
                            <label>Мин кол-во звонков:<span class="text-danger">*</span></label>

                            <div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
                                              <i class="icon-phone"></i>
                                                </span>
											</span>
                                <input type="text" name="mincall" value="<?=$company['mincall']?>" placeholder="100" value="100" class="form-control required">
                            </div>



                        </div>

                        <div class="col-md-6">
                            <label>Вознаграждение:<span class="text-danger">*</span></label>
                            <div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">РУБ.</span>
											</span>
                                <input type="text" name="bonuscall" value="<?=$company['bonuscall']?>" placeholder="500" class="form-control required" aria-invalid="false">
                            </div>

                        </div>


                    </div>


                </td>
            </tr>


            </tbody>
        </table>
    </div>
</div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">НАСТРОЙКИ ПРОЕКТА <?=$company['company']?></h5>
                </div>

                <div class="table-responsive">
                    <table class="table  table-bordered">
                        <tbody>
                        <tr>
                            <td class="wmin-md-100"><b>ЛОГОТИП:</b></td>
                            <td class="wmin-md-350">
                                <img src="<?=$company['logo']?>" height="100">
                            </td>
                        </tr>


                        <tr>
                            <td class="wmin-md-100"><b>НАЗВАНИЕ:</b></td>
                            <td class="wmin-md-350">
                                <?=$company['company']?>

                            </td>
                        </tr>

                        <tr>
                            <td class="wmin-md-100"><b>ID:</b></td>
                            <td class="wmin-md-350">
                                # <span id="idc"><?=$company['id']?></span>
                                <?=camstatus($company['status'],$company['id'] )?>
                            </td>
                        </tr>

                        <tr>
                            <td class="wmin-md-100" ><b>ЦЕЛЬ:</b></td>
                            <td class="wmin-md-350"><?=companytype($company['type'])?></td>
                        </tr>

                        <tr>
                            <td class="wmin-md-100" ><b>ВРЕМЯ ЗВОНКОВ:</b></td>
                            <td class="wmin-md-350">

                                <select name="timecall" class="form-control form-control-select2" data-fouc>
                                    <option value="standart" <?=$company['timecall'] == "standart" ? 'selected' : '';?>>Будние дни, рабочее время (09:00-19:00)</option>
                                    <option value="maximum" <?=$company['timecall'] == "maximum" ? 'selected' : '';?>>Будние дни, расширенное время (09:00-21:00)</option>
                                    <option value="ultra" <?=$company['timecall'] == "ultra" ? 'selected' : '';?>>Будни + выходные, расширенное время (09:00-21:00)</option>
                                </select>





                            </td>
                        </tr>
                        <tr>
                            <td class="wmin-md-100" ><b>E-MAIL:</b><br>для уведомлений</td>
                            <td class="wmin-md-350">
                                <input type="text" name="email" class="form-control" placeholder="E-mail" value="<?=$company['email']?>">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-md-6">2</div>

    </div>





    <input type="hidden" name="idc"  value="<?=$company['id']?>">
<button type="submit" class=" btn btn-warning"><i class="icon-pencil mr-2"></i> СОХРАНИТЬ ИЗМЕНЕНИЯ</button>
</form>