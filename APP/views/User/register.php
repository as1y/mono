<!-- Registration form -->


<form action="index.html" class="flex-fill">
    <form class="login-form" action="index.html">
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Create account</h5>
                    <span class="d-block text-muted">All fields are required</span>
                </div>

                <div class="form-group text-center text-muted content-divider">
                    <span class="px-2">Your credentials</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control" placeholder="Username">
                    <div class="form-control-feedback">
                        <i class="icon-user-check text-muted"></i>
                    </div>
                    <span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> This username is already taken</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="form-control-feedback">
                        <i class="icon-user-lock text-muted"></i>
                    </div>
                </div>

                <div class="form-group text-center text-muted content-divider">
                    <span class="px-2">Your contacts</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control" placeholder="Your email">
                    <div class="form-control-feedback">
                        <i class="icon-mention text-muted"></i>
                    </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control" placeholder="Repeat email">
                    <div class="form-control-feedback">
                        <i class="icon-mention text-muted"></i>
                    </div>
                </div>

                <div class="form-group text-center text-muted content-divider">
                    <span class="px-2">Additions</span>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <div class="uniform-checker"><span class="checked"><input type="checkbox" name="remember" class="form-input-styled" checked="" data-fouc=""></span></div>
                            Send me <a href="#">test account settings</a>
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <div class="uniform-checker"><span class="checked"><input type="checkbox" name="remember" class="form-input-styled" checked="" data-fouc=""></span></div>
                            Subscribe to monthly newsletter
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <div class="uniform-checker"><span><input type="checkbox" name="remember" class="form-input-styled" data-fouc=""></span></div>
                            Accept <a href="#">terms of service</a>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn bg-teal-400 btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>
            </div>
        </div>
    </form>
</form>
<!-- /registration form -->



<?php if (isset($_SESSION['form_data']) ) unset($_SESSION['form_data'])?>





