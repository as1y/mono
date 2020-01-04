function acceptuser(pred, idc) {
	var url = 'wform';
	var name = 'kasting_success';
	var str = '&pred=' + pred + '&idc=' + idc;
	alert('ok');
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

function stuser(pred, idc) {
	var url = 'wform';
	var name = 'kasting_fail';
	var str = '&pred=' + pred + '&idc=' + idc;
	$.ajax({
		url: '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function(result) {
			obj = jQuery.parseJSON(result);
			if (obj.go) go(obj.go);
			else alert(obj.message);
		}
	});
}

function bazaload(idc, bazaload2, clientid) {
	var url = 'wform';
	var name = 'bazaupl';
	var sel = $('[id = "stolbc"]');
	str = '&bazaload=' + bazaload2 + '&idc=' + idc + '&clientid=' + clientid;
	jQuery.each(sel, function(i, field) {
		str += '&' + 'sel[' + i + ']=' + field.value;
	});
	$.ajax({
		url: '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function(result) {
			obj = jQuery.parseJSON(result);
			if (obj.go) go(obj.go);
			else alert(obj.message);
		}
	});
}
$("#cpa").keyup(function() {
	var summ = $("#cpa").val() * $("#daylimit").val();
	$("#rashod").text(summ);
});
$("#daylimit").keyup(function() {
	var summ = $("#cpa").val() * $("#daylimit").val();
	$("#rashod").text(summ);
});
$("#type").change(function() {
	var type = $("#type").val();
	if (type == 1) {
		$("#cpa").val('500');
		$("#daylimit").val('10');
	}
	if (type == 2) {
		$("#cpa").val('2000');
		$("#daylimit").val('10');
	}
	if (type == 3) {
		$("#cpa").val('400');
		$("#daylimit").val('10');
	}
	if (type == 4) {
		$("#cpa").val('500');
		$("#daylimit").val('10');
	}
	if (type == 5) {
		$("#cpa").val('20');
		$("#daylimit").val('100');
	}
	if (type == 6) {
		$("#cpa").val('15');
		$("#daylimit").val('100');
	}
	var summ = $("#cpa").val() * $("#daylimit").val();
	$("#rashod").text(summ);
});

function banuser(ban, idc) {
	if (confirm("Отстранить данного оператора от проекта?")) {
		var url = 'wform';
		var name = 'banuser';
		var str = '&ban=' + ban + '&idc=' + idc;
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

function dropuser(drop, idc) {
	var url = 'wform';
	var name = 'dropuser';
	var str = '&drop=' + drop + '&idc=' + idc;
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

function changeinformation() {
	var url = 'wform';
	var name = 'changeinformation';
	var information = $("#information").val();
	var company_email = $("#company_email").val();
	var daylimit = $("#daylimit").val();
	var count_operator = $("#count_operator").val();
	var uvedomlenie = $("#uvedomlenie").prop("checked");
	var sms = $("#company_sms").prop("checked");
	var sms_text = $("#company_sms_text").val();
	var idc = $("#idc").text();
	var timecall = $("#timecall").val();
	var moder = $("input:radio:checked").val();
	var pn = $("#PN").prop("checked");
	var vt = $("#VT").prop("checked");
	var sr = $("#SR").prop("checked");
	var cht = $("#CHT").prop("checked");
	var pt = $("#PT").prop("checked");
	var sb = $("#SB").prop("checked");
	var vs = $("#VS").prop("checked");
	var amoCRM_email = $("#amoCRM_email").val();
	var amoCRM_domain = $("#amoCRM_domain").val();
	var amoCRM_apikey = $("#amoCRM_apikey").val();
	information = encodeURIComponent(information);
	str = '&information=' + information + '&idc=' + idc + '&uvedomlenie=' + uvedomlenie + '&daylimit=' + daylimit + '&count_operator=' + count_operator + '&moder=' + moder + '&timecall=' + timecall + '&PN=' + pn + '&VT=' + vt + '&SR=' + sr + '&CHT=' + cht + '&PT=' + pt + '&SB=' + sb + '&VS=' + vs + '&amoCRM_email=' + amoCRM_email + '&amoCRM_domain=' + amoCRM_domain + '&amoCRM_apikey=' + amoCRM_apikey + '&company_email=' + company_email + '&sms=' + sms + '&sms_text=' + sms_text;
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

function dubli(idc) {
	if (confirm("Вы уверены, что хотите удалить дубли по номеру телефона?")) {
		var url = 'wform';
		var name = 'dubli';
		var str = '&idc=' + idc;
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

function switcnedostup(idc) {
	if (confirm("Вы хотите повторно прозвонить все контакты в статусе ТЕЛЕФОН НЕ ДОСТУПЕН?")) {
		var url = 'wform';
		var name = 'switcnedostup';
		var str = '&idc=' + idc;
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

function switchotkaz(idc) {
	if (confirm("Вы хотите повторно прозвонить все контакты в статусе ОТКАЗ?")) {
		var url = 'wform';
		var name = 'switchotkaz';
		var str = '&idc=' + idc;
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

function fback(idr) {
	var url = 'wform';
	var name = 'fback';
	var textf = $('[title = "' + idr + '"]').val();
	var str = '&idr=' + idr + '&textf=' + textf;
	$.ajax({
		url: '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function(result) {
			//		alert(result);
			obj = jQuery.parseJSON(result);
			if (obj.go) go(obj.go);
			else alert(obj.message);
			location.reload();
		}
	});
}

function go(url) {
	window.location.href = '/' + url;
}