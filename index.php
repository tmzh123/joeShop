<?php

define('APP_DEBUG', true); //开发模式

define('DS',DIRECTORY_SEPARATOR);     // 定义目录分隔符

define('PUBLIC_ADMIN_PATH',DS.'Public'.DS.'Admin'.DS); //定义后台资源文件目录
define('PUBLIC_COMMON_PATH',DS.'Public'.DS.'Common'.DS); //定义公共资源文件目录


function show_bug($data){
    echo '<pre style=\'color:red; position: absolute; top: 175px; left: 220px;\'>';
    var_dump($data);
    echo '</pre>';
}

require '../ThinkPHP/ThinkPHP.php';