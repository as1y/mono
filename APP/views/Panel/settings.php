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
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>New password</label>
                        <input type="password" placeholder="Enter new password" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Repeat password</label>
                        <input type="password" placeholder="Repeat new password" class="form-control">
                    </div>
                </div>
            </div>



            <div class="text-right">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
<!-- /account settings -->