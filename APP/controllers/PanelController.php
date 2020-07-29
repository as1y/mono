<?php
namespace APP\controllers;
use APP\core\Cache;
use APP\models\Addp;
use APP\models\Panel;
use APP\core\base\Model;


class PanelController extends AppController {
	public $layaout = 'PANEL';
    public $BreadcrumbsControllerLabel = "Панель управления";
    public $BreadcrumbsControllerUrl = "/panel";



    public function indexAction()
    {

        //Информация о компаниях клиента

        $Panel =  new Panel();


        $META = [
            'title' => 'FIRST PAGE',
            'description' => 'FIRST PAGE',
            'keywords' => 'FIRST PAGE',
        ];

        $BREADCRUMBS['HOME'] = ['Label' => $this->BreadcrumbsControllerLabel, 'Url' => $this->BreadcrumbsControllerUrl];
        $BREADCRUMBS['DATA'][] = ['Label' => "FAQ"];
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);

//        $ASSETS[] = ["js" => "/global_assets/js/plugins/tables/datatables/datatables.min.js"];
//        \APP\core\base\View::setAssets($ASSETS);

        \APP\core\base\View::setMeta($META);
        \APP\core\base\View::setBreadcrumbs($BREADCRUMBS);






           $token = $Panel->AuthAdmitad();


           // Работа с партнерскими программами

//           $campanings = $Panel->getPrograms($token);
//           $Panel->addMagazin($campanings, $token);
//
//
//         $Panel->addCoupons($token);

//        $Panel->WorkWithBanners($token);



        //Удаление старых купонов
//        $Panel->removeFinishCoupon();
        //Удаление старых купонов








    }




}
?>