<?php

require_once 'PHPExcel.php';
$nameOfFile=$_POST['filename'];
$forload=$nameOfFile.'.'.'xlsx';
$excel=PHPExcel_IOFactory::load("$forload");
$firstsymb='A';
$second=chr(ord($firstsymb)+1);//Хорошая конструкция
for ($i=0;$i<7;$i++){
    $cellid=1;
    $value=1;
    while($value!=''){
        $value=$excel->getActiveSheet()->getCell($firstsymb.$cellid);
        echo $firstsymb.' - '.$cellid.'</br>';
        echo $value.'</br>';
        $cellid++;
    }
    $firstsymb=chr(ord($firstsymb)+1);
}
?>