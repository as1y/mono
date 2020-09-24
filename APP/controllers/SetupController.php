<?php
namespace APP\controllers;
use APP\models\Main;
use APP\core\Cache;
use APP\core\base\Model;
use APP\models\Panel;

class SetupController extends AppController {


	public function indexAction(){

        $Panel = new Panel();
        $this->layaout = false;


        // Проверка на СЕТАП
       $setup = $Panel->checksetup();
        if ($setup== true) exit("Сетап уже произведен");
        // Проверка на СЕТАП

        // Получаем ТОКЕН
          $token = AuthAdmitad();
        // Получаем ТОКЕН

        // Проверяем создана ли папка для логотипов. Если нет, то создаем
        checkfilelogos();

        $campanings = $Panel->getPrograms($token);

        $Panel->addMagazin($campanings, $token);
        $Panel->updatecheck("company");
        echo "<h1>КОМПАНИЯ ДОБАВЛЕНА!</h1>";


        // Загрузка купонов
        $Panel->addCoupons($token);
        $Panel->updatecheck("coupons");
        echo "<h1>КУПОНЫ ДОБАВЛЕНЫ</h1>";


        // Загрузка баннеров
        $Panel->WorkWithBanners($token);
        $Panel->updatecheck("banners");
        echo "<h1>БАННЕРА ДОБАВЛЕНЫ</h1>";



      // Взять все программы

        // Ищем компанию

        // Забираем купоны













    }










}
?>