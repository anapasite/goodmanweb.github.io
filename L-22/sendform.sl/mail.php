<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
//Тут указываем на какой ящик посылать письмо
$to = "kvest.sochi@mail.ru";
//Далее идет тема письма и само сообщение
// Тема письма
$subject = "Заявка с созданного сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br>
password: ".htmlspecialchars($password);
// Отправляем письмо при помощи функции mail();
$headers = "From: sendform.sl <sendid@sendform.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>