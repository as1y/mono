

<h1 align=center class="page-header">Регистрация <?=CONFIG['NAME']?></h1>
<form action="/user/register/" method="post" class="form-signin">
    <b>Имя Фамилия*:</b><br>
    <p>
    <input type="text" class="form-control" id="signup-username" name="signup-username" value="<?=isset($_SESSION['form_data']['signup-username']) ? h($_SESSION['form_data']['signup-username']) : '';?>" placeholder="Иван">
    </p>
    <b>Ваш E-MAIL*:</b><br>

    <p>
    <input type="email" class="form-control" id="signup-email" name="signup-email" value="<?=isset($_SESSION['form_data']['signup-email']) ? h($_SESSION['form_data']['signup-email']) : '';?>" placeholder="mail@example.com">
    </p>


    <b>Пароль*:</b><br>
    <p>
    <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="не менее 5 символов">
    </p>
    <b>Повторите пароль*:</b><br>

    <p>
    <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm">
    </p>


    <p><input class="btn btn-lg btn-primary btn-block" type="submit"  value="РЕГИСТРАЦИЯ" ></p>
</form>
<p align=right> <a href="/user/login/">Войти</a></p>

<?php if (isset($_SESSION['form_data']) ) unset($_SESSION['form_data'])?>



<?php if (isset($_SESSION['form_data']) ) unset($_SESSION['form_data'])?>     