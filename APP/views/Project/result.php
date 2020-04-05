   <div class="row">
   

   
                                             

              <div class="col-md-2">

         <div class="form-group">
         <label >ДАТА</label>
        <button class="btn btn-danger" onclick="filteroff()" >Сбросить</button>
                                                      
            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" >
            
                <span class="input-group-btn">
                <button class="btn default" type="button"> <i class="fa fa-calendar"></i></button>
                </span>
                  
                <input type="text" id="data" name="filter" title="rezt" class="js-datepicker form-control js-datepicker"  data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd"
                value="<?if (empty($dataresult)):?>Выберете дату<?else:?><?=$dataresult?><?endif?>">

          

           </div>  
                                                                             
		</div>
	
		
		
   </div>
   
   
   
    
    </div>
     
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th><b>ID</b></th>
      <th><b>Дата</b></th>
      <th><b>Оператор</b></th>
      <th><b>ИСХОДНЫЕ ДАННЫЕ</b></th>
      <th><b>РЕЗУЛЬТАТ</b></th>
      <th><b>ЗАПИСЬ</b></th>
      <th><b>ОБРАТНАЯ СВЯЗЬ</b></th>
    </tr>
  </thead>
  <tbody>


 <?


foreach ( $company->ownResultList as $row){
	if($row['id']!=0 && $row['status']==1 ){

	


	
	
//ОЧИЩАЕМ ПЕРЕМЕННЫЕ ДЛЯ ОТОБРАЖЕНИЕ В ТАБЛИЦЕ
$b = '';
$ci = '';
$records = '';
unset($fb);
unset($zapis); 


//ОЧИЩАЕМ ПЕРЕМЕННЫЕ ДЛЯ ОТОБРАЖЕНИЕ В ТАБЛИЦЕ
	//ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ДАННЫЕ ЗАПОЛНЕНИЯ ФОРМЫ
	$data = $row->data;
	$data = json_decode($data, JSON_UNESCAPED_UNICODE);
	//ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ДАННЫЕ ЗАПОЛНЕНИЯ ФОРМЫ
//ОТОБРАЖЕМ ИНФУ 

if (isset($data)){
	foreach ($data as $val){
	$a =  " <b>".$val['NAME']."</b> -  ".$val['VAL']."  <br>";
	$b = $b.$a;	
	}
	}
//ОТОБРАЖЕМ ИНФУ

	$userinfo = $row->users;
	$idcontact = $row->contact_id;
	

if (isset($zapisi)){

	foreach ($zapisi as $k=>$v){
		if ($v['contact_id'] == $idcontact) $zapis = $zapisi[$k];
		
	}
	$records = "Ошибка записи";
	if (isset($zapis))	$records = raskladkazapisi($zapis);
} else{
	$records = "Ошибка записи";
}


	
	

	
	
	
	
//ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ИНФОРМАЦИЯ О КОНТАКТЕ
	$CONTACTINFO = $row['contactinfo'];
	$CONTACTINFO = json_decode($CONTACTINFO, JSON_UNESCAPED_UNICODE);

if (isset($CONTACTINFO['name'])){
	$a = " <b>ИМЯ:</b> ".$CONTACTINFO['name']."<br> ";
	$ci = $ci.$a;
}
if (isset($CONTACTINFO['tel'])){
	$a = " <b>ТЕЛЕФОН:</b> ".$CONTACTINFO['tel']."<br> ";
	$ci = $ci.$a;
}	
if (isset($CONTACTINFO['company'])){
	$a = " <b>КОМПАНИЯ:</b> ".$CONTACTINFO['company']."<br> ";
	$ci = $ci.$a;
}
if (isset($CONTACTINFO['site'])){
	$a = " <b>САЙТ:</b> ".$CONTACTINFO['site']."<br> ";
	$ci = $ci.$a;
}
if (isset($CONTACTINFO['comment'])){
	$a = " <b>КОММЕНТАРИЙ:</b> ".$CONTACTINFO['comment']."<br> ";
	$ci = $ci.$a;
}
//ПОЛУЧАЕМ ДАННЫЕ ПО ЛИДУ В ВИДЕ МАССИВА JSON ИНФОРМАЦИЯ О КОНТАКТЕ
	
	
	if(!empty($row['feedback'])) $fb = json_decode($row['feedback'], JSON_UNESCAPED_UNICODE);

?>
	









	<tr >
	
	
	  <td style='vertical-align: middle'>#<?=$row['id']?></td>
      <td style='vertical-align: middle'><?=$row['date']?></td>
      <td style='vertical-align: middle'><b>ИМЯ:</b><br><?=$userinfo['firstname']?></td>
      <td style='vertical-align: middle'>
			<?=$ci?>
			<br>

      </td>
      <td style='vertical-align: middle'>
      
      <?=$b?><b>Комментарий:</b><?=$row['comment']?></td>
      <td style='vertical-align: middle'><?=$records?></td>
	  <td style='vertical-align: middle'>
		<?
		if(isset($fb)):
			foreach ($fb as $com):
		?>
			<?=$com?>
			<hr>
		<?
			endforeach;
		endif;
		?>
		
		
		
	  <button class='btn btn-info' onclick='fback(<?=$row['id']?>)' > <i class='fa fa-plus'></i> КОММЕНТАРИЙ <i class='fa fa-plus'></i></button>
	  <textarea id='commentt' title='<?=$row['id']?>'  class='form-control' placeholder='КОММЕНТАРИЙ' cols=20 rows=4></textarea>
	  
	  </td>

	</tr>
  


<?}} ?>



  
  


  
      </tbody>
</table>


<script>
$(document).ready(function() {
    $('#table_id').DataTable( {


 "language": {
    "info": "СТРАНИЦА _PAGE_ ИЗ _PAGES_",
	"lengthMenu":     "ПОКАЗАТЬ _MENU_ ЗАПИСЕЙ",

    "zeroRecords":    "ЗАПИСЕЙ НЕ НАЙДЕНО",
    
    "infoEmpty":      "Показано 0 до 0 из 0 записей",
    "infoFiltered":   "(фильтрация из _MAX_ записей)",
    "paginate": {
        "first":      "Первая",
        "last":       "Последняя",
        "next":       "Следующая",
        "previous":   "Предыдущая"
    },
    
    "search":         "ПОИСК:"
    
  },
  

  
    "order": [[ 1, "desc" ]],

  "lengthMenu": [[50, 100, 500, -1], [50, 100, 500, "All"]],

  
  
  
    } );
        
    

    
    
    
} );


$('[name = "filter"]').change(function(){	
var data = $("#data").val();
var idc = <?=$idc?>;
var loc = location.hostname;
url = '///'+loc+'/project/result/?id='+idc+'&data='+data;
window.location.replace(url);

});
	

function filteroff(){
var loc = location.hostname;
var idc = <?=$idc?>;
url = '///'+loc+'/project/result/?id='+idc;
window.location.replace(url);
}


	
</script>



