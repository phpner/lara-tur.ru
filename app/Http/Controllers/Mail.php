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


        if($request['name']){
            $name = trim(strip_tags($request['name']));
        }else{
            $name = "";
        }
        if($request['text']){
            $text = trim(strip_tags($request['text']));
        }else{
            $text = "";
        }

        if($request['email']){
            $email = trim(strip_tags($request['email']));
        }else{
            $email = "";
        }

        if($request['tel']){
            $tel = trim(strip_tags($request['tel']));
        }else{
            $tel = "";
        }

        if($request['field_request_country']){
            $field_request_country = 'Страна:'. trim(strip_tags($request['field_request_country']));
        }else{
            $field_request_country = "";
        }


        $body = "<br> Дата: $data <br> Имя: $name <br> Телефон: $tel <br>$field_request_country<br> Email: $email <br> Сообщение: $text " ;

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
        $mail->addAddress("phpner@gmail.com","phpner"); //куда отправлять список через ","
        $mail->FromName = 'Мой сайт';
        $mail->Subject = "Кто-то хочет что-то спросить";
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
