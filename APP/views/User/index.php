
<h1 align=center class="page-header">Вход <?=CONFIG['NAME']?></h1>
<form action="/user/" method="post" class="form-signin">
    <p><input class="form-control"  type="text" placeholder="E-mail" name="login-email" autocomplete="off" required autofocus></p>
    <p><input class="form-control" type="password" name="login-password" autocomplete="off"  placeholder="Пароль" ></p>
    <p><input class="btn btn-lg btn-primary btn-block" type="submit"  value="ВХОД" ></p>
</form>
<p align=right><a href="/user/register/" >Регистрация</a> | <a href="/user/recovery/">Забыли пароль?</a></p>





	