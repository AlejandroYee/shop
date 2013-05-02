<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $lang['demo_done_title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $ec_charset; ?>" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
</head>

<body style="background:#DDEEF2">
<?php include ROOT_PATH . 'demo/templates/header.php';?>

<div style="margin:10px;padding:20px;border: 1px solid #BBDDE5; background: #F4FAFB; ">

  <p style="font-size: 14px; text-align: center"><?php printf($lang['done'], VERSION);?></p>
  <div align="center">
  <ul style="text-align:left; width: 260px">
    <li><a href="../"><?php echo $lang['go_to_view_my_ecshop'];?></a></li>
    <li><a href="../admin"><?php echo $lang['go_to_view_control_panel'];?></a></li>
  </ul>
  </div>

</div>

<?php include ROOT_PATH . 'demo/templates/copyright.php';?>
<!-- legouday.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F8bfd02af36bed59ed7a384ff7fc237f3' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
