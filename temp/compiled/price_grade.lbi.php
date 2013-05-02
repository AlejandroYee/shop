<?php if ($this->_var['price_grade']): ?>
<div id="price_grade">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['price_grade']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
 <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
    <?php if ($this->_var['grade']['selected']): ?>
    <img src="themes/LevinJiu/images/alone.gif" style=" margin-right:8px;"><font class="f1 f5"><?php echo $this->_var['grade']['start']; ?> - <?php echo $this->_var['grade']['end']; ?> <?php if ($this->_var['grade']['goods_num']): ?>(<?php echo $this->_var['grade']['goods_num']; ?>)<?php endif; ?></font><br />
    <?php else: ?>
    <a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['start']; ?> - <?php echo $this->_var['grade']['end']; ?></a> <?php if ($this->_var['grade']['goods_num']): ?>(<?php echo $this->_var['grade']['goods_num']; ?>)<?php endif; ?><br />
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div></div>
<div class="bt"><span></span></div>
</div>
<?php endif; ?>
