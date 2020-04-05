    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th><b>ИМЯ</b></th>
      <th style='vertical-align: middle; text-align: center;'><b>ПРЕЗЕНТАЦИЯ</b></th>
      <th style='vertical-align: middle; text-align: center;'><b>ЗАПИСЬ</b></th>
      <th style='vertical-align: middle; text-align: center;'><b>ИНФОРМАЦИЯ</b></th>
      <th style='vertical-align: middle; text-align: center;'><b>ДЕЙСТВИЯ</b></th>
    </tr>
  </thead>
  <tbody>


<? 


$col = 0;
$x = 0;



foreach ($operators as $row) {
	


if ($row['mycamid']){
	 $mycamid = json_decode($row['mycamid'], true);

		$sm = in_array ($idc, $mycamid); 
		if ($sm) {
			$col++;
			// КОНВЕРСИЯ
if ($row['totalcall']=="0"){
	 $x = 0;}else{
	 	$x = round( (($row['totaluspeh']/$row['totalcall'])*100), 2  )  ;
	 }


// КОНВЕРСИЯ
if (!$row['aboutme']) $row['aboutme'] = "Не заполненно";



?>
	
	
	<tr>
   <td> 
    <img src="<? echo "/UPLOADS/profile/".$row['avatar'].".jpg";?>" width="30" >
<i class="fa fa-user" aria-hidden="true"></i> <a href='/project_record/<?=$idc?>?oper=<?=$row['id']?>' ><?=$row['firstname']?></a>  </td>

      <td style='vertical-align: middle; text-align: center;'><?=nl2br($joincompany[$row['id']]['message'])?> </td>      

    <td style='vertical-align: middle; text-align: center;'>
    <i class="fa fa-play" aria-hidden="true"></i>
    <b><a href="//cplcenter.ru/temp_zayavki/<?=$joincompany[$row['id']]['record']?>" target="_blank">ПРОСЛУШАТЬ</a></b>	  </td>

      <td style='vertical-align: middle; text-align: center;'> <?=nl2br($row['aboutme'])?> </td>  

<td style='vertical-align: middle; text-align: center;'>
<!-- 
<button class='btn btn-sm btn-danger' onclick="banuser('<?=$row['id']?>','<?=$idc?>')" > <i class='fa fa-ban'></i> ЗАБАНИТЬ </button><br><br>-->
<button class='btn btn-sm btn-danger' onclick="dropuser('<?=$row['id']?>','<?=$idc?>')" > <i class='fa fa-stop'></i> ИСКЛЮЧИТЬ </button>
	         			
</td>  
				  

			  
    </tr>
    


			
<?   ;}
		

	}
	
}

// БЕРЕМ СПИСОК ОПЕРАТОРОВ


?>
      </tbody>
</table>
<hr>
*ВСЕГО ОПЕРАТОРОВ:<b><?=$col?></b><br>
** Общее кол-во звонков оператора в нашей системе

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

  
  
  
    } );
        
    

    
    
    
} );
</script>

