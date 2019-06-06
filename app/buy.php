<?php 

require('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$buy_name = $_POST['buy_name'];
$buy_phone = $_POST['buy_phone'];
$buy_comment = $_POST['buy_comment'];
$buy_amount = $_POST['buy_amount'];
$buy_good = $_POST['buy_good'];
$buy_sum = $_POST['buy_sum'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'avtoscanerpro@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = ',f,kjufy'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('avtoscanerpro@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('oooanvers@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на покупку с avtoscanerpro.ru';
$mail->Body    = 'Пользователь: ' .$buy_name. ' с номером: ' .$buy_phone.'<br> написал: '.$buy_comment.
'<br>Заказ: ' .$buy_good. '. Количество: ' .$buy_amount.  'шт. <br> Сумма: <b>'.$buy_sum. '<b> рублей.';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error. Cообщение не отправлено <a href="/">Главная</a>';
} else {
    header('location: index.php?mailsend');
    echo "Сообщение отправлено";
}
?>