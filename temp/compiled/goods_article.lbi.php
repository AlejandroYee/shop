<?php if ($this->_var['goods_article_list']): ?>
<div id="goods_article">
<div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['article_releate']; ?></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
<ul>
<?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
   <li> <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo htmlspecialchars($this->_var['article']['short_title']); ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul></div></div>
<div class="bt"><span></span></div>
</div>
</div>
<?php endif; ?>