<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail extends Controller
{
    public function sendForm(Request $request){

        $monthes = array(
            1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
            5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
            9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        );

        $data = (date('d ') . $monthes[(date('n'))] . date(' Y, H:i:s'));

        $body =  $data;

        if($request['fromform']){
            $body  = "<h1 style='color: indianred;text-align: center'>".trim(strip_tags($request['fromform'])."</h1>");
            $body .=  $data;
        }
        if($request['name']){
            $body .= "<br> Имя: ".trim(strip_tags($request['name']));
        }
        if($request['email']){
            $body .= "<br> email: ".trim(strip_tags($request['email']));
        }

        if($request['tel']){
            $body .= "<br> Телефон: ".trim(strip_tags($request['tel']));
        }

        if($request['field_request_country']){
            $body .= "<br> Страна: ".trim(strip_tags($request['field_request_country']));
        }
        if($request['text']){
            $body .= "<br> Сообщения: ".trim(strip_tags($request['text']));
        }



        $mail = new PHPMailer(); //вызываем класс

      /*  $mail->IsSMTP();
        $mail->Host = 'free.mboxhosting.com';
        $mail->SMTPAuth = true;
        $mail->CharSet = 'utf-8'; //Устанавливаем кодировку

        $mail->Username = 'phpner@phpner.ga';
        $mail->Password = '02082014zx';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 25;*/

        $mail->From = 'phpner@phpner.ga';
        $mail->CharSet = 'utf-8';   //Устанавливаем кодировку
        $mail->SetLanguage('ru');   //для ошибок итд.
        $mail->addAddress("phpner@gmail.com","phpner");
        $mail->addAddress("zakaz@5-sezonov.ru","5sezonov");
        $mail->FromName = 'Мой сайт';
        $mail->Subject = "Заявка с сайта 5-сезонов.";
        $mail->Body = $body;
        $mail->IsHTML(true);
//отправка
        if(!$mail->Send()) {
            return $mail->ErrorInfo;
        } else {
            return 'ok';
        }


    }
}
