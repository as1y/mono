<!-- Account settings -->
<div class="card">
    <div class="card-header bg-dark text-white header-elements-inline">
        <h5 class="card-title">НАСТРОЙКИ АККАУНТА</h5>

    </div>

    <div class="card-body">

            <div class="form-group">
                <div class="row">

                    <div class="col-md-6">
                        <form action="/panel/settings/" method="post" data-fouc>

                        <label>Текущий пароль</label>
                        <input type="password" name="now" placeholder="Текущий пароль" class="form-control">

                        <label>Новый пароль</label>
                        <input type="password" name="newpass" placeholder="Новый пароль" class="form-control">

                        <label>Повторите новый пароль</label>
                        <input type="password" name="newpassrepeat" placeholder="Повторите новый парол" class="form-control">
                        <br>
                            <input type="hidden" name="changepassword" value="1">

                        <div class="text-left">
                            <button type="submit" class="btn btn-warning"><i class="icon-pencil mr-2"></i>Изменить пароль</button>
                        </div>
                        </form>

                    </div>


                    <div class="col-md-6">

                        <form action="/panel/settings/" method="post" data-fouc>
                        <label>E-mail уведомления</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="messages" class="form-input-styled" <?=($_SESSION['ulogin']['nmessages'] == 1) ? "checked" : ""?> data-fouc>
                                Личная переписка
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox"  name="news" class="form-input-styled"  <?=($_SESSION['ulogin']['nnews'] == 1) ? "checked" : ""?> data-fouc>
                                Системные уведомления
                            </label>
                        </div>

                            <input type="hidden" name="changenotification" value="1">

                            <div class="text-left">
                                <button type="submit" class="btn btn-warning"><i class="icon-pencil mr-2"></i>Изменить уведомления</button>
                            </div>
                        </form>




                    </div>



                </div>
            </div>





        </form>
    </div>
</div>
<!-- /account settings -->