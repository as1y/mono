<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ГЕНЕРАТОР ССЫЛОК</h5>

    </div>

    <div class="card-body">


        <form action="/panel/generateadvert/" method="post" data-fouc>

                <div class="row">



                    <div class="col-md-6">
                        <div class="form-group">
                            <label>КОМПАНИЯ: <span class="text-danger">*</span> </label>
                            <select name="company"  data-placeholder="Выберете компанию" class="form-control select-search required" data-fouc>
                                <option></option>

                                <?php foreach ($ADDINFO['companies'] as $key=>$val):?>
                                    <option value="<?=$val['id']?>"><?=$val['name']?></option>
                                <?php endforeach;?>



                            </select>

                        </div>
                    </div>

                    <hr>


                </div>



            <button id="go" type="submit" class="btn btn-success btn-labeled btn-labeled-left btn-lg">
                <b><i class="icon-notification2"></i></b>
                ГЕНЕРИРОВАТЬ ОБЪЯВЛЕНИЯ
            </button>



            <?php if (!empty($ADV)):?>
            <div class="row">
                <h2>ОБЪЯВЛЕНИЯ</h2>

                <table width="100%">

                <?php foreach ($ADV as $objavlenie):?>

                    <tr>
                        <td>  <b>Заголовок</b><br>
                            <textarea rows="3" cols="3" class="form-control" ><?=$objavlenie['zagolovok']?></textarea>
                        </td>
                        <td>  <b>Объявление</b><br>
                            <textarea rows="3" cols="3" class="form-control" ><?=$objavlenie['text']?></textarea>
                        </td>
                        <td>  <b>Ключевые слова</b><br>
                            <textarea rows="3" cols="3" class="form-control" ><?php
                    foreach ($objavlenie['keyword'] as $kw){
                        echo $kw."\n";
                    }

                        ?></textarea>
                        </td>



                    </tr>


                <?php endforeach; ?>

                </table>



            </div>
            <?php endif; ?>


        </form>







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