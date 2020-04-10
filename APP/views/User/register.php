<!-- Registration form -->


<form action="index.html" class="flex-fill">
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">ВХОД В СИСТЕМУ</h5>
                <span class="d-block text-muted">Cashcall.ru - биржа операторов на телефоне</span>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="email" name="email" class="form-control" required="" placeholder="E-mail">
                <div class="form-control-feedback">
                    <i class="icon-user text-muted"></i>
                </div>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="password" name="password" class="form-control" required="" placeholder="Password">
                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Войти <i class="icon-circle-right2 ml-2"></i></button>
            </div>

            <div class="text-center">
                <a href="/user/recovery/">Забыли пароль?</a>
            </div>
        </div>
    </div>
</form>
<!-- /registration form -->



<?php if (isset($_SESSION['form_data']) ) unset($_SESSION['form_data'])?>





