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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div class="mbt10 main" id="pcategory">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  
  <div id="csb">
    
<?php echo $this->fetch('library/cart.lbi'); ?><?php echo $this->fetch('library/history.lbi'); ?><?php echo $this->fetch('library/category_tree.lbi'); ?>



    
  </div>
  
  
  <div id="cma">
	 
     <div id="filter">
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
      <div class="nmb">
      <div class="tt"><h3><?php echo $this->_var['lang']['goods_filter']; ?></h3><span></span></div>
      <div class="ct">
      <div class="p1-0 bgw" id="filterbox">
      <?php if ($this->_var['brands']['1']): ?>
      <div id="filter_brand">
      <div id="name"><span><?php echo $this->_var['lang']['brand']; ?>：</span></div>
      <div id="det">
				<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
					<span><?php echo $this->_var['brand']['brand_name']; ?></span>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      <div class="clear"></div>
      </div>
			<?php endif; ?>
			<?php if ($this->_var['price_grade']['1']): ?>
      <div id="filter_price">
      <div id="name"><span><?php echo $this->_var['lang']['price']; ?>：</span></div>
      <div id="det">
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<span><?php echo $this->_var['grade']['price_range']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      <div class="clear"></div>
      </div>
			<?php endif; ?>
			<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_23437300_1367414342');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_23437300_1367414342']):
?>
      <div id="filter_others">
      <div id="name"><span><?php echo htmlspecialchars($this->_var['filter_attr_0_23437300_1367414342']['filter_attr_name']); ?> :</span></div>
      <div id="det">
			<?php $_from = $this->_var['filter_attr_0_23437300_1367414342']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<span><?php echo $this->_var['attr']['attr_value']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      <div class="clear"></div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      </div>
      <div class="bt"><span></span></div>
      </div>
	  <?php endif; ?>
      </div>
	 
   
<?php echo $this->fetch('library/goods_list.lbi'); ?><?php echo $this->fetch('library/pages.lbi'); ?>



  </div>  
  
<div class="clear"></div>

    <?php echo $this->fetch('library/help.lbi'); ?>

</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
</body>
</html>
