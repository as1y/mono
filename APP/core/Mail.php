<?php


namespace APP\core;

use APP\core\base\View;
use Exception;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Sendpulse\RestApi\Storage\SessionStorage;
use Sendpulse\RestApi\Storage\TokenStorageInterface;

/**
 * Класс для отправки писем.
 * Class Mail
 * @package APP\core\base
 */
class Mail extends ApiClient
{
    public function __construct($userId, $secret, $tokenStorage)
    {
        parent::__construct($userId, $secret, $tokenStorage);
    }


    /**
     * @param $view
     * @param $subject
     * @param $data
     * @param $mailConfig
     * @param string $layout
     */
    public static function sendMail($view,$subject, $data, $mailConfig, $layout = 'MAIL')
    {


        $vObj = new View(['controller' => 'Mail'], $layout, $view);
        $mailHtml = $vObj->render($data,true);


        $mailData = [
            'html' => $mailHtml,
            'text' => 'EMPTY',
            'subject' => $subject,
            'from' => [
                'name' => CONFIG['BASEMAIL']['name'],
                'email' => CONFIG['BASEMAIL']['email'],
            ],
            'to' => [
                [
                    'name' => CONFIG['BASEMAIL']['name'],
                    'email' => CONFIG['BASEMAIL']['email'],
                ],
            ],
//            'bcc' => [
//                [
//                    'name' => 'Manager',
//                    'email' => 'manager@example.com',
//                ],
//            ],
//            'attachments' => [
//                'file.txt' => file_get_contents(PATH_TO_ATTACH_FILE),
//            ],
        ];
        $mailData = array_merge($mailData, $mailConfig);
        try {
            $mailClient = new Mail(CONFIG['mail']['API_USER_ID'], CONFIG['mail']['API_SECRET'], new SessionStorage());
           //TODO обработать ошибки
            $mailClient->smtpSendMail($mailData);

        } catch (Exception $e) {
            if(ERRORS) {
                e($e);
            }
        }
    }
}