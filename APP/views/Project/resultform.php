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
                <h6 class="card-title">Left aligned buttons</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <label>Your name:</label>
                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                    </div>

                    <div class="form-group">
                        <label>Your password:</label>
                        <input type="password" class="form-control" placeholder="Your strong password">
                    </div>

                    <div class="form-group">
                        <label>Your message:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                    </div>

                    <div class="d-flex justify-content-start align-items-center">
                        <button type="submit" class="btn btn-light">Cancel</button>
                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /left aligned buttons -->


    </div>




</div>




<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">ТЕКУЩАЯ ФОРМЫ РЕЗУЛЬТАТА</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>


    <div class="row">
       <div class="card-body justify-content-center">










    </div>





</div>





</div>



