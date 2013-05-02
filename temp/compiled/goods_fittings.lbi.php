<?php if ($this->_var['fittings']): ?>
<div id="goods_fittings">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['accessories_releate']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
 <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
 <div class="gml">
 <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="gi" /></a>
 <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a>
 <p class="gp"><span class="shop_price"><b><?php echo $this->_var['goods']['fittings_price']; ?></b></span></p>
 </div>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div></div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>




