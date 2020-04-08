<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card card-body text-center">
            <div class="mb-3">
                <h6 class="font-weight-semibold mb-0 mt-1"><?=$_SESSION['ulogin']['username']?></h6>

                <span class="d-block text-muted"><?=rendertypeaccount($_SESSION['ulogin']['type'])?></span>


            </div>

            <a href="#" class="d-inline-block mb-3">
                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="150" height="150" alt="">
            </a>

            <button type="button" class=" btn btn-info"><i class="icon-pencil mr-2"></i> Посмотреть профиль</button>


            <ul class="list-group  border-top">

                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Новых звонков на одобрение
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Новых операторов на одобрение
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>


                <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Нужен ваш ответ
									</span>
                    <span class="badge bg-success ml-auto">0</span>
                </a>




            </ul>
        </div>
    </div>




    <div class="col-xl-9 col-sm-6">
        <!-- Profile info -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">МОЙ ПРОФИЛЬ</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="/project/profile/" method="post" data-fouc>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                                <input type="text" value="Eugene" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Full name</label>
                                <input type="text" value="Kopyov" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address line 1</label>
                                <input type="text" value="Ring street 12" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Address line 2</label>
                                <input type="text" value="building D, flat #67" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>City</label>
                                <input type="text" value="Munich" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>State/Province</label>
                                <input type="text" value="Bayern" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>ZIP code</label>
                                <input type="text" value="1031" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Your country</label>
                                <select class="form-control form-control-select2" data-fouc>
                                    <option value="germany" selected>Germany</option>
                                    <option value="france">France</option>
                                    <option value="spain">Spain</option>
                                    <option value="netherlands">Netherlands</option>
                                    <option value="other">...</option>
                                    <option value="uk">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone #</label>
                                <input type="text" value="+99-99-9999-9999" class="form-control">
                                <span class="form-text text-muted">+99-99-9999-9999</span>
                            </div>

                            <div class="col-md-6">
                                <label>Upload profile image</label>
                                <input type="file" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>



                    <div class="text-left">
                        <button type="submit" class=" btn btn-warning"><i class="icon-pencil mr-2"></i> СОХРАНИТЬ ИЗМЕНЕНИЯ</button>
                    </div>



                </form>
            </div>
        </div>
        <!-- /profile info -->
    </div>
</div>