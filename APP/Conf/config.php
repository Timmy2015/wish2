<?php

return array(
    'APP_GROUP_LIST' => 'Index,Admin',
    'DEFAULT_GROUP' => 'Index',
    //默认0是应用分组的形式；1是独立分组的形式
    'APP_GROUP_MODE' => 1,
    //设置独立分组文件夹的名字，可修改
    'APP_GROUP_PATH' => 'MODULES',
    //显示调试的详细信息，挺有用的啊
    'SHOW_PAGE_TRACE' => true,
    //独立分组
    'DB_HOST' => '127.0.0.1',
    'DB_USER' => 'root',
    'DB_PWD' => 'root',
    'DB_NAME' => 'think',
    'DB_PREFIX' => 'hd_',
    'TMPL_VAR_IDENTIFY' => 'array',
    //模版路径
    'TMPL_FILE_DEPR' => '_',
    //模版过虑函数
    'DEFAULT_FILTER' => 'htmlspecialchars',
//    'SESSION_TYPE' => 'Db', 
    
    
//    'SESSION_EXPIRE' => 60,
        //'SESSION_TYPE'=>'Db',
        //'SESSION_TYPE' => 'Redis',
        //艹！！！太粗心了！！set $key{(;)可有可无｜get $key(禁止(;)结尾}
        //太粗心是干不了这个编程的，同时还得要脑，体力活太累了
        /* 'SESSION_TYPE' => 'Redis',
          'SESSION_PREFIX'=>'sess_',
          'REDIS_HOST' => '127.0.0.1',
          'REDIS_PORT' =>6379, */

        //'SESSION_TYPE' => 'Redis',*/
        //session保存类型
        /* 'SESSION_TYPE' => 'Redis',
          'SESSION_PREFIX' => 'sess_', //session前缀
          'REDIS_HOST' => '127.0.0.1' ,//REDIS服务器地址
          'REDIS_PORT' => 6379, //REDIS连接端口号
          'SESSION_EXPIRE' => 3600, //SESSION过期时间 */
);
?>

