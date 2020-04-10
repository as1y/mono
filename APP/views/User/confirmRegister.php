<form class="login-form" action="index.html">
    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <i class="icon-user-check icon-2x text-danger border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">Подверждение регистрации</h5>
                <span class="d-block text-muted">Необходимо подтвердить регистрацию. Код подтерждения отправлен на E-mail.</span>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-right">
                <input type="email" class="form-control" placeholder="Your email">
                <div class="form-control-feedback">
                    <i class="icon-mail5 text-muted"></i>
                </div>
            </div>

            <button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button>
        </div>
    </div>

    <?php show($_SESSION['confirm']['code']); ?>


</form>