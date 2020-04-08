<!-- Account settings -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Настройки аккаунта</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form action="/panel/settings/" method="post" data-fouc>
            <div class="form-group">
                <div class="row">

                    <div class="col-md-6">
                        <label>Текущий пароль</label>
                        <input type="password" name="now" placeholder="Текущий пароль" class="form-control">

                        <label>Новый пароль</label>
                        <input type="password" name="newpass" placeholder="Новый пароль" class="form-control">

                        <label>Повторите новый пароль</label>
                        <input type="password" name="newpassrepeat" placeholder="Повторите новый парол" class="form-control">


                    </div>


                    <div class="col-md-6">

                        <label>E-mail уведомления</label>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="messages" class="form-input-styled" checked data-fouc>
                                Личная переписка
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox"  name="news" class="form-input-styled" checked data-fouc>
                                Системные уведомления
                            </label>
                        </div>



                    </div>



                </div>
            </div>




            <div class="text-left">
                <button type="submit" class="btn btn-warning"><i class="icon-pencil mr-2"></i>Сохранить изменения</button>
            </div>
        </form>
    </div>
</div>
<!-- /account settings -->