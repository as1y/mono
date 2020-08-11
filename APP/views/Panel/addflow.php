<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ДОБАВЛЕНИЕ ПОТОКА</h5>

    </div>

    <div class="card-body">


        <form action="/panel/addflow/" method="post" data-fouc>

                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Название потока: <span class="text-danger">*</span></label>
                            <input type="text" name="company" class="form-control required" placeholder="Пример: Dominos Google">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ИСТОЧНИК ТРАФИКА: <span class="text-danger">*</span> </label>
                            <select name="traffictype" data-placeholder="Источник ТРАФИКА" class="form-control form-control-select2 required" data-fouc>
                                <option></option>
                                <option value="googlesearch">Google Adwords Search</option>
                            </select>
                        </div>
                    </div>


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



                        <div class="col-md-12">

                            <div class="form-group">
                                <label>URL страницы: <span class="text-danger">*</span></label>
                                <input type="text" name="url" class="form-control required" placeholder="https://<?=CONFIG['DOMAIN']?>">
                            </div>

                        </div>







                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Ключевые слова: <span class="text-danger">*</span></label>
                            <textarea rows="5" cols="5" id="keywords" class="form-control required" ></textarea>
                        </div>

                        <a onclick="generatekeywords()" class="btn btn-success btn-labeled btn-labeled-left btn-lg">
                            <b><i class="icon-key"></i></b>
                            Сгенерировать ключевые слова
                        </a>

                    </div>

                </div>


<hr>

            <a onclick="generateads()" class="btn btn-success btn-labeled btn-labeled-left btn-lg">
                <b><i class="icon-file-text"></i></b>
                Генерировать объявления
            </a>


            <div id="ads" class="row">



            </div>

            <button id="go" type="submit" class="btn btn-danger btn-labeled btn-labeled-left btn-lg">
                <b><i class="icon-notification2"></i></b>
                ПОЕХАЛИ!
            </button>
            <script>
                $("#go").hide();
            </script>




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