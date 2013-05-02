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


<div class="main mbt10" id="pgroup_buy_list">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  
  <div id="csb">
    
    <?php echo $this->fetch('library/cart.lbi'); ?>
    <?php echo $this->fetch('library/category_tree.lbi'); ?>
    <?php echo $this->fetch('library/goods_related.lbi'); ?>
    <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <?php echo $this->fetch('library/goods_article.lbi'); ?>
    <?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
    
    
    
    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div id="cma">
	 
   
   <div id="auc-gro-sna-list">
   <div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['gb_goods_name']; ?></h3><span></span></div>
<div class="ct"><div class="p1-0 bgw">
      <?php if ($this->_var['gb_list']): ?>
      <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
      <div class="gml">
      <a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" class="gi"/></a>
      <p class="gn"><?php echo $this->_var['lang']['gb_goods_name']; ?><a href="<?php echo $this->_var['group_buy']['url']; ?>" class="f5"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a></p>
      <p class="gd"><?php echo $this->_var['lang']['act_time']; ?>：<span class="f4"><?php echo $this->_var['group_buy']['formated_start_date']; ?> -- <?php echo $this->_var['group_buy']['formated_end_date']; ?></span></p>
      <p class="gp"><?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?><span class="f4"><?php echo $this->_var['item']['amount']; ?></span><span>以内：</span><b><?php echo $this->_var['item']['formated_price']; ?></b><span>/件</span> | <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
      </div>     
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php else: ?>
<div id="norecord"><?php echo $this->_var['lang']['group_goods_empty']; ?></div>
 <?php endif; ?>
 </div></div>
<div class="bt"><span></span></div>
</div></div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
    </div>
  
  <div class="clear"></div>
    <?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
