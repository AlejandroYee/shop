<?php if ($this->_var['helps']): ?>
<div id="help" class="mbt10">
<div class="nmb left">
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat']):
?>
<dl>
  <dt><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
  <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_43804900_1367458778');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_43804900_1367458778']):
?>
  <dd><a href="<?php echo $this->_var['item_0_43804900_1367458778']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item_0_43804900_1367458778']['title']); ?>"><?php echo $this->_var['item_0_43804900_1367458778']['short_title']; ?></a></dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div><div class="clear"></div>
</div>
<?php endif; ?>
