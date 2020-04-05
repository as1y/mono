<img width="20" height="20" id="loader" style="display: none;" src="/load.gif">
<form id="bz" method="post" enctype="multipart/form-data">
<b>Загрузите файл:</b><br>
Формат .CSV Не более 1MB<br>
<p><input id="uploadbaza" type="file" multiple accept=".csv" ></p>
<p><input type="hidden" value="nope" id="bazaload"></p>
</form>


<script>
	$("#bz").change(function() {

    var $input = $("#uploadbaza");
    var fd = new FormData;

    fd.append('csv', $input.prop('files')[0]);



	  	 function funcBefore(){
	  	 	
$("#loader").show();
	
	
		}


    $.ajax({
        url: '/wform/filecsv',
        data: fd,
        beforeSend: funcBefore,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
        	
        	$picadres = "temp_load/"+data+".csv";
 			$picadres = $picadres.replace(/\s/g, '');			


		//ОТПРАВЛЯЕМ НА ОБРАБОТКУ БАЗЫ				
			var idc = <?=$idc?>;
			window.location.href='project/loadbasetel/?id='+idc+'&path='+$picadres;
		//ОТПРАВЛЯЕМ НА ОБРАБОТКУ БАЗЫ


			if (data == '1') {
				$("#bazaload").val("nope");
				 alert('Размер не должен превышать 100КБ');
						 }
						 
			if (data == '2') {
				$("#bazaload").val("nope");
				 alert('Размер должен быть больше 500Б');
						 }
						 
						 
			if (data == '3') {
				$("#bazaload").val("nope");
				 alert('Файл должен быть в формате CSV');
						 }
			

            		if (data == '4') {
				$("#bazaload").val("nope");
				 alert('Что-то пошло не так.');
					 }
						 
        }
    });



  

	
});

</script>