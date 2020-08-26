
<?php
return array(
    "database" => array(
        "host" => "localhost",
        "username" => "root",
        "password" => "",
        "dbname" => "exp",
        "port" => "3308"
    ),
    "smarty" => array(
        "templateDir" => TPL_PATH,
        "compileDir" => COMPILE_PATH,
        "cacheDir" => CACHE_PATH
    ),
    "code" => array(
        "type" => "png",
        "width" => 150,
        "height" => 50,
        "codeLen" => 4,
        "seed" => "abcdefhjkmnprstuvwxyzABCDEFGHJKLMNOPQRSTVWUXYZ2345678", //验证码种子
        "fontSize" => array("min" => 20, "max" => 35),
        "fontAngle" => array("min" => -15, "max" => 15),
        "lineNum" => array("min" => 6, "max" => 10),
        "lineWith" => array("min" => 1, "max" => 3),
        "DotNum" => array("min" => 300, "max" => 500),
        "ischeck" => false,
    )
);
