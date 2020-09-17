<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ГЕНЕРАТОР ССЫЛОК</h5>

    </div>

    <div class="card-body">




        <div class="col-md-6">
            <form action="/panel/generateadvert/?action=generateall" method="post" data-fouc>

                <button  type="submit" class="btn btn-warning btn-labeled btn-labeled-left btn-lg">
                    <b><i class="icon-notification2"></i></b>
                    TOTAL
                </button>

            </form>
        </div>

                <div class="row">

                    <div class="col-md-6">
                        <form action="/panel/generateadvert/?action=generate" method="post" data-fouc>
                        <div class="form-group">
                            <label>КОМПАНИЯ: <span class="text-danger">*</span> </label>
                            <select name="company"  data-placeholder="Выберете компанию" class="form-control select-search required" data-fouc>
                                <option></option>

                                <?php
                                $all = 0;
                                foreach ($ADDINFO['companies'] as $key=>$val):

                                    if ($val->countOwn("coupons") == 0) continue;
                                     $all++;
                                    ?>
                                    <option value="<?=$val['id']?>"><?=$val['name']?></option>
                                <?php endforeach;?>

                            </select>
                            <b>ВСЕГО:</b> <?=$all?>
                            <button  type="submit" class="btn btn-success btn-labeled btn-labeled-left btn-lg">
                                <b><i class="icon-notification2"></i></b>
                                ГЕНЕРИРОВАТЬ ОБЪЯВЛЕНИЯ
                            </button>

                        </form>
                        </div>


                    </div>

                    <hr>


                </div>








            <?php if (!empty($ADV)): ?>

        <form action="/panel/generateadvert/?action=export" method="post" data-fouc>


            <div class="row">
                <div class="col-md-12">
                    <h2>КАМПАНИЯ</h2>
                    <input type="text"  name="namecompany" class="form-control"  value="ПОИСК ТЕСТ">

                    <input type="hidden"  name="namerekl" class="form-control"  value="<?=$ADV['rekl']?>">

                    <div class="form-group">
                        <label><b>URL:</b> </label>
                        <input type="text" disabled  name="urlcompany" class="form-control"  value="<?=$ADV['url']?>">
                    </div>

                    <h2>ПАРАМЕТРЫ</h2>
                    <b>ЗАГОЛОВОК1: </b> <?=$ADV['zagolovok1']?> <br>
                    <b>ЗАГОЛОВОК2: </b> <?=$ADV['zagolovok2']?> <br>
                    <b>ЗАГОЛОВОК3: </b> <?=$ADV['zagolovok3']?> <br>

                    <b>URL1: </b> <?=$ADV['path1']?> <br>
                    <b>URL2: </b> <?=$ADV['path2']?> <br>


                </div>


                <table width="100%">
                    <?php foreach ($ADV['description'] as $key=>$val):?>

                        <tr>

                            <td>  <b>Description</b><br>
                                <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['description'][$key]?></textarea>
                            </td>


                        </tr>

                    <?php endforeach; ?>
                </table>



                <br>

                <button type="submit" class="btn btn-primary btn-labeled btn-labeled-left btn-lg">
                    <b><i class="icon-notification2"></i></b>
                    ИМПОРТ GOOGLE ADWORDS
                </button>


            </div>


        </form>
            <?php endif; ?>








    </div>



</div>

