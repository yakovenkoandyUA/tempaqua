<?php
if ($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $response = "
    Имя - {$name}
    Телефон - {$phone}
    Email - {$email}
    ";

    mail("yamnyk.vlog@gmail.com", "Заявка с сайта aqua-smart.com.ua", $response);
}
?>