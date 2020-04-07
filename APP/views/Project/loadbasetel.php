<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">ЗАГРУЗИТЬ БАЗУ</h5>
        <button onclick="bazaload('<?=$idc?>','<?=$path?>','<?=$clientid?>')" class="btn btn-success">ПОЕХАЛИ</button>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>

    <div class="card-body justify-content-center">



        <table class="table table-bordered " >




            <?

            if (($fp = fopen($filename, "r")) !== FALSE) {
                while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
                    $list[] = $text = iconv('CP1251', 'UTF-8', $data);
                }
                fclose($fp);
            }

            $list = mb_convert_encoding($list, "UTF-8");

            $strok = count($list);
            $stolb = count($list['0']);

            if ($strok <= 10) echo("Должно быть не менее 10 записей");


            echo "<b>СТРОК</b> : ".count($list)." |";
            echo "<b>СТОЛБЦОВ:</b> ".count($list['0'])."  ";
            /*
            echo "<b>#ID компании:</b> <span id='idc'>$idc</span>";
            echo "<b># Путь к базе</b> <span id='bazaload'>$path</span> <br><br>";
            */

            // ВЫВОД ШАПКИ
            echo "<tr>";
            for ($i = 0; $i < $stolb; $i++){
                echo '<td> 
	
<select id="stolbc" title="'.$i.'" class="form-control">
  <option value="none" selected>НЕ ИМПОРТИРОВАТЬ</option>
  <option value="name">ИМЯ</option>
  <option value="tel">ТЕЛЕФОН</option>
  <option value="company">КОМПАНИЯ</option>
  <option value="site">САЙТ</option>
  <option value="comment">КОММЕНТАРИЙ</option>

</select> 	
	
</td>';

            }
            echo "</tr>";
            // ВЫВОД ШАПКИ



            // ВЫВОД ТЕЛА КОНТЕНТА
            for ($i = 0; $i <= 10; $i++){

                echo "<tr>";
                foreach ($list[$i] as $v){
                    echo "<td>$v</td>";
                }
                echo "</tr>";
// ВЫВОД ТЕЛА КОНТЕНТА



            }


            //show($list);




            ?>


        </table>






    </div>

</div>











<script>

$('[id = "stolbc"]').click(function(){
		
var a = $(this).val();
var b = $("option:selected",this).text(); //Текст выбранного селекта


 	});
 	
 	
$('[id = "stolbc"]').change(function(){	
var a = $(this).val();
var b = $("option:selected",this).text(); //Текст выбранного селекта

/*
if (a != "none"){
	$('#stolbc option[value="'+a+'"]').remove(); // Удаляем у всех выбранный тут элемент
	$(this).prepend( $('<option value="'+a+'" selected>'+b+'</option>')); //Добавляем в существующий выбранный элемент
	
} 
*/
 	});











</script>
