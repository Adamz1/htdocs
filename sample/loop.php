<?php
// 一维数组
// $arr = array(
//     "index1" => "hello",
//     "index2" => "world"
// );
// foreach ($arr as $key => $value) {
//     echo "key是" . $key . "value是" . $value;
//     echo "<hr/>";
// }

// 二维数组 
$arr = array(
    array(
        "richard", "teresa"
    ),
    array(
        "hello", "world"
    ),
);

foreach ($arr as $item) {
    foreach ($item as $innerItem) {
        echo $innerItem;
        echo ("<br/>");
    }
};

// 三维数组 
$fourArr = array(
    array(
        array(
            "key1" => "hello", "key2" => "world"
        ),
        array(
            "this", "good"
        )
    ),
    array(
        array(
            "hello", "world"
        ),
        array(
            "this", "good"
        )
    ),
);

echo $fourArr[0][0]["key2"];
