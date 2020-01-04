<?show($_SESSION)?>

<h1>ВНИМАНИЕ!</h1>

Необходимо подтвердить регистрацию.<br> Код подтерждения отправлен на E-mail.



<div class="alert alert-info" role="alert">
    <strong>Внимание!</strong><br> Необходимо подтвердить регистрацию. Код подтерждения отправлен на E-mail.
</div>
<h4 align=center class="page-header">Код для подтверждения регистрации</h4><br>
<form action="/user/confirmRegister/" method="post" class="form-signin">
    <p><input class="form-control" type="text" placeholder="Код из E-mail" name="confirm-code"></p><br>
<!--
    <p><input class="btn btn-lg btn-primary btn-block" type="submit" onclick="yaCounter46849950.reachGoal('REG'); return true;"
-->
    <p><input class="btn btn-lg btn-primary btn-block" type="submit"   value="Завершить регистрацию" ></p>
</form>


<hr>
<h3>КОД НЕ ПРИШЕЛ НА E-MAIL?</h3>
1. Откройте ВСЮ почту. Проверьте все папки, а не только не "ВХОДЯЩИЕ"<br>
2. Проверить папку "ПРОМОАКЦИИ"<br>


