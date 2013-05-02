<a href="brand.php"><img src="themes/LevinJiu/images/ad6.gif" class="mbt10"/></a>
<?php if ($this->_var['brand_list']): ?>
<div id="brands">
<div class="nmb">
<div class="ct">
<div class="bgw p1-0">
  <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
    <?php if (($this->_foreach['brand_foreach']['iteration'] - 1) <= 11): ?>
      <?php if ($this->_var['brand']['brand_logo']): ?>
        <a href="<?php echo $this->_var['brand']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> (<?php echo $this->_var['brand']['goods_num']; ?>)" /><br/><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> <?php if ($this->_var['brand']['goods_num']): ?>(<?php echo $this->_var['brand']['goods_num']; ?>)<?php endif; ?></a>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div class="clear"></div>
</div>
</div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>