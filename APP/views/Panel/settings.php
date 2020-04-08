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
        <form action="#">
            <div class="form-group">
                <div class="row">

                    <div class="col-md-6">
                        <label>Current password</label>
                        <input type="password" value="password" readonly="readonly" class="form-control">

                        <label>Repeat password</label>
                        <input type="password" placeholder="Repeat new password" class="form-control">

                        <label>New password</label>
                        <input type="password" placeholder="Enter new password" class="form-control">
                        

                    </div>


                    <div class="col-md-6">

                        <label>Notifications</label>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-input-styled" checked data-fouc>
                                Password expiration notification
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-input-styled" checked data-fouc>
                                New message notification
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-input-styled" checked data-fouc>
                                New task notification
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-input-styled">
                                New contact request notification
                            </label>
                        </div>


                    </div>



                </div>
            </div>




            <div class="text-left">
                <button type="submit" class="btn btn-warning">Save changes</button>
            </div>
        </form>
    </div>
</div>
<!-- /account settings -->