<?php

/***  Legouday Shop 商品页
 * ============================================================================
 * 版权所有 2011-2013乐购网有限公司，并保留所有权利。
 * 网站地址: http://www.legouday.com；
 * Design by Levinchiu  @@   http://www.levinchiu.com
 * ============================================================================
 * $Author: liuhui $
 * $Id: buy.php 17063 2010-03-25 06:35:46Z liuhui $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
$smarty->assign('footer', get_footer());
$smarty->display('buy.wml');

?>