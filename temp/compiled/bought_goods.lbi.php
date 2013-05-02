<?php if ($this->_var['bought_goods']): ?>
     <div id="bought_goods">
     <div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['shopping_and_other']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
  <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['bought_goods_data']):
?>
<div class="gmg left">
<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"  class="gi" /></a>
<a class="gn" href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['bought_goods_data']['shop_price']; ?><?php endif; ?></b></span>
           </p>

</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="clear"></div>
</div></div>
<div class="bt"><span></span></div>
</div>
    </div>
    <?php endif; ?>