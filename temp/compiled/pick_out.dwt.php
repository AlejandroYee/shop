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


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div class="mbt main" id="ppickout">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  
  <div id="csb">
    
    <?php echo $this->fetch('library/cart.lbi'); ?>
    <?php echo $this->fetch('library/categorys.lbi'); ?>
    <?php echo $this->fetch('library/goods_related.lbi'); ?>
    <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <?php echo $this->fetch('library/goods_article.lbi'); ?>
    <?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
    <?php echo $this->fetch('library/pickoutchoice_add.lbi'); ?>
    
    
    
    
  </div>
  
  
  <div id="cma">
 <div id="goods_list"> <div class="nmb">
<div class="tt"><h3 class="left"><?php echo $this->_var['lang']['search_result']; ?> <b>(<?php echo $this->_var['count']; ?>)</b></h3><div class="more right"><a href="<?php echo $this->_var['url']; ?>">查看全部商品</a></div>
<div class="clear"></div>
<span></span></div>
<div class="ct"><div class="p1-0 bgw">
     <?php $_from = $this->_var['pickout_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
<div class="gmg">
<a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="gi" /></a>
<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="gn"><?php echo $this->_var['goods']['short_name']; ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></b></span>
           </p>
 <div id="action">         <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="gf"><?php echo $this->_var['lang']['btn_collect']; ?></a><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="gct"><?php echo $this->_var['lang']['btn_buy']; ?></a>
 <div class="clear"></div>
</div> 
</div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     <div class="clear"></div>
</div></div>
<div class="bt"><span></span></div>
</div>
</div>
  <div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['pick_out']; ?></h3><span></span></div>
<div class="ct"><div class="p1-0 bgw">
      <table width="100%" border="0" cellpadding="5" cellspacing="1">
      <?php $_from = $this->_var['condition']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'caption');if (count($_from)):
    foreach ($_from AS $this->_var['caption']):
?>
      <tr>
        <td>
          <img src="themes/LevinJiu/images/note.gif" alt="no alt" />&nbsp;&nbsp;<strong class="f_red"><?php echo $this->_var['caption']['name']; ?></strong></td>
      </tr>
      <?php $_from = $this->_var['caption']['cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
      <tr>
        <td>&nbsp;&nbsp;<strong><?php echo $this->_var['cat']['cat_name']; ?></strong></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;
          <?php $_from = $this->_var['cat']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
          &nbsp;&nbsp;<a href="<?php echo $this->_var['list']['url']; ?>" class="f6"><?php echo $this->_var['list']['name']; ?></a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
<script type="text/javascript" src="themes/LevinJiu/js/table.js"></script>
</div></div>
<div class="bt"><span></span></div>
</div>
  </div>
  
  <div class="clear"></div>
    <?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
