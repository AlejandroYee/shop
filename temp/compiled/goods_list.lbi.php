<div id="goods_list">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['goods_list']; ?></h3>
<div id="categorylistnav">
  <form method="GET" class="sort" name="listform">
  <?php echo $this->_var['lang']['btn_display']; ?>：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/LevinJiu/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/LevinJiu/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/LevinJiu/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>&nbsp;&nbsp;
  
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/LevinJiu/images/goods_id_<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['goods_id']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><img src="themes/LevinJiu/images/shop_price_<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['shop_price']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/LevinJiu/images/last_update_<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['last_update']; ?>"></a>

  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
</div>
<div class="clear"></div>
<span></span></div>
<div class="ct">
<div class="bgw p1-0">
    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <div class="gml"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id="nobg"<?php else: ?>id="bg"<?php endif; ?>>
    <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="gi" /></a>
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="gn"><?php if ($this->_var['goods']['goods_style_name']): ?><?php echo $this->_var['goods']['goods_style_name']; ?><?php else: ?>
<?php echo $this->_var['goods']['goods_name']; ?><?php endif; ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></b></span>
           </p>
<p class="gd"> <?php if ($this->_var['goods']['goods_brief']): ?><?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><?php endif; ?></p>
 <div id="action">         <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="gf"><?php echo $this->_var['lang']['btn_collect']; ?></a><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="gct"><?php echo $this->_var['lang']['btn_buy']; ?></a><a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="gcp"><?php echo $this->_var['lang']['compare']; ?></a>
 <div class="clear"></div>
</div> 
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
        <div class="gmg">
    <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="gi" /></a>
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="gn"><?php if ($this->_var['goods']['goods_style_name']): ?><?php echo $this->_var['goods']['goods_style_name']; ?><?php else: ?>
<?php echo $this->_var['goods']['goods_name']; ?><?php endif; ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></b></span>
           </p>
 <div id="action">         <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="gf"><?php echo $this->_var['lang']['btn_collect']; ?></a><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="gct"><?php echo $this->_var['lang']['btn_buy']; ?></a><a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="gcp"><?php echo $this->_var['lang']['compare']; ?></a>
 <div class="clear"></div>
</div> 
    </div>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <div class="clear"></div>
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <div class="gmt"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id="nobg"<?php else: ?>id="bg"<?php endif; ?>>
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="gn"><?php if ($this->_var['goods']['goods_style_name']): ?><?php echo $this->_var['goods']['goods_style_name']; ?><?php else: ?>
<?php echo $this->_var['goods']['goods_name']; ?><?php endif; ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></b></span>
           </p>
<p class="gd"> <?php if ($this->_var['goods']['goods_brief']): ?><?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><?php endif; ?></p>
 <div id="action">         <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="gf"><?php echo $this->_var['lang']['btn_collect']; ?></a><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="gct"><?php echo $this->_var['lang']['btn_buy']; ?></a><a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="gcp"><?php echo $this->_var['lang']['compare']; ?></a>
 <div class="clear"></div>
</div> 
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>
</div>
</div>
<div class="bt"><span></span></div>
</div>
</div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>