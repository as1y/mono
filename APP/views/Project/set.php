<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">НАСТРОЙКИ ПРОЕКТА <?=$company['company']?></h5>
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



<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">НАСТРОЙКИ ОФФЕРА ОПЕРАТОРАМ <?=$company['company']?></h5>
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
                <td class="wmin-md-100"><b>ОПЛАТА ЗА ЦЕЛЬ:</b></td>
                <td class="wmin-md-350">
                    <?=$company['company']?>

                </td>
            </tr>


            <tr>
                <td class="wmin-md-100"><b>ЛИМИТ В ДЕНЬ:</b></td>
                <td class="wmin-md-350">
                    # <span id="idc"><?=$company['id']?></span>
                    <?=camstatus($company['status'],$company['id'] )?>
                </td>
            </tr>

            <tr>
                <td class="wmin-md-100" ><b>Мин. кол-во звонков за смену:</b></td>
                <td class="wmin-md-350"><?=companytype($company['type'])?></td>
            </tr>

            <tr>
                <td class="wmin-md-100" ><b>Вознаграждение за звонки:</b></td>
                <td class="wmin-md-350">

                    <select name="timecall" class="form-control form-control-select2" data-fouc>
                        <option value="standart" <?=$company['timecall'] == "standart" ? 'selected' : '';?>>Будние дни, рабочее время (09:00-19:00)</option>
                        <option value="maximum" <?=$company['timecall'] == "maximum" ? 'selected' : '';?>>Будние дни, расширенное время (09:00-21:00)</option>
                        <option value="ultra" <?=$company['timecall'] == "ultra" ? 'selected' : '';?>>Будни + выходные, расширенное время (09:00-21:00)</option>
                    </select>





                </td>
            </tr>




            </tbody>
        </table>
    </div>
</div>





<div class="row">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">ОБЩАЯ ИНФОРМАЦИЯ <?=$company['name']?></h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">



                    <tr>
                        <td><b>ОПЛАТА ЗА РЕЗУЛЬТАТ:</b></td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-xsmall" id="cfc"  value="<?=$company['cfc']?>">
                                        <span class="input-group-addon">РУБ</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

					<tr>
						<td><b>ЛИМИТ:</b></td>
						<td>
							<div class="row">
								<div class="col-4">
									<div class="input-group">
										<span class="input-group-addon">В ДЕНЬ</span>
										<input type="text" class="form-control input-xsmall" id="daylimit" value="<?=$company['daylimit']?>">
									</div>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td><b>Ограничение количества<br> операторов на проекте:</b></td>
						<td>
							<div class="row">
								<div class="col-4">
									<div class="input-group">
										<input type="text" class="form-control input-xsmall" id="count_operator" placeholder="по умолчанию: 20" value="<?=$company['countoperator']?>">
									</div>
								</div>
							</div>
						</td>
					</tr>



					<tr>
						<td><b>ДОПУСК ОПЕРАТОРОВ НА ПРОЕКТ:</b></td>
						<td>
							<label class="css-control css-control-danger css-radio">
								<input type="radio" class="css-control-input" name="moder" value="rumgo" <?=$company['moder'] == "rumgo" ? 'checked' : '';?>>
								<span class="css-control-indicator"></span> 
								<?=NAME?> (рекомендуется)
							</label>
							<label class="css-control css-control-danger css-radio">
								<input type="radio" class="css-control-input" name="moder" value="self"  <?=$company['moder'] == "self" ? 'checked' : '';?> >
								<span class="css-control-indicator"></span> 
								Самостоятельно
							</label>
							<label class="css-control css-control-danger css-radio">
								<input type="radio" class="css-control-input" name="moder" value="closed"  <?=$company['moder'] == "closed" ? 'checked' : '';?> >
								<span class="css-control-indicator"></span> 
								Набор закрыт
							</label>
						</td>
					</tr>


					<tr>
						<td><b>ДНИ НЕДЕЛИ:</b></td>
						<td>
							<?$dni= json_decode($company['dni'],TRUE);?>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="PN" name="PN" <?=$dni['PN'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ПН</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="VT" name="VT" <?=$dni['VT'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ВТ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="SR" name="SR" <?=$dni['SR'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">СР</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="CHT" name="CHT" <?=$dni['CHT'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ЧТ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="PT" name="PT" <?=$dni['PT'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ПТ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="SB" name="SB" <?=$dni['SB'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">СБ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="VS" name="VS" <?=$dni['VS'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ВС</span>
							</label>
						</td>
					</tr>


					<tr>
						<td><b>ВРЕМЯ ЗВОНКОВ:</b></td>
						<td>
							<div class="row">
								<div class="col-md-12">
									<select class="form-control" id="timecall" name="timecall">
										<option value="standart" <?=$company['timecall'] == "standart" ? 'selected' : '';?> >Рабочее время (09:00-19:00)</option>
										<option value="maximum" <?=$company['timecall'] == "maximum" ? 'selected' : '';?> >Расширенное время (09:00-21:00)</option>
									</select>
								</div>
							</div>
						</td>
					</tr>


					<tr>
						<td><b>E-MAIL:</b></td>
						<td>
							<div class="input-group">
								<input type="text" class="form-control input-xsmall" id="company_email" value="<?=$company['email']?>">
							</div>
<? if ($company['uvedomlenie'] == 'true'):?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" checked="" id="uvedomlenie">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?else:?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  id="uvedomlenie">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?endif;?>
						</td>
					</tr>


					<tr>
						<td><b>SMS клиенту:</b></td>
						<td>
							<div class="input-group">
								<input type="text" class="form-control input-xsmall" id="company_sms_text" placeholder="Шаблон текста смс для клиента" value="<?=$company['sms_text']?>">
							</div>
<?if ($company['sms'] == '1'):?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" checked="" id="company_sms">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?else:?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  id="company_sms">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?endif;?>
						</td>
					</tr>
					<tr>
						<td><b>О КОМПАНИИ:</b></td>
						<td>
							<p><textarea  class="form-control" rows="10" cols="100" id="information"><?=$company['information']?></textarea></p>
						</td>
					</tr>
					<tr>
						<td><b>ТРЕБОВАНИЯ К РАЗГОВОРУ:</b></td>
						<td>
							<div class="input-group input-xlarge">
								<input type="text" class="form-control" id="NAME" placeholder="Раскрывать клиента">
								<span class="input-group-btn">
									<button class="btn btn-success" id="addcrit">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</button>
								</span>
							</div>
							<hr>
							<div id="formb" class="form-body">
								<?$crit = json_decode($company['criteriy'],TRUE);?>
<?
/*
$CRIT[] = 'Раскрывать клиента. Задавать встречные вопросы';
$CRIT[] = 'Произвести презентацию';
$CRIT[] = 'Обозначить стоимость услуги';
$CRIT[] = 'Разговор ТОЛЬКО с ЛПР';
*/
?>
<?if (isset($crit)):?>
	<?foreach ($crit as $key => $val):?>
								<div id="polosa<?=$key?>" class="form-group">
									<span title = "rezt" class="label label-info"> <?=$val?> </span>
									<button class="btn btn-danger btn-sm" kto="<?=$key?>" onclick="delcrit('<?=$key?>')">
										<i class="fa fa-trash"></i>
									</button>
								</div>
	<?endforeach;?>
<?endif;?>
							</div>
						</td>
					</tr>





				</table>
				<p align="right">
					<button class="btn btn-info" onclick="changeinformation()" >Изменить информацию</button>
				</p>
			</div>
		</div>
	</div>
</div>   
<script>
$("#addcrit").click(function() {
	var NAME = $("#NAME").val();
	var url = 'wform';
	var name = 'addcrit';
	var idc = <?=$idc?>;
	var bd = $('[title = "rezt"]').length;
	if (NAME.length < 2) {
		alert('В поле должно быть более 2-х символов');
		return;
	}
	var str = '&idc=' + idc + '&NAME=' + NAME
	$.ajax(
		{
			url: '/' + url,
			type: 'POST',
			data: name + '_f=1' + str,
			cache: false,
			success: function(result) {
				obj = jQuery.parseJSON(result);
				if (obj.message == "done") {
					$("#NAME").val('');
					$("#formb").append('<div id="polosa' + bd + '" class="form-group"><span title = "rezt" class="label label-info">' + NAME + '</span><button class="btn btn-danger btn-sm" kto="' + bd + '"  onclick="delcrit(' + bd + ')" ><i class="fa fa-trash"></i></button></div>');
				} else {
					alert(obj.message);
				}
			}
		}
	);
});

function delcrit(kto) {
	var bd = $('[title = "rezt"]').length;
	var url = 'wform';
	var name = 'delcrit';
	var idc = <?=$idc?>;
	if (bd < 2) {
		alert('Должно остатся хотябы 1 поле');
		exit();
	}
	var str = '&idc=' + idc + '&kto=' + kto
	$.ajax(
		{
			url: '/' + url,
			type: 'POST',
			data: name + '_f=1' + str,
			cache: false,
			success: function(result) {
				obj = jQuery.parseJSON(result);
				if (obj.message == "done") {
					$("#polosa" + kto).remove();
				} else {
					alert(obj.message);
				}
			}
		}
	);
}
</script> 