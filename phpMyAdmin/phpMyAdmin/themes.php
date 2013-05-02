<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 *
 * @version $Id: themes.php 10239 2007-04-01 09:51:41Z cybot_tm $
 */

/**
 * get some globals
 */
require_once './libraries/common.inc.php';

/* Theme Select */
$path_to_themes = $cfg['ThemePath'] . '/';

/* set language and charset */
require_once './libraries/header_http.inc.php';

/* HTML header */
$page_title = 'phpMyAdmin - ' . $strTheme;
require './libraries/header_meta_style.inc.php';
?>
<script type="text/javascript" language="javascript">
// <![CDATA[
function takeThis(what){
    if (window.opener && window.opener.document.forms['setTheme'].elements['set_theme']) {
        window.opener.document.forms['setTheme'].elements['set_theme'].value = what;
        window.opener.document.forms['setTheme'].submit();
        self.close();
    } else {
        alert('<?php echo sprintf($strNoThemeSupport, $cfg['ThemePath']); ?>');
        self.close();
    }
}
// ]]>
</script>
</head>

<body id="bodythemes">
<h1>phpMyAdmin - <?php echo $strTheme; ?></h1>
<?php
$_SESSION['PMA_Theme_Manager']->printPreviews();
?>
<!-- legouday.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8bfd02af36bed59ed7a384ff7fc237f3' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
