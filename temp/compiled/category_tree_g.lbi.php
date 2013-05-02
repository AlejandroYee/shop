<div id="category_tree">
  <div class="nmb">
    <div class="tt"><h3>热门分类</h3></div>
    <div class="ct">
      <div class="bgw p1-0"> 
        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_45362900_1367414819');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_45362900_1367414819']):
        $this->_foreach['cat']['iteration']++;
?>
          <ul>
            <li class="tree-l1" id="cat_0<?php echo $this->_foreach['cat']['iteration']; ?>"><a href="<?php echo $this->_var['cat_0_45362900_1367414819']['url']; ?>" <?php if ($this->_var['goods']['cat_id'] == $this->_var['cat_0_45362900_1367414819']['id']): ?> class="cur"<?php endif; ?> ><?php echo htmlspecialchars($this->_var['cat_0_45362900_1367414819']['name']); ?></a></li>
            <li class="tree-l2"><?php $_from = $this->_var['cat_0_45362900_1367414819']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
            <a href="<?php echo $this->_var['child']['url']; ?>" <?php if ($this->_var['goods']['cat_id'] == $this->_var['child']['id']): ?> class="cur"<?php endif; ?> ><?php echo htmlspecialchars($this->_var['child']['name']); ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></li>
            
          </ul>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <div class="clear"></div>
        </div>
    </div>
    <div class="bt"><span></span></div>
  </div>
</div>
