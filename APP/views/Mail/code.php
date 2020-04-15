Здравствуйте, <?=$_SESSION['confirm']['username']?>!<br>

Добро пожаловать в сервис <?=CONFIG['NAME']?><br>
<p> Для начала работы с системой необходимо подтвердить E-MAIL перейдя по сылке:<br>
  <b>https://<?=CONFIG['DOMAIN']?>/user/confirmemail/?code=<?=$_SESSION['confirm']['code']?></b>

</p>
Данные для входа в систему:<br>
<b>Ваш Логин:</b> <?=$_SESSION['confirm']['email']?><br>
<b>Ваш Пароль:</b> <?=$_SESSION['confirm']['password2']?><br>
