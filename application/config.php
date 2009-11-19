<?php defined('MYQEEPATH') or die('No direct script access.');

$config['sitename'] = '麦琪网';
$config['mysite_domain'] = 'localhost';		//网站默认域名
$config['mysite_url'] = '/';				//网站默认地址
$config['mysite_path'] = NULL;				//网站路径地址
$config['myqee_page'] = '';				//动态页面索引页，若启用rewrite本项可设空，默认myqee.php


$config['extension_prefix'] = 'MY_';

$config['language'] = array('zh_CN', 'ShangHai');		//系统语言

/**
 * Locale timezone. Defaults to use the server timezone.
 * @see http://php.net/timezones
 */
$config['timezone'] = 'PRC';


$config['internal_cache'] = '0';				//配置、语言包、文件列表缓存，0=禁用，1=手动，大于1为定时更新，并且这个值是有效时间

$config['charset'] = 'utf-8';

$config['display_errors'] = true;


$config['admin_welcome'] = '';				//后台管理欢迎语

$config['index_template'] = '2';				//首页模板ID
$config['index_filename'] = 'index.html';		//首页文件

$config['defaultpage'] = 'index';

$config['url_suffix'] = '.html';

$config['default_viewgroup'] = 'default';

$config['tohtml_limit'] = '100';				//批量生成静态页面每次生成页面数量


$config['aptitudethumb'] = 1;				//智能缩略图生成功能


$config['image'] = array('driver'=>'GD');					//图像生成采用GD/IMAGEMAGICK

$config['allow_task'] = '1';					//启动任务功能


$config['home_url'] = '';					//用户home space URL


$config['use_ucenter'] = '1';					//否是启用UCENTER

$config['use_uchome'] = '1';					//否是启用UCHOME

$config['bbs_url'] = '';					//用户bbs space URL


/**
 * Log thresholds:
 *  0 - Disable logging
 *  1 - Errors and exceptions
 *  2 - Warnings
 *  3 - Notices
 *  4 - Debugging
 */
$config['log_threshold'] = NULL;


$config['session'] = array(
	'name' => 'SID',
	'expiration' => 0,
	'gc_probability' => 0,
);
$config['cookie'] = array(
	'domain' => '',
	'prefix' => '',
	'path' => '/',
	'expire' => 0,
	'secure' => false,
	'httponly' => false,
);


$config['upload'] = array(
	'urlpath' => '/upload/',				//附件URL前缀
	'filepath' => 'upload',					//上传路径，可以绝对路径，也可以是相对于WWWROOT路径
	'maxsize' => 999999,				//最大大小限制
	'extension' => 'jpg,jpeg,gif,bmp,png,rar,zip,txt,swf',					//默认允许的文件类型
	'selfpath' => 'Y/m/d',					//上传文件创建的目录
	'setname' => 'abc123',					//重新设置文件名，abc123=随机字符20位，md5=md5算法32位，sha1=sha1算法40位，留空表示使用原名称
	'autowatermark' => '0',						//自动添加水印
	'autothumb' => '0',						//自动缩略图
	'thumbwidth' => '120',								//默认缩略图宽度
	'thumbheight' => '90',								//默认缩略图高度
	'chmod' => '0644',									//对上传文件进行权限设置
);

$config['watermark'] = array(
	'position' => '8',						//0=随机，1=左上角,2=上中角,3=右上角.4=左中,5=中间,6=右中,7=左下,8=下中,9=右下
	'posx' => '0',							//水平偏移，0表示不偏移，负数表示左偏移，整数表示右偏移，基点坐标由type决定
	'posy' => '0',							//水平偏移，0表示不偏移，负数表示上偏移，整数表示下偏移，基点坐标由type决定
	'type' => '1',							//水印方式，0=文字，1=图片，3=随机
	'gifwatermark' => '0',							//是否GIF生成缩略图，0表示对GIF图片不生成缩略图，1=生成
	'quality' => '90',							//JPG图片保存质量
	 'font' => array(
		'text' => '麦琪CMS系统',					//文字内容
		'color' => '#ff0000',			//文字颜色
		'fonts' => 'default.ttf',					//文字路径
		'size' => '16',					//文字大小
	 ),
	 'image' => array(
		'path' => 'default.png',					//水印图片路径
		'opacity' => '100',				//透明度
	 ),
);



$config['useroutes'] = '1';					//是否启用路由
$config['saferoutes'] = '0';					//是否启用路由安全模式

//网站路由，是一个可用的正则数组，不启用则设置为null
/*
例如
array(
  'test(.*)' => 'mynewpage$1',
);
*/
$config['routes'] = array (
);

//模块设置
/*
例如
'member' => array(
	'name'=>'用户系统',
	'url' => '/member/',
	'navshow' => true,
	'isuse' => true,
),

*/
$config['modules'] = array (
  'kodoc' => 
  array (
    'name' => 'kodoc',
    'url' => 'kodoc',
    'navshow' => '0',
    'isuse' => '0',
  ),
);
