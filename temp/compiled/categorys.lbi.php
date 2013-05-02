<?php if ($this->_var['cat_list']): ?>
<div id="categorys">
  <div id="category_tree">
  <div class="nmb">
<div class="tt"><h3>商品类别</h3><span></span></div>
<div class="ct"><div class="p1-0 bgw">
<ul>
  <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_85946300_1367447422');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_85946300_1367447422']):
?>
     <li><a href="<?php echo $this->_var['cat_0_85946300_1367447422']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_85946300_1367447422']['cat_name']); ?> <?php if ($this->_var['cat_0_85946300_1367447422']['goods_num']): ?>(<?php echo $this->_var['cat_0_85946300_1367447422']['goods_num']; ?>)<?php endif; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</ul>
<div class="clear"></div>
</div></div>
<div class="bt"><span></span></div>
</div>
  </div>
</div>
<?php endif; ?>