<div class="row">
    <div class="col-md-4">

        <!-- Left aligned buttons -->
        <div class="card">
            <div class="card-header  justify-content-between align-items-center bg-teal-400 border-top-0">
                <h6 class="card-title">Форма заполнения успешного звонка</h6>
            </div>

            <div class="card-body">
                <span  class="badge-warning">Данная форма обязательна для заполнения оператором</span>

                <?php

                $FORMRESULT = json_decode($company['formresult'],TRUE);

                renderform($FORMRESULT, $company['id']);

                ?>

                <div class="form-group mb-0">
                    <label>Комментарий:<span class="text-danger">*</span></label>
                    <textarea rows="3" cols="3" class="form-control" disabled placeholder="Комментарий оператора"></textarea>
                </div>

            </div>




        </div>
        <!-- /left aligned buttons -->


    </div>


    <div class="col-md-6">

        <!-- Left aligned buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Добавление дополнительных полей</h6>

            </div>

            <div class="card-body">

                <form action="/project/resultform/?id=<?=$company['id']?>" method="post" data-fouc>

                <table class="table table-bordered ">
                    <tbody><tr>
                        <td><b>ПОЛЕ/ВОПРОС</b></td>
                        <td><b>ТИП ВВОДА</b></td>
                        <td><b>ДОБАВИТЬ</b></td>
                    </tr>

                    <tr>
                        <td><input type="text" class="form-control input-medium" name="NAME" placeholder="Например: Фамилия"></td>

                        <td><select name="TYPE" class="form-control input-small">
                                <option value="1">Текст</option>
                                <option value="2">Дата</option>
                                <option value="3">Описание</option>
                            </select>
                        </td>

                        <td>
                            <button type="submit" class="btn btn-success btn-icon"><i class="icon-plus3 mr-2"></i></button>

                        </td>


                    </tr>

                    </tbody></table>

                </form>



            </div>
        </div>
        <!-- /left aligned buttons -->


    </div>




</div>





