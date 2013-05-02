<?php if ($this->_var['article_categories']): ?>
<div id="article_category_tree">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['article_cat']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
<ul>
 <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_45407500_1367416103');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_45407500_1367416103']):
?>
 <li class="s1"><a class="l1" href="<?php echo $this->_var['cat_0_45407500_1367416103']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_45407500_1367416103']['name']); ?></a></li>
<?php $_from = $this->_var['cat_0_45407500_1367416103']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_45421400_1367416103');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_45421400_1367416103']):
?>
  <li class="s2"><a class="l2" href="<?php echo $this->_var['child_0_45421400_1367416103']['url']; ?>" style="background-image:none;"><?php echo htmlspecialchars($this->_var['child_0_45421400_1367416103']['name']); ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul></div></div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>