<?php $_from = $this->_var['attribute_linked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked');if (count($_from)):
    foreach ($_from AS $this->_var['linked']):
?>
<?php if ($this->_var['linked']['goods']): ?>
<div id="goods_attrlinked">
<div class="nmb">
<div class="tt"><h3><?php echo sub_str($this->_var['linked']['title'],11); ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
  <?php $_from = $this->_var['linked']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
<div class="gml">
 <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['linked_goods_data']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['linked_goods_data']['name']); ?>" class="gi" /></a>
  <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" class="gn" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>"><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?></a>
  <p class="gp"><span class="shop_price"><b><?php echo $this->_var['linked_goods_data']['shop_price']; ?></b></span></p>
</div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>