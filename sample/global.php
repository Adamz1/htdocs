<?php
$foo = "this is foo";
function bar()
{       
    global $foo; // 在局部中 使用全局作用于
    echo $foo;    

}
bar();
