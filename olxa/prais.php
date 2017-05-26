<?php
$brend = 'Юркас'; 
$material = 'Массив ольхи';
$karkas = 'Массив ольхи';

$arr = array('ВеронаДГ, бренди', 'ВеронаДГ, венге', 'ВеронаДГ, медовый орех', 'ВеронаДО, бренди', 'ВеронаДО, венге', 'ВеронаДО, медовый орех', 'ВиолаДГ, бренди', 'ВиолаДГ, медовый орех', 'ВиолаДО, бренди', 'ВиолаДО, медовый орех', 'ДиваДГ, бренди', 'ДиваДГ, венге', 'ДиваДО, бренди', 'ДиваДО, венге', 'МоденаДО Венге', 'МоденаДО Махагон', 'РавеллаЧО Венге', 'РавеллаЧО Махагон', 'ВерсальДО Венге', 'ВерсальДО Махагон', 'ПремьерПлюс ДО Венге', 'ПремьерПлюс ЧО Венге', 'ПремьерПлюс ДО Махагон', 'ПремьерПлюс ЧО Махагон', 'ВенецияДО Венге', 'ВенецияДГ Венге', 'ВенецияДO Махагон', 'ВенецияДГ Махагон', 'Бостон,ДГ, Венге', 'Бостон,ДГ, Махагон');

$prais_new_026 = 315; //	Верона ДГ, бренди
$prais_new_027 = 315; //	ВеронаДГ, венге
$prais_new_028 = 315; //	ВеронаДГ, медовый орех
$prais_new_029 = 315; //	ВеронаДО, бренди
$prais_new_030 = 315; //	ВеронаДО, венге
$prais_new_031 = 315; //	ВеронаДО, медовый орех
$prais_new_032 = 315; //	ВиолаДГ, бренди
$prais_new_033 = 315; //	ВиолаДГ, медовый орех
$prais_new_034 = 315; //	ВиолаДО, бренди
$prais_new_035 = 315; //	ВиолаДО, медовый орех
$prais_new_036 = 315; //	ДиваДГ, бренди
$prais_new_037 = 315; //	ДиваДГ, венге
$prais_new_038 = 315; //	ДиваДО, бренди
$prais_new_039 = 315; //	ДиваДО, венге
$prais_new_040 = 302; //	МоденаДО Венге
$prais_new_041 = 302; //	МоденаДО Махагон
$prais_new_042 = 337; //	РавеллаЧО Венге
$prais_new_043 = 337; //	РавеллаЧО Махагон
$prais_new_044 = 321; //	ВерсальДО Венге
$prais_new_045 = 321; //	ВерсальДО Махагон
$prais_new_046 = 269; //	ПремьерПлюс ДО Венге
$prais_new_047 = 269; //	ПремьерПлюс ЧО Венге
$prais_new_048 = 269; //	ПремьерПлюс ДО Махагон
$prais_new_049 = 269; //	ПремьерПлюс ЧО Махагон
$prais_new_050 = 259; //	ВенецияДО Венге
$prais_new_051 = 259; //	ВенецияДГ Венге
$prais_new_052 = 259; //	ВенецияДO Махагон
$prais_new_053 = 259; //	ВенецияДГ Махагон
$prais_new_054 = 299; //	Бостон,ДГ, Венге
$prais_new_055 = 299; //	Бостон,ДГ, Махагон


$name_026 = $arr[0]; $prais_old_026 = round(($prais_new_026/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[0], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_026 = $words[1].' '.$words[2];

$name_027 = $arr[1]; $prais_old_027 = round(($prais_new_027/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[1], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_027 = $words[1].' '.$words[2];

$name_028 = $arr[2]; $prais_old_028 = round(($prais_new_028/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[2], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_028 = $words[1].' '.$words[2];

$name_029 = $arr[3]; $prais_old_029 = round(($prais_new_029/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[3], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_029 = $words[1].' '.$words[2];

$name_030 = $arr[4]; $prais_old_030 = round(($prais_new_030/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[4], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_030 = $words[1].' '.$words[2];

$name_031 = $arr[5]; $prais_old_031 = round(($prais_new_031/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[5], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_031 = $words[1].' '.$words[2];

$name_032 = $arr[6]; $prais_old_032 = round(($prais_new_032/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[6], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_032 = $words[1].' '.$words[2];

$name_033 = $arr[7]; $prais_old_033 = round(($prais_new_033/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[7], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_033 = $words[1].' '.$words[2];

$name_034 = $arr[8]; $prais_old_034 = round(($prais_new_034/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[8], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_034 = $words[1].' '.$words[2];

$name_035 = $arr[9]; $prais_old_035 = round(($prais_new_035/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[9], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_035 = $words[1].' '.$words[2];

$name_036 = $arr[10]; $prais_old_036 = round(($prais_new_036/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[10], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_036 = $words[1].' '.$words[2];

$name_037 = $arr[11]; $prais_old_037 = round(($prais_new_037/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[11], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_037 = $words[1].' '.$words[2];

$name_038 = $arr[12]; $prais_old_038 = round(($prais_new_038/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[12], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_038 = $words[1].' '.$words[2];

$name_039 = $arr[13]; $prais_old_039 = round(($prais_new_039/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[13], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_039 = $words[1].' '.$words[2];

$name_040 = $arr[14]; $prais_old_040 = round(($prais_new_040/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[14], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_040 = $words[1].' '.$words[2];

$name_041 = $arr[15]; $prais_old_041 = round(($prais_new_041/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[15], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_041 = $words[1].' '.$words[2];

$name_042 = $arr[16]; $prais_old_042 = round(($prais_new_042/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[16], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_042 = $words[1].' '.$words[2];

$name_043 = $arr[17]; $prais_old_043 = round(($prais_new_043/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[17], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_043 = $words[1].' '.$words[2];

$name_044 = $arr[18]; $prais_old_044 = round(($prais_new_044/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[18], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_044 = $words[1].' '.$words[2];

$name_045 = $arr[19]; $prais_old_045 = round(($prais_new_045/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[19], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_045 = $words[1].' '.$words[2];

$name_046 = $arr[20]; $prais_old_046 = round(($prais_new_046/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[20], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_046 = $words[1].' '.$words[2];

$name_047 = $arr[21]; $prais_old_047 = round(($prais_new_047/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[21], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_047 = $words[1].' '.$words[2];

$name_048 = $arr[22]; $prais_old_048 = round(($prais_new_048/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[22], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_048 = $words[1].' '.$words[2];

$name_049 = $arr[23]; $prais_old_049 = round(($prais_new_049/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[23], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_049 = $words[1].' '.$words[2];

$name_050 = $arr[24]; $prais_old_050 = round(($prais_new_050/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[24], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_050 = $words[1].' '.$words[2];

$name_051 = $arr[25]; $prais_old_051 = round(($prais_new_051/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[25], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_051 = $words[1].' '.$words[2];

$name_052 = $arr[26]; $prais_old_052 = round(($prais_new_052/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[26], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_052 = $words[1].' '.$words[2];

$name_053 = $arr[27]; $prais_old_053 = round(($prais_new_053/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[27], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_053 = $words[1].' '.$words[2];

$name_054 = $arr[28]; $prais_old_054 = round(($prais_new_054/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[28], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_054 = $words[1].' '.$words[2];

$name_055 = $arr[29]; $prais_old_055 = round(($prais_new_055/0.37),0);
$words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $arr[29], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
$color_054 = $words[1].' '.$words[2];
?>