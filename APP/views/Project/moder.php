<div class="row">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">ОБЩАЯ ИНФОРМАЦИЯ <?=$company['name']?></h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr>
						<td><b>Менеджер:</b></td>
						<td>
							<div class="input-group">
								<input type="text" class="form-control input-xsmall" id="company_manager" value="<?=$company['manager']?>">
							</div>
						</td>
					</tr>
					<tr>
						<td><b>ID клиента:</b></td>
						<td>
							<div class="input-group">
								<input type="text" class="form-control input-xsmall" id="company_clientid" value="<?=$company['client_id']?>">
							</div>
						</td>
					</tr>
					<tr>
						<td><b>Очистить базу контактов:</b></td>
						<td>
							<div class="input-group">
								<button class="btn btn-info" onclick="moderClearContacts()">Очистить</button>
							</div>
						</td>
					</tr>
				</table>
				<p align="right">
					<button class="btn btn-info" onclick="moderUpdateCompany()">Сохранить информацию</button>
				</p>
			</div>
		</div>
	</div>
</div>   
<script>
function moderUpdateCompany() {
	var url = 'wform';
	var name = 'moderUpdateCompany';
	var idc = <?=$idc?>;
	var company_manager = $("#company_manager").val();
	var company_clientid = $("#company_clientid").val();
	str = '&idc=' + idc + '&company_manager=' + company_manager + '&company_clientid=' + company_clientid;
	$.ajax({
		url: '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function(result) {
			obj = jQuery.parseJSON(result);
			if (obj.go) go(obj.go);
			else alert(obj.message);
			location.reload();
		}
	});
}
function moderClearContacts() {
	var url = 'wform';
	var name = 'moderClearContacts';
	var idc = <?=$idc?>;
	str = '&idc=' + idc;
	if (confirm("Вы хотите очистить базу контактов данного клиента?")) {
		$.ajax({
			url: '/' + url,
			type: 'POST',
			data: name + '_f=1' + str,
			cache: false,
			success: function(result) {
				obj = jQuery.parseJSON(result);
				if (obj.go) go(obj.go);
				else alert(obj.message);
				location.reload();
			}
		});
	}
}
</script> 