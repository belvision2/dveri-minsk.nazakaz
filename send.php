<?php
$logo = ($_SERVER['SERVER_NAME']);
$ips = $_SERVER['REMOTE_ADDR'];
$ipl = "http://ipgeobase.ru/?address=";


$referer2 = $_SERVER['HTTP_REFERER'];
$referer5 = $_SERVER['HTTP_REFERER'];
$referer2 = urldecode($referer2); 
$referer2 = substr($referer2, 7, 20);

$user_name = htmlspecialchars($_POST['name'], NULL, 'utf-8');
$user_name2 = htmlspecialchars($_POST['familiya'], NULL, 'utf-8');
$user_phone = htmlspecialchars($_POST['phone'], NULL, 'utf-8');
$messaga = htmlspecialchars($_POST['messaga'], NULL, 'utf-8');
$email = htmlspecialchars($_POST['email'], NULL, 'utf-8');
$form_name = htmlspecialchars($_POST['comagic'], NULL, 'utf-8');
$tovar_name = htmlspecialchars($_POST['form_hidden_62'], NULL, 'utf-8');


$where = htmlspecialchars($_POST['where']);
$where2 = substr($where, 7, 16);
$where3 = substr($where, 50, 70);
$where3 = urldecode($where3); 
$ref = $_SERVER['HTTP_REFERER'];
parse_str($ref, $output);
$slova = $output['utm_term'];  // ключевые слова
$kompania = $output['utm_campaign']; // название компании
$p = $output['utm_source']; // название поисковика
$zagolovok = $output['utm_medium']; // заголовок обьявления
$text = $output['utm_text']; // текст обьявления 1
$text2 = $output['utm_text2']; // текст обьявления 2
$phrase = urldecode($where); 


  $to  = '375291444400@sms.velcom.by,vitaminiby@ya.ru'; 
 $klient  = '375291027027@sms.velcom.by,skohilmail@gmail.com'; //
$subject = 'двери-минск.назаказ - '.$user_phone.'';
$from = "$name";
// текст письма
$message = '
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	</head>
	<body>
	<p><strong> &nbsp;</strong> '.$tovar_name.'</p>
<p><strong> &nbsp;</strong> '.$email.'</p>
<p><strong></strong> '.$form_name.'</p>
<p><strong></strong> '.$user_name.'</p>
<p><strong></strong> '.$user_name2.'</p>
<p><strong></strong> '.$user_phone.'</p>
<p> '.$messaga.'</p>
<p>Страница откуда отправлено '.$referer5.'</p>
<p> '.$count.'</p>
<p> '.$user_otz.'</p>

<p> '.$where2.'</p>
<p> '.$where3.'</p>


<p> '.$slova.'</p>
<p> '.$p.'</p>
<p> '.$ips.'</p>
<p> '.$prod_name_otz.'</p>
<p> '.$kompania.'</p>
<p> '.$zagolovok.'</p>
<p> '.$text.'</p>
<p> '.$text2.'</p>



	</body>
</html>

';
$messageklient = '
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	</head>
	<body>
	<p><strong> &nbsp;</strong> '.$tovar_name.'</p>
<p><strong> &nbsp;</strong> '.$email.'</p>
<p><strong></strong> '.$form_name.'</p>
<p><strong></strong> '.$user_name.'</p>
<p><strong></strong> '.$user_name2.'</p>
<p><strong></strong> '.$user_phone.'</p>
<p> '.$messaga.'</p>
<p>Страница откуда отправлено '.$referer5.'</p>
<p> '.$count.'</p>
<p> '.$user_otz.'</p>

<p> '.$where2.'</p>
<p> '.$where3.'</p>


<p> '.$slova.'</p>
<p> '.$p.'</p>
<p> '.$ips.'</p>
<p> '.$prod_name_otz.'</p>
<p> '.$kompania.'</p>
<p> '.$zagolovok.'</p>
<p> '.$text.'</p>
<p> '.$text2.'</p>



	</body>
</html>

';
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: vitaminiby@ya.ru";
if(empty($user_phone)) {
}
else {
mail($to, $subject, $message, $headers);
mail($klient, $subject, $messageklient, $headers);
$URL="index_otpr.html";
header ("Location: $URL");
}
	?>