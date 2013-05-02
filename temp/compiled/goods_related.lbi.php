<?php if ($this->_var['related_goods']): ?>
<div id="goods_related">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['releate_goods']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
        <div class="gml">
         <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" class="gi" /></a>
        <a class="gn" href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a>
      <p class="gp"><span class="shop_price"><b><?php echo $this->_var['releated_goods_data']['shop_price']; ?></b></span></p> 
         </div> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div></div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>
