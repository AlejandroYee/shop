<?php if ($this->_var['new_goods']): ?>
<div id="recommend_new">
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="nmb" id="itemNew">
  <div class="tt">
   <h3>新品上市</h3>
     <?php if ($this->_var['cat_rec'] [ 2 ]): ?>
      <h2><a href="javascript:void(0)" onmouseover="change_tab_style('itemNew', 'h2', this);get_cat_recommend(2, 0);"><?php echo $this->_var['lang']['all_goods']; ?><span></span></a></h2>
      <?php $_from = $this->_var['cat_rec']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data_0_37542500_1367414627');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data_0_37542500_1367414627']):
?>
      <h2 class="h2bg"><a href="javascript:void(0)" onmouseover="change_tab_style('itemNew', 'h2', this);get_cat_recommend(2, <?php echo $this->_var['rec_data_0_37542500_1367414627']['cat_id']; ?>)"><?php echo $this->_var['rec_data_0_37542500_1367414627']['cat_name']; ?><span></span></a></h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
      <span></span>
  </div>
  <div id="show_new_area" class="ct"><div class="bgw p1-0">
  <?php endif; ?>
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_37559100_1367414627');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_37559100_1367414627']):
        $this->_foreach['new_goods']['iteration']++;
?>
  <div class="gmg left" id="rec_0<?php echo $this->_foreach['new_goods']['iteration']; ?>">
         <span class="news"></span>
           <a href="<?php echo $this->_var['goods_0_37559100_1367414627']['url']; ?>"><img src="<?php echo $this->_var['goods_0_37559100_1367414627']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_37559100_1367414627']['name']); ?>" class="gi" /></a>
           <a class="gn" href="<?php echo $this->_var['goods_0_37559100_1367414627']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_37559100_1367414627']['name']); ?>"><?php echo $this->_var['goods_0_37559100_1367414627']['short_style_name']; ?></a>
           <p class="gp">
           <span class="market_price"><?php echo $this->_var['lang']['market_price']; ?><b> <?php echo $this->_var['goods_0_37559100_1367414627']['market_price']; ?></b></span><br/>
           <span class="shop_price"><?php echo $this->_var['lang']['shop_price']; ?><b> <?php if ($this->_var['goods_0_37559100_1367414627']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_37559100_1367414627']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_37559100_1367414627']['shop_price']; ?><?php endif; ?></b></span>
           </p>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div class="clear"></div>
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>
</div>
<div class="bt"><span></span></div>
</div>
  <?php endif; ?>
  </div>
<?php endif; ?>
