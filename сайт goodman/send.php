<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//тут указываем на какой ящик отправлять письмо
$to = "kvest.sochi@mail.ru";
//Далее идёт тема и само сообщение
$subject = "Заявка с сайта";
$message = "
Письмоотправленно из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя:".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "from: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html;
charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('location: thanks.html');
exit();
?>