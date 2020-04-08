<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card card-body text-center">
            <div class="mb-3">
                <h6 class="font-weight-semibold mb-0 mt-1"><?= $_SESSION['ulogin']['username'] ?></h6>

                <span class="d-block text-muted"><?= rendertypeaccount($_SESSION['ulogin']['type']) ?></span>


            </div>

            <a href="#" class="d-inline-block mb-3">
                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round"
                     width="150" height="150" alt="">
            </a>

            <button type="button" class=" btn btn-info"><i class="icon-pencil mr-2"></i> Посмотреть профиль</button>


        </div>


        <ul class="list-group  border-top">

            <a href="#" class="list-group-item list-group-item-action">
                <span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Рейтинг
									</span>
                <span class="badge bg-success ml-auto">0</span>
            </a>


            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Всего звонков
									</span>
                <span class="badge bg-success ml-auto">0</span>
            </a>


            <a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Успешных
									</span>
                <span class="badge bg-success ml-auto">0</span>
            </a>


        </ul>


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


                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                            <label>Имя Фамилия<span class="text-danger">*</span></label>
                            <input type="text" value="<?=$_SESSION['ulogin']['username']?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Роль: <span class="text-danger">*</span> </label>
                                <select name="tematika" data-placeholder="Выберете направление" class="form-control form-control-select2 required" data-fouc>
                                    <option value="NULL">Оператор</option>
                                    <option value="2">Рекламодатель</option>
                                </select>

                            </div>





                        </div>
                        <div class="col-md-6">

                            <label>Аватар</label>
                            <input type="file" class="file-input" data-fouc>
                            <span class="form-text text-muted">Для полноценной работе в сервисе необходимо загрузить аватар</span>





                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Моя презентация: <span class="text-danger">*</span></label>
                                <textarea rows="5" cols="5" name="aboutme" value="<?=$_SESSION['ulogin']['aboutme']?>" class="form-control required" placeholder="Обо мне"></textarea>
                                <span class="form-text text-muted">Это описание будут видеть рекламодаели.</span>
                            </div>
                        </div>


                    </div>




                    <div class="text-left">
                        <button type="submit" class=" btn btn-warning"><i class="icon-pencil mr-2"></i> СОХРАНИТЬ
                            ИЗМЕНЕНИЯ
                        </button>
                    </div>


                </form>
            </div>
        </div>
        <!-- /profile info -->
    </div>
</div>