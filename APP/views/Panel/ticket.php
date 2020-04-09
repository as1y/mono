<div class="row">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">МОИ ТИКЕТЫ</h5>
                <div class="header-elements">
                    <div class="list-icons">
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th>Сообщения</th>
                            <th>СТАТУС</th>
                            <th>ДЕЙСТВИЕ</th>
                        </tr>
                        </thead>
                        <tbody>

<?php foreach ($tickets as $key=>$val):?>

    <tr>
        <td><?=$val['zagolovok']?></td>
        <td>
          <?=ticketstatus($val['status'])?>
        </td>
        <td>
            <a href="/viewticket/?id=<?=$val['id']?>" class="badge bg-dark badge-pill"><?=$val['count']?></a>
        </td>
        <td><a href="/viewticket/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>ПЕРЕЙТИ</a></td>
    </tr>



<?php endforeach;?>






                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>




    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">ОТКРЫТЬ ТИКЕТ</h6>
            </div>

            <div class="card-body">
                <form  action="/panel/ticket/" method="post" data-fouc>

                    <div class="form-group">
                        <label>Заголовок тикета: <span class="text-danger">*</span></label>
                        <input type="text" name="zagolovok" class="form-control required" placeholder="Заголовок тикета">
                    </div>

                    <div class="form-group">
                        <label>Текст: <span class="text-danger">*</span></label>
                            <textarea rows="4" cols="4"  name="text" class="form-control required" placeholder="Сообщение"></textarea>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-lg-10 ml-lg-auto text-left">
                            <button type="submit" class="btn bg-success ml-3">ОТКРЫТЬ ТИКЕТ <i class="icon-paperplane ml-2"></i></button>
                            <button type="submit" class="btn btn-light">ОЧИСТИТЬ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div>