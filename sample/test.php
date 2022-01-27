<?php
$arr = array(
    [
        "name" => "adam",
        "school" => "centennial"
    ],
    [
        "name" => "teresa",
        "school" => "seneca"
    ],
    [
        "name" => "richard",
        "school" => "u of t"
    ]
);

$arr1 = array(  
    

);
foreach($arr1 as $name){
    echo($name);
    echo('<hr/>');
}


foreach ($arr as $key) {          
    foreach($key as $v){
        echo $v;    
        echo("<hr/>");
    }

};

$name = "adasm";
print_r($name);
echo ("<br/>"
);
