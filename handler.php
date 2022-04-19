<?php

require_once 'PHPExcel.php';
$nameOfFile=$_POST['filename'];
$forload=$nameOfFile.'.'.'xlsx';
$excel=PHPExcel_IOFactory::load("$forload");
$firstsymb='A';
$allsubj=[];
$second=chr(ord($firstsymb)+1);//Хорошая конструкция
for ($i=0;$i<7;$i++){
    $cellid=1;
    $value=1;
    $val=1;
    
    $subj=[];
    while($val!=''){
        $value=$excel->getActiveSheet()->getCell($firstsymb.$cellid);
        $val=$value->getValue();
        $subj[]=$val;
        $cellid++;
    }
    $allsubj[]=$subj;
    $firstsymb=chr(ord($firstsymb)+1);
}
$days=['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'];
foreach ($allsubj as $key=>$value){
    echo "<div style='border: 10px; width=20px;height=30px'>";
    foreach($value as $supervalue){
        if (in_array($supervalue,$days)){
            echo "<p style='color:red'>$supervalue</p>";
        }else{
            echo "<div style='border: solid;width=20px;height=30px'> $supervalue </div>";
        }
        
    }
    echo "</div>";
}
?>