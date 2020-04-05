<div class="panel panel-default">
          <div class="panel-heading">
			<h3 class="panel-title">ЗАПИСИ <?=$company['name']?></h3>
           </div>
   
                                     
     <div class="panel-body">
   
   <div class="row">
   <div class="col-md-2">
   <div class="form-group">
                                                                    <label>Результат звонка</label>
             
             
                                                                    <select id="res" name="filter" class="form-control input-medium">
                                                                    
        <?php      
		if ($res == '5') $sel5 = "selected";
		if ($res == '4') $sel4 = "selected";
		if ($res == '3') $sel3 = "selected";
		if ($res == '2') $sel2 = "selected";
		if ($res == 'nope') $nope = "selected";
 	 
 	 ?>
   			<option <?=$nope?> value="nope" >Не выбрано</option>
   			<option <?=$sel5?> value="5" >Успешно</option>
            <option <?=$sel4?> value="4" >Телефон не доступен</option>
            <option <?=$sel3?> value="3" >Отказ</option>
            <option <?=$sel2?> value="2">Перезвон</option>
            
                                                                    </select>
                                                                </div>
   </div>
   

              <div class="col-md-2">
   <div class="form-group">
                                                                    <label>Оператор</label>
                                                                    <select id="oper" name="filter" class="form-control input-medium">
     <option value="nope">Не выбрано</option>
 <?
 
  foreach ($opers as $key => $val){
 		$sel = "";
 	 if ($oper == $key) $sel = "selected";
 	  ?>
 	<option <?=$sel?> value="<?=$key?>"><?=$val?></option>
 <? }?>
 
                                                                    </select>
                                                                </div>
   </div>
                                                        

              <div class="col-md-2">

         <div class="form-group">
         <label >ДАТА ЗВОНКА</label>                                                      
            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" >
            
                <span class="input-group-btn">
                <button class="btn default" type="button"> <i class="fa fa-calendar"></i></button>
                </span>
                  
                <input type="text" id="data" name="filter" title="rezt" class="js-datepicker form-control js-datepicker"  data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" value="<?=$data?>">

          

           </div>  
                                                                             
		</div>
	
		
		
   </div>
    <div class="col-md-2">
    <label >Сбросить фильтр</label><br>
        <button class="btn btn-danger" onclick="filteroff()" >Сбросить</button>
    </div>
   

   
   
    
    </div>
                                                                    
   

 
 
	</div>
	       
	    
</div>

<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th><b>#ID</b></th>
      <th><b>Телефон</b></th>
      <th><b>Дата</b></th>
      <th><b>Оператор</b></th>
      <th><b>Результат</b></th>
      <th><b>Комментарий</b></th>
      <th><b>ЗАПИСИ</b></th>
      
    </tr>
  </thead>
  <tbody>
  
 
<?
foreach ($allrecord as $row) { 


unset($rz);
if ($row['status'] == '5') $rz = "УСПЕШНО";
if ($row['status'] == '4') $rz = "ТЕЛЕФОН НЕ ДОСТУПЕН";
if ($row['status'] == '3') $rz = "ОТКАЗ";
if ($row['status'] == '2') $rz = "ПЕРЕЗВОН";

//ОЧИСТКА ПЕРЕМЕННЫХ
unset($records);
$zapis = 'nope';
//ОЧИСТКА ПЕРЕМЕННЫХ

$userinfo = $row->users;

	$idcontact = $row['id'];
	
	
	foreach ($zapisi as $k=>$v){
		if ($v['contact_id'] == $idcontact) $zapis = $zapisi[$k];	
	}

	$records = raskladkazapisi($zapis);
	//$records = $zapis;
//ОТОБРАЖЕМ ЗАПИСИ РАЗГОВОРОВ


?>
<tr>
	<td style='vertical-align: middle'><?=$row['id']?></td>
	<td style='vertical-align: middle'><?=$row['tel']?></td>
	<td style='vertical-align: middle'><?=$row['datacall']?></td>
	<td style='vertical-align: middle'><?=$userinfo['firstname']?></td>
	<td style='vertical-align: middle'><?=$rz?></td>
	<td style='vertical-align: middle'><?=$row['comment']?></td>
	<td style='vertical-align: middle'>

	
	<?=$records?>
	
	
	</td>
</tr>
<?}?>

      </tbody>
</table>

<script>


$('[name = "filter"]').change(function(){	
var res = $("#res").val();
var oper = $("#oper").val();
var data = $("#data").val();
var idc = <?=$idc?>;
var loc = location.hostname;

url = '///'+loc+'/project/record/?id='+idc+'&data='+data+'&res='+res+'&oper='+oper;


window.location.replace(url);


	});

function filteroff(){
var loc = location.hostname;
var idc = <?=$idc?>;
url = '///'+loc+'/project/record/?id='+idc;
window.location.replace(url);
}



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
  

  
  "order": [[ 0, "desc" ]],

  "lengthMenu": [[50, 100, 500, -1], [50, 100, 500, "All"]],
  
  
    } );
        
    

    
    
    
} );
</script>



