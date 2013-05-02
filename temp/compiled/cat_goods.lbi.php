<div id="cat_goods">
<div class="nmb" id="catgood_<?php echo $this->_var['goods_cat']['id']; ?>">
 <div class="tt">
  <h3><a href="<?php echo $this->_var['goods_cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></a></h3><span></span>
  </div>
    <div class="ct">
    <div class="bgw p1-0">
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_37954600_1367414627');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_37954600_1367414627']):
?>
      <div class="gmg left">
           <a href="<?php echo $this->_var['goods_0_37954600_1367414627']['url']; ?>"><img src="<?php echo $this->_var['goods_0_37954600_1367414627']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_37954600_1367414627']['name']); ?>" class="gi" /></a>
           <a href="<?php echo $this->_var['goods_0_37954600_1367414627']['url']; ?>" class="gn" title="<?php echo htmlspecialchars($this->_var['goods_0_37954600_1367414627']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_37954600_1367414627']['short_name']); ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods_0_37954600_1367414627']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['goods_0_37954600_1367414627']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_37954600_1367414627']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_37954600_1367414627']['shop_price']; ?><?php endif; ?></b></span>
           </p>
        </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <div class="clear"></div>
    </div>
    </div>
    <div class="bt"><span></span></div>
 </div>
</div>