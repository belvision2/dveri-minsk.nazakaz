<?php
$id_test='1'; //id теста (при запуске нового теста смените цифру на любую другую)
$count=0;

$my_url[$count++]='index.html';
$my_url[$count++]='index.html';

// код ниже лучше не трогать
$counterfilename='counter'.md5($SCRIPT_NAME).'.txt';
$cookiename='splitpage'.$id_test.md5($SCRIPT_NAME);
if (!isset($HTTP_COOKIE_VARS[$cookiename]))
{
@ $splitpage=file_get_contents($counterfilename);
$splitpage=intval($splitpage)+1;
if ($splitpage>=$count) $splitpage=0;
$f=fopen($counterfilename,'w+');
fputs($f,strval($splitpage));
fclose($f);
setcookie($cookiename, $splitpage, time()+1000000);
} else $splitpage=$HTTP_COOKIE_VARS[$cookiename];
if ($QUERY_STRING != '') $my_url[$splitpage].= '?'.$QUERY_STRING;
Header('Location:'.$my_url[$splitpage]);
exit;
?>