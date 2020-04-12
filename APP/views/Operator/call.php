
<div class="row">

    <div class="col-md-4">
        <div class="card border-dark">
            <div class="card-header bg-dark text-white header-elements-inline">
                <h6 class="card-title">КОНТАКТ</h6>

            </div>

            <div class="card-body">


                <div class="col-md-12">
                    <table class="table table-striped table-bordered table-advance ">
                        <thead>
                        <tr>
                            <th><b>ID</b></th>
                            <th><b>Имя</b></th>
                            <th><b>Компания</b></th>
                            <th><b>Сайт</b></th>
                            <th><b>Комментарий</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style='vertical-align: middle' >
                                <div id="idcontact">#<?=$contactinfo['id']?></div>
                            </td>
                            <td style='vertical-align: middle'>
                                <div id="namecont"><?=$contactinfo['name']?></div>
                            </td>
                            <td style='vertical-align: middle'>
                                <div id="company"><?=$contactinfo['namecompany']?></div>
                            </td>
                            <td style='vertical-align: middle'>
                                <div id="siteurl"> <a href="<?=$contactinfo['url']?> " target="_blank"><?=$contactinfo['url']?></a> </div>
                            </td>
                            <td style='vertical-align: middle'>
                                <div id="comment"><?=$contactinfo['comment']?></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card border-dark">
            <div class="card-header bg-dark text-white header-elements-inline">
                <h6 class="card-title">ВЫЗОВ</h6>

            </div>
            <div class="card-body">
                <table class="table  table-bordered text-center">
                    <tr>
                        <td class="wmin-md-100"> <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-phone-wave"></i></b> ПОЗВОНИТЬ</button></td>

                        <td class="wmin-md-100"> <button type="button" class="btn bg-slate-600 btn-labeled ">СЛЕДУЮЩИЙ КОНТАКТ</button></td>

                    </tr>
                </table>

                <div class="badge badge-success d-block"  id="info">
                    ПОЗВОНИТЕ ПО КОНТАКТУ
                </div>
                <b>ВНИМАНИЕ!:</b>
                Придерживайтесь скрипту и учитываете критерии. Иначе звонок может не пройти модерацию.



            </div>
        </div>
    </div>


    <div class="col-md-4">

        <div class="card border-dark">
            <div class="card-header bg-dark text-white header-elements-inline">
                <h6 class="card-title">ОКОНЧАНИЕ РАЗГОВОРА</h6>

            </div>
            <div class="card-body">


                <div class="form-group mb-3 mb-md-2">


                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input-styled-warning" name="radio-inline-left" value="late" data-fouc>
                            ПЕРЕЗВОН
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input-styled-danger" name="radio-inline-left" value="otkaz" data-fouc>
                            ОТКАЗ
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input-styled" name="radio-inline-left" value="bezdostupa" data-fouc>
                            ТЕЛЕФОН НЕ ДОСТУПЕН
                        </label>
                    </div>


                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input-styled-success" value="result" name="radio-inline-left"  data-fouc>

                            <span class="badge badge-light badge-striped badge-striped-right border-right-success">


                                 <b><?=companytype($company["type"]);?></b> - <?=$company['priceresult'];?> РУБЛЕЙ

                                
                            </span>



                        </label>
                    </div>






                </div>





            </div>



        </div>


    </div>




</div>
