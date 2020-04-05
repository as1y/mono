
                                    <div class="col-12">
                                        <!-- CKEditor Container -->
                                        <div id="js-ckeditor-inline" contenteditable="true" class="js-ckeditor-inline-enabled cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" tabindex="0" spellcheck="false" role="textbox" aria-label="Rich Text Editor, js-ckeditor-inline" title="Rich Text Editor, js-ckeditor-inline" aria-describedby="cke_102" style="position: relative;">
                               
                                                            
                                            <?=$script['text']?>
                                        
                                        </div>
                                    </div>
                                    
<p align="right"><button class="btn btn-info" onclick="changescript()" >Изменить скрипт</button></p>
<script>


	function changescript(){
	var url='wform';
	var name = 'changescript';
	var idc = <?=$idc?>;
	var textsc = $("#js-ckeditor-inline").html();

	textsc = encodeURIComponent(textsc);
	str = '&textsc=' + textsc + '&idc=' + idc



	$.ajax(

	{
		url : '/' + url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,
		success: function( result ) {

			obj = jQuery.parseJSON( result );
		
			if ( obj.go ) go( obj.go );
			else alert( obj.message );
			location.reload();

	}


	}

	);
	

	}
	
	
	
</script>