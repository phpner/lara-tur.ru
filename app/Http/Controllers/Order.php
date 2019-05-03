<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;


class Order
{
    public function sendEmail(Request $request){

        $dataOrder = $request->input('dataOrder');
        $dataOrder = \json_decode($dataOrder);

        $data =  $request->all();

        $name = $request->input('name');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $from = $request->input('from');
        $date = $dataOrder->date;
        $nights = $dataOrder->nights;
        $adults = $dataOrder->adults;
        $kids = $dataOrder->kids;
        $to_name = $dataOrder->to_name;
        $tour_url = $dataOrder->tour_url;
        $curort = $dataOrder->curort;
        $rounded = $nombre_format_francais = number_format($dataOrder->costValues->RUB->rounded, 0, '', ' ');;
        $hotel = $dataOrder->residenses->hotel_name;
        $hotel_link = $dataOrder->residenses->hotel_url;
        $meal_const = $dataOrder->residenses->meal_const;
        $meal_description = $dataOrder->meal_description;
        $o_room_name = $dataOrder->residenses->o_room_name;
        $o_ht_pl_name = $dataOrder->residenses->o_ht_pl_name;
        $ht_pl_description = $dataOrder->residenses->ht_pl_description;
        $hotel_rating = $dataOrder->residenses->hotel_rating;

        $monthes = array(
            1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
            5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
            9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        );

        $data = (date('d ') . $monthes[(date('n'))] . date(' Y, H:i:s'));

        $body =  $data;

        $body .= "<br> Имя: ".$name;
        $body .= "<br> Почта: ".$email;
        $body .= "<br> Телефон: ".$tel;
        $body .= "<br> Информация о туре<br><br><br>";
        $body .= "<br> Вылет с: ".$from;
        $body .= "<br> Курокт: ".$curort;
        $body .= "<br> Дата вылета: ".$date;
        $body .= "<br> Кол-во ночей: ".$nights;
        $body .= "<br> Кол-во Взрослых: ".$adults;
        $body .= "<br> Питание: ".$meal_const.' / '.$meal_description;
        $body .= "<br> Кол-во Детей: ".$kids;
        $body .= "<br> Название отеля: ".$hotel;
        $body .= "<br> Ссылка на отель: ".$hotel_link;
        $body .= "<br> Рейтинг: ".$hotel_rating;
        $body .= "<br> Номер : ".$o_room_name.' / '.$o_ht_pl_name.' / '.$ht_pl_description;
        $body .= "<br> Тур оператор: ".$to_name;
        $body .= "<br> Ссылка на тур: ".$tour_url;
        $body .= "<br><p style='color: #af0000; font-weight: bold'> Цена: " .$rounded."Рублей</p>";




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



        var_dump( $dataOrder->tour_url);
     //  $order = json_decode($data[0]);

       //var_dump($order);
    }

}
