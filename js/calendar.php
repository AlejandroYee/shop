<?php

/***  Legouday Shop 调用日历 JS * ============================================================================
 * 版权所有 2011-2013乐购网有限公司，并保留所有权利。
 * 网站地址: http://www.legouday.com；
 * Design by Levinchiu  @@   http://www.levinchiu.com
 * ============================================================================
 * $Author: liuhui $
 * $Id: calendar.php 17063 2010-03-25 06:35:46Z liuhui $
*/

$lang = (!empty($_GET['lang'])) ? trim($_GET['lang']) : 'zh_cn';

if (!file_exists('../languages/' . $lang . '/calendar.php') || strrchr($lang,'.'))
{
    $lang = 'zh_cn';
}

require(dirname(dirname(__FILE__)) . '/data/config.php');
header('Content-type: application/x-javascript; charset=' . EC_CHARSET);

include_once('../languages/' . $lang . '/calendar.php');

foreach ($_LANG['calendar_lang'] AS $cal_key => $cal_data)
{
    echo 'var ' . $cal_key . " = \"" . $cal_data . "\";\r\n";
}

include_once('./calendar/calendar.js');

?>