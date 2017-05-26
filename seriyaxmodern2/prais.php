<?php
$brend = 'ProfilDoors'; 
$material = 'экошпон, массив сосны, мдф';
$karkas = 'МДФ + Массив сосны';

$arr = array('35X Капучино Мелинга Стекло Матовое', '35X ЭшВайт Мелинга Стекло Матовое', '39X Венге Мелинга Стекло Матовое', '39X Грей Мелинга Стекло Матовое', '39X Капучино Мелинга Стекло Матовое', '39X ЭшВайт Мелинга Стекло Матовое', '36X Венге Мелинга Стекло Матовое', '36X Грей Мелинга Чёрный триплекс', '36X Капучино Мелинга Белый триплекс', '36X ЭшВайт Мелинга Стекло Матовое', '70X Венге Мелинга Стекло Матовое', '70X Грей Мелинга Стекло Матовое', '70X Малага Черри Кроскут Стекло Матовое', '70X Капучино Мелинга Стекло Матовое', '70X ЭшВайт Мелинга Стекло Матовое', '29X Венге Мелинга Стекло Матовое', '29X Грей Мелинга Стекло Матовое', '29X Капучино Мелинга Стекло Матовое', '29X ЭшВайт Мелинга Стекло Матовое', '29X Венге Мелинга Чёрный триплекс', '7X Венге Мелинга Стекло Матовое', '7X Грей Мелинга Стекло Матовое', '7X Капучино Мелинга Стекло Матовое', '7X ЭшВайт Мелинга Стекло Матовое', '7X Венге Мелинга Чёрный триплекс', '7X ЭшВайт Мелинга Чёрный триплекс', '40X Венге Мелинга Стекло Матовое', '40X Грей Мелинга Стекло Матовое', '40X Капучино Мелинга Стекло Матовое', '40X ЭшВайт Мелинга Стекло Матовое');

$prais_new_026 = 228; //35X Капучино Мелинга Стекло Матовое
$prais_new_027 = 228; //35X ЭшВайт Мелинга Стекло Матовое
$prais_new_028 = 230; //39X Венге Мелинга Стекло Матовое
$prais_new_029 = 230; //39X Грей Мелинга Стекло Матовое
$prais_new_030 = 230; //39X Капучино Мелинга Стекло Матовое
$prais_new_031 = 230; //39X ЭшВайт Мелинга Стекло Матовое
$prais_new_032 = 228; //36X Венге Мелинга Стекло Матовое
$prais_new_033 = 228; //36X Грей Мелинга Чёрный триплекс
$prais_new_034 = 228; //36X Капучино Мелинга Белый триплекс
$prais_new_035 = 228; //36X ЭшВайт Мелинга Стекло Матовое
$prais_new_036 = 217; //70X Венге Мелинга Стекло Матовое
$prais_new_037 = 217; //70X Грей Мелинга Стекло Матовое
$prais_new_038 = 217; //70X Малага Черри Кроскут Стекло Матовое
$prais_new_039 = 217; //70X Капучино Мелинга Стекло Матовое
$prais_new_040 = 217; //70X ЭшВайт Мелинга Стекло Матовое
$prais_new_041 = 285; //29X Венге Мелинга Стекло Матовое
$prais_new_042 = 285; //29X Грей Мелинга Стекло Матовое
$prais_new_043 = 285; //29X Капучино Мелинга Стекло Матовое
$prais_new_044 = 285; //29X ЭшВайт Мелинга Стекло Матовое
$prais_new_045 = 285; //29X Венге Мелинга Чёрный триплекс
$prais_new_046 = 217; //7X Венге Мелинга Стекло Матовое
$prais_new_047 = 217; //7X Грей Мелинга Стекло Матовое
$prais_new_048 = 217; //7X Капучино Мелинга Стекло Матовое
$prais_new_049 = 217; //7X ЭшВайт Мелинга Стекло Матовое
$prais_new_050 = 280; //7X Венге Мелинга Чёрный триплекс
$prais_new_051 = 280; //7X ЭшВайт Мелинга Чёрный триплекс
$prais_new_052 = 230; //40X Венге Мелинга Стекло Матовое
$prais_new_053 = 230; //40X Грей Мелинга Стекло Матовое
$prais_new_054 = 230; //40X Капучино Мелинга Стекло Матовое
$prais_new_055 = 230; //40X ЭшВайт Мелинга Стекло Матовое


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