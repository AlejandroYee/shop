<div id="categroup">

        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_26364100_1367414342');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_26364100_1367414342']):
        $this->_foreach['cat']['iteration']++;
?>
          <dt>
            <h4 id="cat_0<?php echo $this->_foreach['cat']['iteration']; ?>"><a href="<?php echo $this->_var['cat_0_26364100_1367414342']['url']; ?>" <?php if ($this->_var['category'] == $this->_var['cat_0_26364100_1367414342']['id']): ?> class="cur"<?php endif; ?> ><?php echo htmlspecialchars($this->_var['cat_0_26364100_1367414342']['name']); ?></a></h4>
            <p><?php $_from = $this->_var['cat_0_26364100_1367414342']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_26389800_1367414342');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_26389800_1367414342']):
?>
            <a href="<?php echo $this->_var['child_0_26389800_1367414342']['url']; ?>" <?php if ($this->_var['category'] == $this->_var['child_0_26389800_1367414342']['id']): ?> class="cur"<?php endif; ?> ><?php echo htmlspecialchars($this->_var['child_0_26389800_1367414342']['name']); ?></a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
          </dt>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          
</div>
