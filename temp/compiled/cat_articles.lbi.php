<div id="cat_articles">
<div class="nmb">
<div class="tt"><h3><a href="<?php echo $this->_var['articles_cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></a></h3><span></span></div>
<div class="ct"><div class="bgw p1-0">
<ul>
<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
  <li class="s1"><a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul> 
</div></div>
<div class="bt"><span></span></div>
</div>
</div>
