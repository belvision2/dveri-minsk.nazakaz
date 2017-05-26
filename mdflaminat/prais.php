<?php
$brend = 'Юркас'; 
$material = 'МДФ Ламинированный';
$karkas = 'МДФ, вставки древесины';

$arr = array('Verda-ПО-C2-Витраж Миланский орех', 'Verda-ПО-C2-Витраж Итальянский орех', 'Verda-ПО-C6-Витраж Миланский орех', 'Verda-ПО-C6-Витраж Итальянский орех', 'Verda-ПО-C19-Витраж Миланский орех', 'Verda-ПО-C19-Витраж Итальянский орех', 'Verda-ПО-C7-Витраж Миланский орех', 'Verda-ПО-C7-Витраж Итальянский орех', 'Verda-ПО-C12 Миланский орех', 'Verda-ПГ-C12 Миланский орех', 'Verda-ПО-C12 Итальянский орех', 'Verda-ПГ-C12 Итальянский орех', 'Verda-ПО-C12 Беленый дуб', 'Verda-ПГ-C12 Беленый дуб', 'Verda-ПО-C12 Венге', 'Verda-ПО-C12 Груша', 'Verda-ПГ-C12 Венге', 'Verda-ПГ-C12 Груша', 'Verda-ПО-C14 Венге', 'Verda-ПГ-C14 Груша', 'Verda-ПО-C14 Груша', 'Verda-ПО-C14 Беленый дуб', 'Verda-ПО-C14 Миланский орех', 'Verda-ПО-C14 Итальянский орех', 'Verda-ПО-C8 Венге', 'Verda-ПО-C8 Беленый дуб', 'Verda-ПО-C8 Миланский орех', 'Verda-ПО-C2 Груша', 'Verda-ПО-C2 Фьюзинг Груша', 'Verda-ПО-C8 Груша');

$prais_new_026 = 128; //	Verda-ПО-C2-Витраж Миланский орех
$prais_new_027 = 128; //	Verda-ПО-C2-Витраж Итальянский орех
$prais_new_028 = 109; //	Verda-ПО-C6-Витраж Миланский орех
$prais_new_029 = 109; //	Verda-ПО-C6-Витраж Итальянский орех
$prais_new_030 = 113; //	Verda-ПО-C19-Витраж Миланский орех
$prais_new_031 = 113; //	Verda-ПО-C19-Витраж Итальянский орех
$prais_new_032 = 129; //	Verda-ПО-C7-Витраж Миланский орех
$prais_new_033 = 129; //	Verda-ПО-C7-Витраж Итальянский орех
$prais_new_034 = 103; //	Verda-ПО-C12 Миланский орех
$prais_new_035 = 91; //	Verda-ПГ-C12 Миланский орех
$prais_new_036 = 103; //	Verda-ПО-C12 Итальянский орех
$prais_new_037 = 91; //	Verda-ПГ-C12 Итальянский орех
$prais_new_038 = 117; //	Verda-ПО-C12 Беленый дуб
$prais_new_039 = 98; //	Verda-ПГ-C12 Беленый дуб
$prais_new_040 = 117; //	Verda-ПО-C12 Венге
$prais_new_041 = 117; //	Verda-ПО-C12 Груша
$prais_new_042 = 98; //	Verda-ПГ-C12 Венге
$prais_new_043 = 98; //	Verda-ПГ-C12 Груша
$prais_new_044 = 98; //	Verda-ПО-C14 Венге
$prais_new_045 = 98; //	Verda-ПГ-C14 Груша
$prais_new_046 = 98; //	Verda-ПО-C14 Груша
$prais_new_047 = 117; //	Verda-ПО-C14 Беленый дуб
$prais_new_048 = 103; //	Verda-ПО-C14 Миланский орех
$prais_new_049 = 103; //	Verda-ПО-C14 Итальянский орех
$prais_new_050 = 135; //	Verda-ПО-C8 Венге
$prais_new_051 = 135; //	Verda-ПО-C8 Беленый дуб
$prais_new_052 = 121; //	Verda-ПО-C8 Миланский орех
$prais_new_053 = 108; //	Verda-ПО-C2 Груша
$prais_new_054 = 108; //	Verda-ПО-C2 Фьюзинг Груша
$prais_new_055 = 108; //	Verda-ПО-C8 Груша



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
$color_055 = $words[1].' '.$words[2];
?>