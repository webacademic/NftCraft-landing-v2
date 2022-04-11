<?php 
$secret = $_POST['secret'];
$token = "5192054740:AAE9MDc7Qo5271ei0E1_bdbM4tDKV1WcqjU";
$chat_id = "-1001600678532";

$name = $_POST['name'];
$telegram = $_POST['telegram'];
$phone = $_POST['phone'];

$arr = array(
	'Вид: ' => 'Заявка',
	'Имя: ' => $name,
	'Telegram: ' => $telegram,
	'Телефон: ' => $phone,
  );

  foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A";
  };

// require_once('phpmailer/PHPMailerAutoload.php');
// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'VideoTehMontage@yandex.ru';                 // Наш логин
// $mail->Password = '3591Eff6';                           // Наш пароль от ящика
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to
 
// $mail->setFrom('VideoTehMontage@yandex.ru', 'TeamDigital');   // От кого письмо 
// $mail->addAddress('WebAcademic@yandex.ru');     // Add a recipient
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Пользователь оставил свои данные на помощь-в-дороге.рф';
// $mail->Body    = '
// 	Пользователь оставил свои данные <br> 
// 	Имя: ' . $name . ' <br>
// 	Телефон: ' . $phone . ' <br>
// 	Сообщение: ' . $message . '';
// $mail->AltBody = 'Это альтернативный текст';

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


// if(!$mail->send()) {
// 	return false;
// } else {
//     if($secret != 'harfestd') {
// 		return false;
// 	}
// }

if ($sendToTelegram) {
	echo "Good";
  } else {
	echo "Error";
  }

?>