<?php
return array(
	//'配置项'=>'配置值'
    //中英文切换语言包配置项
    'LANG_SWITCH_ON'     =>     true,    //开启语言包功能
    'LANG_AUTO_DETECT'     =>     true, // 自动侦测语言
    'DEFAULT_LANG'         =>     'zh-cn', // 默认语言
    'LANG_LIST'            =>    'zh-cn,en-us', //必须写可允许的语言列表
    'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
    //开启路由
    'URL_ROUTER_ON'   => true,
   'URL_PATHINFO_DEPR'=>'-',// 更改PATHINFO参数分隔符
    //伪静态，设置后缀伪tpl
    'URL_HTML_SUFFIX'=>'tpl',
 
);