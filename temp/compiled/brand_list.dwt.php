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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div class="main mbt10" id="pbrand_list">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  
  <div id="csb">
   
<?php echo $this->fetch('library/cart.lbi'); ?>
<?php echo $this->fetch('library/category_tree.lbi'); ?>
 <?php echo $this->fetch('library/filter_attr.lbi'); ?>
 <?php echo $this->fetch('library/price_grade.lbi'); ?>



    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div id="cma">
     
     
     <div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['all_brand']; ?></h3><span></span></div>
<div class="ct">
<div class="p1-0 bgw">
     <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');$this->_foreach['brand_list_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_list_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand_data']):
        $this->_foreach['brand_list_foreach']['iteration']++;
?>
<div class="gml">
			<?php if ($this->_var['brand_data']['brand_logo']): ?>
 <a href="<?php echo $this->_var['brand_data']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brand_data']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand_data']['brand_name']); ?> (<?php echo $this->_var['brand_data']['goods_num']; ?>)" class="gi" /></a>
			<?php endif; ?>
<p class="gn"><?php echo $this->_var['brand_data']['brand_name']; ?>(<?php echo $this->_var['brand_data']['goods_num']; ?>)</p>
<p class="gd"><?php echo $this->_var['brand_data']['brand_desc']; ?></p>
</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
</div>
</div>
<div class="bt"><span></span></div>
</div>
  </div>
  
  <div class="clear"></div>
    <?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
