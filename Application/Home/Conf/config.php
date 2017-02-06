<?php
//应用配置文件也就是调用所有模块之前都会首先加载的公共配置文件
return array(
    // 配置参数不区分大小写（因为无论大小写定义都会转换成小写）
	//'配置项'=>'配置值'      PHP数组
    'DB_TYPE' => 'mysql',
    'DB_HOST'=>'localhost',//202.196.96.79
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PORT'=>3306,
    'DB_NAME'=>'servermonitor',
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX'=>'server_',
);

/*
 * 在ThinkPHP中，一般来说应用的配置文件是自动加载的，加载的顺序是：
 * 惯例配置->应用配置->模式配置->调试配置->状态配置->模块配置->扩展配置->动态配置
 *
 */