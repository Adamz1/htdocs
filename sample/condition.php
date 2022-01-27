<?php
$ouyang = 'hezhuo ';
$teresa = "teresa";
$adam = "adam";
$str  = "ouyang";
switch ($ouyang) {
    case '欧阳': {
            echo '匹配成功';
            break;
        }
    default: {
            echo '找不到对应的人';
        }
}

echo match($str){
    'ouyang' => '欧阳靖',
    "ximen" =>  '须门官人'
}; 
