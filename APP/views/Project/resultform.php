<div class="row">
    <div class="col-md-4">

        <!-- Left aligned buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">ФОРМА РЕЗУЛЬТАТ ЗВОНКА</h6>
            </div>

            <div class="card-body">

                <?php

                $company['formresult'] = '[{"NAME":"ИМЯ","TYPE":1}]';

                $FORMRESULT = json_decode($company['formresult'],TRUE);


//                show($FORMRESULT);

                renderform($FORMRESULT);

                ?>



            </div>
        </div>
        <!-- /left aligned buttons -->


    </div>


    <div class="col-md-6">

        <!-- Left aligned buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Редактирование формы результата звонка</h6>

            </div>

            <div class="card-body">


                <table class="table table-bordered ">
                    <tbody><tr>
                        <td><b>ПОЛЕ/ВОПРОС</b></td>
                        <td><b>ТИП ВВОДА</b></td>
                        <td><b>ДОБАВИТЬ</b></td>
                    </tr>

                    <tr>
                        <td><input type="text" class="form-control input-medium" id="NAME" placeholder="Например: Фамилия"></td>

                        <td><select id="TYPE" class="form-control input-small">
                                <option value="1">ТЕКСТ</option>
                                <option value="2">ДАТА</option>
                            </select>
                        </td>



                        <td>
                            <button class="btn btn-success" id="clone"><i class="fa fa-plus" aria-hidden="true"></i></button>

                        </td>


                    </tr>

                    </tbody></table>

                



            </div>
        </div>
        <!-- /left aligned buttons -->


    </div>




</div>





