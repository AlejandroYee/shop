<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="main mbt10" id="pactivity">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['activity_list']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
  <table width="100%" border="0" cellpadding="5" cellspacing="1">
    <tr>
      <th><?php echo $this->_var['lang']['label_act_name']; ?></th>
      <td colspan="3"><?php echo $this->_var['val']['act_name']; ?></td>
    </tr>
    <tr>
      <th><?php echo $this->_var['lang']['label_start_time']; ?></th>
      <td width="200"><?php echo $this->_var['val']['start_time']; ?></td>
      <th><?php echo $this->_var['lang']['label_max_amount']; ?></th>
      <td>
        <?php if ($this->_var['val']['max_amount'] > 0): ?>
        <?php echo $this->_var['val']['max_amount']; ?>
        <?php else: ?>
        <?php echo $this->_var['lang']['nolimit']; ?>
        <?php endif; ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $this->_var['lang']['label_end_time']; ?></th>
      <td><?php echo $this->_var['val']['end_time']; ?></td>
      <th><?php echo $this->_var['lang']['label_min_amount']; ?></th>
      <td width="200"><?php echo $this->_var['val']['min_amount']; ?></td>
    </tr>
    <tr>
      <th><?php echo $this->_var['lang']['label_act_range']; ?></th>
      <td>
        <?php echo $this->_var['val']['act_range']; ?>
        <?php if ($this->_var['val']['act_range'] != $this->_var['lang']['far_all']): ?>
        :
        <?php $_from = $this->_var['val']['act_range_ext']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ext');if (count($_from)):
    foreach ($_from AS $this->_var['ext']):
?>
        <a href="<?php echo $this->_var['val']['program']; ?><?php echo $this->_var['ext']['id']; ?>" taget="_blank" class="f6"><span class="f_user_info"><u><?php echo $this->_var['ext']['name']; ?></u></span></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
      </td>
      <th><?php echo $this->_var['lang']['label_user_rank']; ?></th>
      <td>
        <?php $_from = $this->_var['val']['user_rank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
        <?php echo $this->_var['user']; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $this->_var['lang']['label_act_type']; ?></th>
      <td colspan="3">
        <?php echo $this->_var['val']['act_type']; ?><?php if ($this->_var['val']['act_type'] != $this->_var['lang']['fat_goods']): ?><?php echo $this->_var['val']['act_type_ext']; ?><?php endif; ?>
      </td>
    </tr>
    <?php if ($this->_var['val']['gift']): ?>
    <tr>
      <td colspan="4">
      <?php $_from = $this->_var['val']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <table border="0" style="float:left;">
        <tr>
          <td align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['id']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></a></td>
        </tr>
        <tr>
          <td align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['id']; ?>" class="f6"><?php echo $this->_var['goods']['name']; ?></a></td>
        </tr>
        <tr>
          <td align="center">
            <?php if ($this->_var['goods']['price'] > 0): ?>
            <?php echo $this->_var['goods']['price']; ?><?php echo $this->_var['lang']['unit_yuan']; ?>
            <?php else: ?>
            <?php echo $this->_var['lang']['for_free']; ?>
            <?php endif; ?>
          </td>
        </tr>
      </table>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </td>
    </tr>
    <?php endif; ?>
  </table>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<script type="text/javascript" src="themes/LevinJiu/js/table.js"></script>
</div></div>
<div class="bt"><span></span></div>
</div>
    <?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
