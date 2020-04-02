<!DOCTYPE html>
<html lang="ru" class="font-primary">
	<head>
<?php \APP\core\base\View::getMeta()?>



  </head>

  <body>

   <h1>ZAGOLOVOK1111</h1>

   <img src=<?=CONFIG['LOGO']?>><br>



   <a href="/user">login</a><br>
   <a href="/user/register">register</a><br>


   КОНТЕНТ
   <?=$content?>

  
  </body>


</html>