<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">ГЕНЕРАТОР ССЫЛОК</h5>

    </div>

    <div class="card-body">


        <form action="/panel/generateadvert/?action=generate" method="post" data-fouc>

                <div class="row">

                    <div class="col-md-6">
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
                        </div>
                    </div>

                    <hr>


                </div>



            <button id="go" type="submit" class="btn btn-success btn-labeled btn-labeled-left btn-lg">
                <b><i class="icon-notification2"></i></b>
                ГЕНЕРИРОВАТЬ ОБЪЯВЛЕНИЯ
            </button>

        </form>




            <?php if (!empty($ADV)): ?>

        <form action="/panel/generateadvert/?action=export" method="post" data-fouc>


            <div class="row">
                <div class="col-md-12">
                    <h2>КАМПАНИЯ</h2>
                    <input type="text"  name="namecompany" class="form-control"  value="ПОИСК FULL">

                    <input type="hidden"  name="namerekl" class="form-control"  value="<?=$ADV['rekl']?>">

                    <h2>КЛЮЧЕВЫЕ СЛОВА</h2>
                    <textarea rows="10" cols="3" name="keywords" class="form-control" ><?php
                        foreach ($ADV['keywords'] as $keyword) echo $keyword."\n";   ?>
                       </textarea>


                    <div class="form-group">
                        <label>URL: </label>
                        <input type="text" disabled  name="urlcompany" class="form-control"  value="<?=$ADV['url']?>">
                    </div>
                </div>


                <table width="100%">
                <?php foreach ($ADV['description'] as $key=>$val):?>

                    <tr>

                        <td>  <b>Description</b><br>
                            <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['description'][$key]?></textarea>
                        </td>


                        <td>  <b>Заголовок1</b><br>
                            <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['zagolovok1'][$key]?></textarea>
                        </td>

                        <td>  <b>Заголовок2</b><br>
                            <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['zagolovok2'][$key]?></textarea>
                        </td>

                        <td>  <b>Заголовок3</b><br>
                            <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['zagolovok3'][$key]?></textarea>
                        </td>

                        <td>  <b>Путь1</b><br>
                            <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['path1'][$key]?></textarea>
                        </td>


                        <td>  <b>Путь2</b><br>
                            <textarea disabled rows="3" cols="3" class="form-control" ><?=$ADV['path2'][$key]?></textarea>
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

