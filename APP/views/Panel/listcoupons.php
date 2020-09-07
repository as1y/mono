<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ДОБАВЛЕНИЕ КУПОНА</h5>

    </div>

    <div class="card-body">

        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Компания</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Скидка</th>
                <th>ТИП</th>
                <th>ДЕЙСТВИЕ</th>


            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($customcoupons as $key=>$value):?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td>
                        <b>
                            <a href="/promocode/<?=$value->companies['uri']?>" target="_blank"><?=$value->companies['name']?></a>
                        </b>

                    </td>
                    <td><?=$value['name']?></td>
                    <td><?=$value['short_name']?></td>
                    <td><?=$value['discount']?></td>
                    <td><?=$value['species']?></td>
                    <td><a href="/panel/listcoupons/?action=del&id=<?=$value['id']?>" type="button" class="btn btn-danger"><i class="icon-trash"></i></a></td>


                </tr>
            <?php endforeach;?>








            </tbody>
        </table>








    </div>



</div>


<script>


    function generatekeywords() {

        let  company = "";
        let coupon = "";

        company = $('select[name=company]').val();
        coupon = $('select[name=coupon]').val();

        str =  '&company=' + company + '&coupon=' + coupon + '&type=generatekeywords';

        $.ajax(
            {
                url : "/panel/addflow/",
                type: 'POST',
                data: str,
                cache: false,
                success: function( keywords ) {

                    $("#keywords").val(keywords);


                }
            }
        );




    }

    function generateads() {

        let  company = "";
        let keywords = "";
        let traffictype = "";

        traffictype = $('select[name=traffictype]').val();

        company = $('select[name=company]').val();
        keywords = $('#keywords').val();

        if (company === ""){
            alert("Выберите компанию");
            return false;
        }

        if (traffictype === ""){
            alert("Выберите типа трафика");
            return false;
        }


        if (keywords === ""){
            alert("Заполните ключевые слова");
            return false;
        }




        str =  '&company=' + company + '&keywords=' + keywords + '&traffictype=' + traffictype + '&type=generateads';


        $.ajax(
            {
                url : "/panel/addflow/",
                type: 'POST',
                data: str,
                cache: false,
                success: function( ads ) {

                    $("#ads").append(ads);
                    $("#go").show();

                }
            }
        );




    }




</script>