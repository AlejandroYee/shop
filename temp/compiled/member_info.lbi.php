<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<div id="hellouser">
<?php echo $this->_var['lang']['hello']; ?>，<span><?php echo $this->_var['user_info']['username']; ?></span>, <?php echo $this->_var['lang']['welcome_return']; ?>！
【<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>】
【<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>】
</div>
<?php else: ?>
<div id="helloguest"><?php echo $this->_var['lang']['welcome']; ?>&nbsp;&nbsp;【<a href="user.php">登录</a>】【<a href="user.php?act=register">注册</a>】
</div><?php endif; ?>