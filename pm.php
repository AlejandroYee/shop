<?php

/***  Legouday Shop 短消息文件
 * ============================================================================
 * 版权所有 2011-2013乐购网有限公司，并保留所有权利。
 * 网站地址: http://www.legouday.com；
 * Design by Levinchiu  @@   http://www.levinchiu.com
 * ============================================================================
 * $Author: liuhui $
 * $Id: pm.php 17063 2010-03-25 06:35:46Z liuhui $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if (empty($_SESSION['user_id']))
{
    ecs_header('Location:./');
}

uc_call("uc_pm_location", array($_SESSION['user_id']));
//$ucnewpm = uc_pm_checknew($_SESSION['user_id']);
//setcookie('checkpm', '');

?>