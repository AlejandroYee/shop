<?php if ($this->_var['filter_attr_list']): ?>
<div id="filter_attr">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['filter_attr_name']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
 <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
    <?php if ($this->_var['attr']['selected']): ?>
    <a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?><?php if ($this->_var['attr']['goods_num']): ?>(<?php echo $this->_var['attr']['goods_num']; ?>)<?php endif; ?></a>
    <?php else: ?>
    <a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?><?php if ($this->_var['attr']['goods_num']): ?>(<?php echo $this->_var['attr']['goods_num']; ?>)<?php endif; ?></a>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div></div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>