<form class="login-form" action="/user/confirmRegister/" method="post">
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <i class="icon-user-check icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">Подверждение регистрации</h5>
                <span class="d-block text-muted">Код подтерждения отправлен на E-mail.</span>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-right">
                <input type="text" name="code" class="form-control" placeholder="Код из E-mail">
                <div class="form-control-feedback">
                    <i class="icon-eye text-muted"></i>
                </div>
            </div>

            <button type="submit" class="btn bg-teal-400 btn-block"><i class="icon-play4 mr-2"></i> Завершить регистрацию</button>
        </div>
    </div>

    <?php show($_SESSION['confirm']['code']); ?>


</form>