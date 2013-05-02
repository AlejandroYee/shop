<div id="pickoutchoice">
    <div class="nmb">
<div class="tt"><h3><?php echo $this->_var['lang']['your_choice']; ?></h3><span></span></div>
<div class="ct"><div class="p1-0 bgw">
        <ul>
        <?php $_from = $this->_var['picks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pick');if (count($_from)):
    foreach ($_from AS $this->_var['pick']):
?>
        <li style="word-break:break-all;"><a href="<?php echo $this->_var['pick']['url']; ?>"><?php echo $this->_var['pick']['name']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </ul>
</div></div>
<div class="bt"><span></span></div>
</div>
</div>