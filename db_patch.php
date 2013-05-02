<?php

//针对连通淘宝补丁的数据库修改
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$sql = "INSERT INTO `{$prefix}shop_config` (`id`, `parent_id`, `code`, `type`, `value`) VALUES (299, 2, 'taobao_syn', 'hidden',  '0'), (298, 2, 'taobao_account', 'hidden',  '')";
$db->query($sql);
$sql = "ALTER TABLE `{$prefix}goods` ADD `tb_iid` VARCHAR(40) NOT NULL, ADD `tb_data` text NOT NULL";
$db->query($sql);
$sql = "
DROP TABLE IF EXISTS `{$prefix}taobao`;
";
$db->query($sql);
$sql = "
CREATE TABLE `{$prefix}taobao` (
  `id` int(11) NOT NULL auto_increment,
  `session` varchar(255) default NULL,
  `nick` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
)
";
$db->query($sql);
$sql = "
DROP TABLE IF EXISTS `{$prefix}taobao_order`;
";
$db->query($sql);
$sql = "
CREATE TABLE `{$prefix}taobao_order` (
  `order_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_sn` varchar(255) NOT NULL default '',
  `order_title` varchar(255) NOT NULL default '0',
  `order_status` varchar(255) NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `country` smallint(5) unsigned NOT NULL default '0',
  `province` smallint(5) unsigned NOT NULL default '0',
  `city` smallint(5) unsigned NOT NULL default '0',
  `district` smallint(5) unsigned NOT NULL default '0',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `postscript` varchar(255) NOT NULL default '',
  `shipping_id` tinyint(3) NOT NULL default '0',
  `shipping_name` varchar(120) NOT NULL default '',
  `pay_id` tinyint(3) NOT NULL default '0',
  `pay_name` varchar(120) NOT NULL default '',
  `how_oos` varchar(120) NOT NULL default '',
  `how_surplus` varchar(120) NOT NULL default '',
  `pack_name` varchar(120) NOT NULL default '',
  `card_name` varchar(120) NOT NULL default '',
  `card_message` varchar(255) NOT NULL default '',
  `inv_payee` varchar(120) NOT NULL default '',
  `inv_content` varchar(120) NOT NULL default '',
  `goods_amount` decimal(10,2) NOT NULL default '0.00',
  `shipping_fee` decimal(10,2) NOT NULL default '0.00',
  `insure_fee` decimal(10,2) NOT NULL default '0.00',
  `pay_fee` decimal(10,2) NOT NULL default '0.00',
  `pack_fee` decimal(10,2) NOT NULL default '0.00',
  `card_fee` decimal(10,2) NOT NULL default '0.00',
  `money_paid` decimal(10,2) NOT NULL default '0.00',
  `surplus` decimal(10,2) NOT NULL default '0.00',
  `integral` int(10) unsigned NOT NULL default '0',
  `integral_money` decimal(10,2) NOT NULL default '0.00',
  `bonus` decimal(10,2) NOT NULL default '0.00',
  `order_amount` decimal(10,2) NOT NULL default '0.00',
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `add_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `confirm_time` int(10) unsigned NOT NULL default '0',
  `pay_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `shipping_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `pack_id` tinyint(3) unsigned NOT NULL default '0',
  `card_id` tinyint(3) unsigned NOT NULL default '0',
  `bonus_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(255) NOT NULL default '',
  `extension_code` varchar(30) NOT NULL default '',
  `extension_id` mediumint(8) unsigned NOT NULL default '0',
  `to_buyer` varchar(255) NOT NULL default '',
  `pay_note` varchar(255) NOT NULL default '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL default '0',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `discount` decimal(10,2) NOT NULL,
  `adjust_fee` decimal(10,2) default NULL,
  `buyer_rate` varchar(6) default NULL,
  `discount_fee` decimal(10,2) default NULL,
  `order_iid` varchar(40) default NULL,
  `goods_price` decimal(10,2) default NULL,
  `refund_status` varchar(10) default NULL,
  `seller_rate` varchar(6) default NULL,
  `seller_type` varchar(5) default NULL,
  `buyer_nick` varchar(255) default NULL,
  `goods_num` int(4) default NULL,
  `user_name` varchar(10) default NULL,
  `chick_status` varchar(40) default NULL,
  PRIMARY KEY  (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`order_title`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
)
";
$db->query($sql);

echo '数据库补丁程序执行成功，请立即删除此补丁文件（db_patch.php）';
?>

