<div class="row">
<div class="col-md-12">
<div class="panel panel-default"> 

<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th><b>ОПЕРАТОР</b></th>
      <th><b>УРОВЕНЬ</b></th>
   	  <th><b>СООБЩЕНИЕ</b></th>
  	  <th><b>ЗАПИСЬ СКРИПТА</b></th>

      <th><b>ДЕЙСТВИЕ</b></th>

    </tr>
    
  </thead>

 <tbody>

<?foreach ($zayavki as $row):?>
<?
$user = $row->users;
$idc = $row['company_id'];
$pred = $row['users_id'];
?>
    <tr>
      <td>
      <b><?=$user['firstname']?></b>
      </td>
      
       <td>
      <b><?=$user['level']?></b>
      </td>    

      
       <td><?=nl2br($row['message'])?></td>
       
        <td>
        
        <audio src="//<?=DOMAIN_PARENT?>/upload/temp_zayavki/<?=$row['record']?>" controls></audio>
        	
        </td>
      <td>
      
      
<button class='btn btn-success' onclick="acceptuser('<?=$pred?>','<?=$idc?>')" > <i class='fa fa-check'></i> ПРОПУСТИТЬ <i class='fa fa-check'></i></button>
      
<button class='btn btn-danger' onclick="stuser('<?=$pred?>','<?=$idc?>')" > <i class='fa fa-stop'></i> ОТКЛОНИТЬ <i class='fa fa-stop'></i></button>


      
      </td>
    </tr>
      
      
      

<?endforeach;?>

      



     
  
    </tbody>
</table>







</div>
</div>
</div>


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
  

  
  
  
  
  
    } );
        
    

    
    
    
} );
</script>
