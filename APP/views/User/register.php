<!-- Registration form -->


<form action="index.html" class="flex-fill">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Регистрация</h5>
                        <span class="d-block text-muted">CASHCALL - биржа операторов на телефоне</span>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Left inline radios</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="custom-inline-radio" id="custom_radio_inline_unchecked" checked="">
                            <label class="custom-control-label" for="custom_radio_inline_unchecked">Custom selected</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="custom-inline-radio" id="custom_radio_inline_checked">
                            <label class="custom-control-label" for="custom_radio_inline_checked">Custom unselected</label>
                        </div>
                    </div>


                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="text" class="form-control" placeholder="Choose username">
                        <div class="form-control-feedback">
                            <i class="icon-user-plus text-muted"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control" placeholder="First name">
                                <div class="form-control-feedback">
                                    <i class="icon-user-check text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="text" class="form-control" placeholder="Second name">
                                <div class="form-control-feedback">
                                    <i class="icon-user-check text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="password" class="form-control" placeholder="Create password">
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="password" class="form-control" placeholder="Repeat password">
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="email" class="form-control" placeholder="Your email">
                                <div class="form-control-feedback">
                                    <i class="icon-mention text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="email" class="form-control" placeholder="Repeat email">
                                <div class="form-control-feedback">
                                    <i class="icon-mention text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- /registration form -->



<?php if (isset($_SESSION['form_data']) ) unset($_SESSION['form_data'])?>





