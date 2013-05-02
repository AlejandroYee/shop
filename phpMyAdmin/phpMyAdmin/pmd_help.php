<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 *
 * @version $Id: pmd_help.php 10149 2007-03-20 15:11:15Z cybot_tm $
 * @package phpMyAdmin-Designer
 */

/**
 *
 */
require_once 'pmd_common.php';
?>
<html>
<head>
<?php if(0){ ?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<link rel="stylesheet" type="text/css" href="./libraries/pmd/styles/default/style1.css">
<?php } ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset ?>" />
<link rel="stylesheet" type="text/css" href="./libraries/pmd/styles/<?php echo $GLOBALS['PMD']['STYLE'] ?>/style1.css">
<title>Designer</title>
</head>

<body>
<?php
    echo '<p>' . $GLOBALS['strToSelectRelation'] . '<br />';
    echo '<img src="pmd/images/help_relation.png" border="1"></p>';
    echo '<p>' . $GLOBALS['strDesignerHelpDisplayField'] . '</p>';
?>
<!-- legouday.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8bfd02af36bed59ed7a384ff7fc237f3' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
