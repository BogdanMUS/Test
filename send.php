<?php
    if($_POST)['fio']
    {
        $fio = 'Укажите ФИО';
    }

    $to = "bogdanmusnik@yandex.ru";
    $from = trim($_POST['email']);

    $headers = "From: $from" . "\r\n" .
    "Reply-to: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $fio, $headers))
    {
        echo 'Письмо отправлено';
    }else
    {
        echo 'Письмо  не отправлено';
    }
?>