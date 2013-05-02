<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="main mbt10 users" id="puser_passport"> 
 <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="blank"></div>

<?php if ($this->_var['action'] == 'login'): ?>
<div class="left"><a href="#"><img src="themes/LevinJiu/images/regad.gif"/></a></div>
<div id="loginbox">
<div class="nmb">
<div class="tt">
<h3 onmouseover="tabChange(this,'tabcontent2')" class="cli">会员登录<span></span></h3>
<h3 onmouseover="tabChange(this,'tabcontent2')">快速注册<span></span></h3>
<div class="clear"></div>
<span></span></div>
<div class="ct" id="tabcontent2">
<div class="bgw p1-0">
<ul name="tabul" id="clear">
   <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()" id="loginForm">
<div class="username"><span><?php echo $this->_var['lang']['label_username']; ?></span><input name="username" type="text" size="25" class="text tusername" /></div>
<div class="password"><span><?php echo $this->_var['lang']['label_password']; ?></span><input name="password" type="password" size="25" class="text tpassword"/></div>
<?php if ($this->_var['enabled_captcha']): ?>
<div class="captcha"><span><?php echo $this->_var['lang']['comment_captcha']; ?></span><input type="text" size="8" name="captcha" class="text tcaptcha" /><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></div>
<?php endif; ?>
<div class="tcenter"><input type="hidden" name="act" value="act_login" /><input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" /><input type="submit" name="submit" value="用户登录" class="btn blogin" /></div>    
<div class="get_ps_by_q tcenter"><a href="user.php?act=qpassword_name"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>  |  <a href="user.php?act=get_password"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a></div>
</form>
    </ul>
<ul class="hidden">
<form action="user.php" method="post" name="formUser" onsubmit="return register();" id="registerForm">
<div class="username"><span><?php echo $this->_var['lang']['label_username']; ?></span><input name="username" id="username" type="text" class="text tusername" onblur="is_registered(this.value);"/>
<p id="username_notice"></p>
</div>  
<div class="email"><span>电子邮箱</span><input name="email" type="text" class="text temail" id="email" onblur="checkEmail(this.value);" />
<p id="email_notice"></p>        
</div>  
<div class="email"><span>推荐人</span><input name="tuijianren" type="text" class="text temail" id="tuijianren" />   
</div>  
<div class="password"><span><?php echo $this->_var['lang']['label_password']; ?></span><input name="password" class="text tpassword" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)"/>
<p id="password_notice"></p>        
</div>
<div class="confirmp"><span><?php echo $this->_var['lang']['confirm_password']; ?></span><input name="confirm_password" class="text tconfirmpassword" type="password" id="confirm_password" onblur="check_conform_password(this.value);"/>
<p id="conform_password_notice"></p>   
</div>  
<?php if ($this->_var['enabled_captcha']): ?>
<div class="captcha"><span><?php echo $this->_var['lang']['comment_captcha']; ?></span><input type="text" size="8" name="captcha" class="text tcaptcha" /><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></div>  
<?php endif; ?>
<div class="tcenter"><input name="agreement" type="checkbox" value="1" checked="checked" style="display:none;" />
<input name="act" type="hidden" value="act_register" >
<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
<input type="submit" name="Submit" class="btn breg" value="马上注册" />
</div>
</form>
</ul>
</div>
</div>
<div class="bt"><span></span></div>
</div>
</div>
<div class="clear"></div>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'register'): ?>
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
    <div class="usBox">
      <div class="usBox_2 clearfix">
        <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
      </div>
    </div>
    <?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div class="left"><a href="#"><img src="themes/LevinJiu/images/regad.gif"/></a></div>
<div id="loginbox">
<div class="nmb">
<div class="tt">
<h3 onmouseover="tabChange(this,'tabcontent2')" class="cli">会员登录<span></span></h3>
<h3 onmouseover="tabChange(this,'tabcontent2')">快速注册<span></span></h3>
<div class="clear"></div>
<span></span></div>
<div class="ct" id="tabcontent2">
<div class="bgw p1-0">
<ul name="tabul" id="clear">
   <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()" id="loginForm">
<div class="username"><span><?php echo $this->_var['lang']['label_username']; ?></span><input name="username" type="text" size="25" class="text tusername" /></div>
<div class="password"><span><?php echo $this->_var['lang']['label_password']; ?></span><input name="password" type="password" size="25" class="text tpassword"/></div>
<?php if ($this->_var['enabled_captcha']): ?>
<div class="captcha"><span><?php echo $this->_var['lang']['comment_captcha']; ?></span><input type="text" size="8" name="captcha" class="text tcaptcha" /><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></div>
<?php endif; ?>
<div class="tcenter"><input type="hidden" name="act" value="act_login" /><input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" /><input type="submit" name="submit" value="用户登录" class="btn blogin" /></div>    
<div class="get_ps_by_q tcenter"><a href="user.php?act=qpassword_name"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>  |  <a href="user.php?act=get_password"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a></div>
</form>
    </ul>
<ul class="hidden">
<form action="user.php" method="post" name="formUser" onsubmit="return register();" id="registerForm">
<div class="username"><span><?php echo $this->_var['lang']['label_username']; ?></span><input name="username" id="username" type="text" class="text tusername" onblur="is_registered(this.value);"/>
<p id="username_notice"></p>
</div>  
<div class="email"><span>电子邮箱</span><input name="email" type="text" class="text temail" id="email" onblur="checkEmail(this.value);" />
<p id="email_notice"></p>        
</div> 
<div class="email"><span>推荐人</span><input name="tuijianren" type="text" class="text temail" id="tuijianren" />   
</div> 
<div class="password"><span><?php echo $this->_var['lang']['label_password']; ?></span><input name="password" class="text tpassword" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)"/>
<p id="password_notice"></p>        
</div>
<div class="confirmp"><span><?php echo $this->_var['lang']['confirm_password']; ?></span><input name="confirm_password" class="text tconfirmpassword" type="password" id="confirm_password" onblur="check_conform_password(this.value);"/>
<p id="conform_password_notice"></p>   
</div>  
<?php if ($this->_var['enabled_captcha']): ?>
<div class="captcha"><span><?php echo $this->_var['lang']['comment_captcha']; ?></span><input type="text" size="8" name="captcha" class="text tcaptcha" /><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></div>  
<?php endif; ?>
<div class="tcenter"><input name="agreement" type="checkbox" value="1" checked="checked" style="display:none;" />
<input name="act" type="hidden" value="act_register" >
<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
<input type="submit" name="Submit" class="btn breg" value="马上注册" />
</div>
</form>
</ul>
</div>
</div>
<div class="bt"><span></span></div>
</div>
</div>
<div class="clear"></div>
<?php endif; ?>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'get_password'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
    <div class="nmb">
    <div class="tt"><h3>找回密码</h3><span></span></div>
    <div class="ct">
    <div class="p1-0 bgw">
        <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <table width="100%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
          </tr>
          <tr>
            <td width="40%" class="tright"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="60%" class="tleft"><input name="user_name" type="text" size="30" class="text tusername" /></td>
          </tr>
          <tr>
            <td width="40%" class="tright"><?php echo $this->_var['lang']['email']; ?></td>
            <td width="60%" class="tleft"><input name="email" type="text" size="30" class="text temail" /></td>
          </tr>
          <tr>
            <td colspan="2" class="tcenter"><input type="hidden" name="act" value="send_pwd_email" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="btn bsubmit"/>
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="btn bback" />
	    </td>
          </tr>
        </table>
      </form>
    </div>
    </div>
    <div class="bt"><span></span></div>
    </div>
    
<?php endif; ?>


    <?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="nmb">
<div class="tt"><h3>通过问题找回密码</h3><span></span></div>
<div class="ct">
<div class="bgw p1-0">
    <form action="user.php" method="post">
        <table width="100%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
          </tr>
          <tr>
            <td width="40%" class="tright"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="60%" class="tleft"><input name="user_name" type="text" size="30" class="text tusername" /></td>
          </tr>
          <tr>
            <td colspan="2" class="tcenter"><input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="btn bsubmit" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="btn bback" />
	    </td>
          </tr>
        </table>
      </form>
</div>
</div>
<div class="bt"><span></span></div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="nmb">
<div class="tt"><h3>请输入问题的答案</h3><span></span></div>
<div class="ct">
<div class="bgw p1-0">
    <form action="user.php" method="post">
        <table width="100%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
          </tr>
          <tr>
            <td width="40%" class="tright"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
            <td width="60%" class="tleft"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td width="40%" class="tright"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
             <td width="60%" class="tleft"><input name="passwd_answer" type="text" size="20" class="text tpasswd_answer" /></td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td width="40%" class="tright"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
             <td width="60%" class="tleft"><input type="text" size="8" name="captcha" class="text tcaptcha" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr>
            <td colspan="2" class="tcenter"><input type="hidden" name="act" value="check_answer" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="btn bsubmit"/>
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" class="btn bback" />
	    </td>
          </tr>
        </table>
      </form>
</div>
</div>
<div class="bt"><span></span></div>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
    
    <div class="nmb">
<div class="tt"><h3>请重新设置您的密码</h3><span></span></div>
<div class="ct">
<div class="bgw p1-0">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <table width="100%" border="0" align="center">
        <tr>
          <td width="40%" class="tright"><?php echo $this->_var['lang']['new_password']; ?></td>
          <td width="60%" class="tleft"><input name="new_password" type="password" size="25" class="text tnewpassword" /></td>
        </tr>
        <tr>
          <td width="40%" class="tright"><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td width="60%" class="tleft"><input name="confirm_password" type="password" size="25"  class="intext tconfirm_password"/></td>
        </tr>
        <tr>
          <td colspan="2" class="tcenter">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" class="btn bsubmit" />
          </td>
        </tr>
      </table>
    </form>
</div>
</div>
<div class="bt"><span></span></div>
</div>
<?php endif; ?>

</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
