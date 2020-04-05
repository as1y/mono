<div class="col-md-6">





<div class="panel panel-default">
          <div class="panel-heading">
			<h3 class="panel-title">СКРИПТ <?=$company['name']?></h3>
           </div>                                        
     <div class="panel-body">
   
   <div class="panel-body">
   

 

<table class="table table-bordered "> 
	<tr>
		<td><b>ПОЛЕ/ВОПРОС</b></td>
		<td><b>ТИП ВВОДА</b></td>
		<td><b>ДОБАВИТЬ</b></td>
	</tr>
	
	<tr>
		<td><input type="text" class="form-control input-medium" id="NAME" placeholder="Например: Фамилия"></td>
		
		<td><select id="TYPE" class="form-control input-small">
            <option value="1">ТЕКСТ</option>
            <option value="2">ДАТА</option>
					</select>
			</td>
                                                                    


                                                                    <td>
                                <button class="btn btn-success"  id="clone" ><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                                    	
                                                                    </td>
                                                                    
                                                                    
	</tr>
	
</table>

                                                                    <div id = "formb" class="form-body">

                                                                                                                                                                                          
<?
$MASS = json_decode($script['form'],TRUE);
showmass($MASS, 1);

//show($MASS);

?>





                                                                    </div>
                                                  



</div>




<br>

   
	</div>
</div>
</div>


<script>

 
   $("#clone").click(function(){	 	
 	var NAME = $("#NAME").val();
 	var TYPE = $("#TYPE").val();
	var url = 'wform';
	var name = 'addpole';
	var idc = <?=$idc?>;
 	var bd = $('[title = "rezt"]').length;
 	
 	
 	if (NAME.length < 2 ) {
	alert('В поле должно быть более 2-х символов');
	return;
	}
		
var str = '&idc=' + idc + '&NAME=' + NAME + '&TYPE=' + TYPE

	$.ajax(

	{
		url : '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function( result ) {

			obj = jQuery.parseJSON( result );
		
			if ( obj.message == "done" ){
		$("#NAME").val('');
				$("#formb").append('<div id="polosa'+bd+'"  ><label class="col-md-3 control-label">'+NAME+'<span class="required" aria-required="true"> * </span></label><div class="form-inline"><input title="rezt" name="'+bd+'" ttype="'+TYPE+'" tname="'+NAME+'" readonly="" type="text" class="form-control" placeholder="'+NAME+'" maxlength="50"><button class="btn btn-danger" kto="'+bd+'"  onclick="delc('+bd+')"><i class="fa fa-trash"></i></button></div></div>');
				
			} else {
				alert( obj.message );
			}


	}


	}

	);
	
	
	
		
	

	
	
	
	
		
	});


function delc(kto){
	
  var bd = $('[title = "rezt"]').length;
  var url = 'wform';
  var name = 'delpole';
  var idc = <?=$idc?>;
   
  if (bd < 2){
  	  	alert('Должно остатся хотябы 1 поле');
	exit();	
  }

var str = '&idc=' + idc + '&kto=' + kto


	
	$.ajax(

	{
		url : '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function( result ) {

			obj = jQuery.parseJSON( result );
		
			if ( obj.message == "done" ){
		
				$("#polosa"+kto).remove();
				
			} else {
				alert( obj.message );
			}
		



	}


	}

	);
	
	
	
	
	
}
	
	


	
</script>


