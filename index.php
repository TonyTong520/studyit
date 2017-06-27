<?php

    //如果没有域名后面没有输入文件路径,设置文件默认路径
    $PATH = "/dashboard/index";
    $directory = "dashboard";
    $fileName = "index";

    //如果域名后面有输入文件路径,提取后面的路径
    if(array_key_exists("PATH_INFO",$_SERVER)){
        $PATH = $_SERVER["PATH_INFO"];
    }
    
    //从数组中截取路径字符串,结果为键值对数组
    $pathArr = explode("/",subStr($PATH,1));

    //判断如果后面路径名数量
    if(count($pathArr) == 2){
        $directory = $pathArr[0];
        $fileName = $pathArr[1];
    }else if(count($pathArr) == 1){
        $directory = $pathArr[0];

    }

    $filePath = "/views/".$directory."/".$fileName.".html";

    include $filePath;

?>