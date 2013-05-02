
<?php
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }
   
 ?>
 <link href="themes/LevinJiu/header.css" rel="stylesheet" type="text/css" /> 
<link href="themes/LevinJiu/style.css" rel="stylesheet" type="text/css" /> 
<style type="text/css">
ul,li,img{
	margin:0;
	padding:0;
	border:0;
	list-style:none;
}
.qqbox a{
	text-decoration:none;
	color:#333;
}
.qqbox a:hover{
	text-decoration:underline;
	color:#f30;
}
.qqbox{
	width:168px;
	height:auto;
	overflow:hidden;
	position:absolute;
	right:0;
	top:120px;
	color:#333;
	font-size:12px;
	letter-spacing:0px;
	z-index:101;
}
.qqlv{
	width:20px;
	height:197px;
	overflow:hidden;
	position:relative;
	float:right;
	z-index:50;
}
.close{
	width:20px;
	height:17px;
	overflow:hidden;
}
.qqlv2{
	width:20px;
	height:181px;
	overflow:hidden;
}
.qqkf{
	width:168px;
	height:auto;
	overflow:hidden;
	right:0;
	top:0;
	z-index:99;
}
.qqtop{
	width:168px;
	height:49px;
}
.qqcenter{
	width:168px;
	height:auto;
	overflow:hidden;
	background:url(http://www.111cn.net/qq/online_r5_c1.jpg) repeat-y left top;
}
.qqcenter_box{
	width:160px;
	height:auto;
	overflow:hidden;
}
.qq1{
	text-align:left;
	text-indent:10px;
	font-weight:bold;
}
.qq_line{
	width:150px;
	height:1px;
	margin-top:2px;
	margin-bottom:6px;
	overflow:hidden;
	background:url(http://www.111cn.net/qq/online_r7_c1.jpg) no-repeat;
}
.qq1_box{
	width:150px;
	height:auto;
	text-align:left;
	overflow:hidden;
}
.qq1_box ul li{
	text-align:left;
	text-indent:13px;
	margin-bottom:3px;
}
.qq1_box ul .tm{
	margin-left:10px;
}
.qq2{
	text-align:left;
	text-indent:10px;
	font-weight:bold;
	margin-top:6px;
}
.qq2 span{
	font-weight:normal;
}
.qq2_box ul li{
	text-align:left;
	text-indent:8px;
	margin-bottom:3px;
}
.qqend{
	width:168px;
	height:81px;
}
</style>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="header" class="header">

	<div class="head-bar">

    	<div class="site-bar" style="color:#666666"> 
  
 <div id="topnav">

<div class="right" id="ECS_CARTINFO">   
您的购物车中共有  <b><?=$number?></b>  个商品，合计  <b><?=price_format($amount, false)?></b> | <span class="cart"><a href="flow.php">查看购物车</a></span> 
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
<div id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
<div class="clear"></div>
</div>

</div></div>

<div class="head-main">

    	<div class="head-logo"> 
 <a href="index.php" class="logo-site" group1="ad" group2="1443">乐购</a> 
</div><div class="head-search">

			<form id="searchForm" name="searchForm"  action="search.php"action="search.php" target="_blank">

				<input type="text" class="txt-keyword" name="keywords" value="" />

				<input type="submit" class="btn-search" value="搜索" /> 

			</form>

			<p>
			
				
			 <script type="text/javascript">
				<!--
				function checkSearchForm()
				{
					if(document.getElementById('keyword').value)
					{
						return true;
					}
					else
					{
						alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
						return false;
					}
				}
				-->
				</script>
				   
			 <?php if ($this->_var['searchkeywords']): ?>
			  <font color="#993300"><?php echo $this->_var['lang']['hot_search']; ?> ：</font>
			   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
			   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
			   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			   <?php endif; ?>
		

				</p>

		</div>

		<div class="head-shopcart">

			<a href="http://www.yesmywine.com/cart2/showCart.jspa" class="btn-shopcart" rel="nofollow">购物车</a>

			<span class="txt-cartcount">0</span>

			<div class="shopcart-list"></div>

		</div><div class="head-service"> 

 <ul ><?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
         <?php if ($this->_var['k'] == 0): ?><li class="qqzc">  <?php endif; ?>
         <?php if ($this->_var['k'] == 1): ?><li class="hwhs">  <?php endif; ?>
		 <?php if ($this->_var['k'] == 2): ?><li class="free"> <?php endif; ?>
		 <h5> <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></h5> </li>  
            
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><span></span></ul> 
</div></div>

	<div class="head-nav">

		<div class="site-nav">

	    	<ul class="navlinks" style="overflow:hidden"> 
 <li folder="/index"><a href="index.php" group1="ad" group2="1309">首 页</a></li> 
		<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
		<li >
		<a href="<?php echo $this->_var['nav']['url']; ?>" group1="ad" group2="1309"><?php echo $this->_var['nav']['name']; ?></a>
		</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul><div class="categorys"> 
 <h3><a  target="_blank" group1="ad" group2="1308">选酒中心</a><b class="arrow"></b></h3> 
 <div class="categroup" <?php if ($this->_var['index_cate'] == 'index'): ?> style="display:block;"<?php endif; ?>> 
 <?php $this->assign('p','0'); ?>
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>

		 <?php if ($this->_foreach['cat']['iteration'] < 6): ?>
		 <dl>  <dt>
            <h4 ><a href="<?php echo $this->_var['cat']['url']; ?>" <?php if ($this->_var['category'] == $this->_var['cat']['id']): ?> class="cur"<?php endif; ?> ><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h4>
            <p><?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('p', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['p'] => $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?>
             <?php if ($this->_foreach['foo']['iteration'] < 6): ?>
            <a href="<?php echo $this->_var['child']['url']; ?>" <?php if ($this->_var['category'] == $this->_var['child']['id']): ?> class="cur"<?php endif; ?> ><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
            <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
          </dt> 
   <dd  style="height:auto"> 
    <!--<ul class="subcates"> 
     <li> <h5>种类<?php echo $this->_var['cat']['id']; ?></h5> <p class="lh22"> <a href="http://list.yesmywine.com/z3-e1/" target="_blank" group1="ad" group2="1308">威士忌</a> <a href="http://list.yesmywine.com/z3-e2/" target="_blank" group1="ad" group2="1308">伏特加</a> <a href="http://list.yesmywine.com/z3-e3/" target="_blank" group1="ad" group2="1308">白兰地</a> <a href="http://list.yesmywine.com/z3-e4/" target="_blank" group1="ad" group2="1308">力娇酒</a> <a href="http://list.yesmywine.com/z3-e5/" target="_blank" group1="ad" group2="1308">干邑</a> <a href="http://list.yesmywine.com/z3-e6/" target="_blank" group1="ad" group2="1308">雅文邑</a> <a href="http://list.yesmywine.com/z3-e7/" class="w80" target="_blank" group1="ad" group2="1308">纯麦芽威士忌</a> <a href="http://list.yesmywine.com/z3-e8/" target="_blank" group1="ad" group2="1308">金酒</a> <a href="http://list.yesmywine.com/z3-e9/" target="_blank" group1="ad" group2="1308">朗姆酒</a> <a href="http://list.yesmywine.com/z3-ea/" target="_blank" group1="ad" group2="1308">墨西哥烈酒</a> <a href="http://list.yesmywine.com/z3-eb/" target="_blank" group1="ad" group2="1308">开胃酒</a> <a href="http://list.yesmywine.com/z3-ec/" target="_blank" group1="ad" group2="1308">清酒</a> <a href="http://list.yesmywine.com/z3-ed/" target="_blank" group1="ad" group2="1308">烧酒</a> </p> </li> 
     <li> <h5>产地</h5> <p class="lh22"> <a href="http://list.yesmywine.com/z3-a1/" target="_blank" group1="ad" group2="1308">法国</a> <a href="http://list.yesmywine.com/z3-a2/" target="_blank" group1="ad" group2="1308">意大利</a> <a href="http://list.yesmywine.com/z3-a6/" target="_blank" group1="ad" group2="1308">西班牙</a> <a href="http://list.yesmywine.com/z3-a4/" target="_blank" group1="ad" group2="1308">德国</a> <a href="http://list.yesmywine.com/z3-a5/" target="_blank" group1="ad" group2="1308">美国</a> <a href="http://list.yesmywine.com/z3-aa/" target="_blank" group1="ad" group2="1308">南非</a> <a href="http://list.yesmywine.com/z3-a9/" target="_blank" group1="ad" group2="1308">阿根廷</a> <a href="http://list.yesmywine.com/z3-ac/" target="_blank" group1="ad" group2="1308">葡萄牙</a> <a href="http://list.yesmywine.com/z3-ae/" target="_blank" group1="ad" group2="1308">匈牙利</a> <a href="http://list.yesmywine.com/z3-a10/" target="_blank" group1="ad" group2="1308">日本</a> <a href="http://list.yesmywine.com/z3-a11/" target="_blank" group1="ad" group2="1308">英国</a> <a href="http://list.yesmywine.com/z3-a12/" target="_blank" group1="ad" group2="1308">印度</a> <a href="http://list.yesmywine.com/z3-a13/" target="_blank" group1="ad" group2="1308">瑞典</a> <a href="http://list.yesmywine.com/z3-a14/" target="_blank" group1="ad" group2="1308">乌克兰</a> <a href="http://list.yesmywine.com/z3-a15/" target="_blank" group1="ad" group2="1308">墨西哥</a> <a href="http://list.yesmywine.com/z3-a16/" target="_blank" group1="ad" group2="1308">俄罗斯</a> <a href="http://list.yesmywine.com/z3-a17/" target="_blank" group1="ad" group2="1308">爱尔兰</a> <a href="http://list.yesmywine.com/z3-a18/" target="_blank" group1="ad" group2="1308">牙买加</a> <a href="http://list.yesmywine.com/z3-a19/" target="_blank" group1="ad" group2="1308">古巴</a> </p> </li> 
    </ul> 
    <ul class="relcates"> 
     <li> <h5>品牌</h5> <p class="lh22"> <a href="http://list.yesmywine.com/z3-g1/" target="_blank" group1="ad" group2="1308">人头马</a> <a href="http://list.yesmywine.com/z3-g2/" target="_blank" group1="ad" group2="1308">轩尼诗</a> <a href="http://list.yesmywine.com/z3-g42/" target="_blank" group1="ad" group2="1308">摩根船长</a> <a href="http://list.yesmywine.com/z3-g3/" target="_blank" group1="ad" group2="1308">芝华士</a> <a href="http://list.yesmywine.com/z3-g7/" target="_blank" group1="ad" group2="1308">百龄坛</a> <a href="http://list.yesmywine.com/z3-g6/" target="_blank" group1="ad" group2="1308">百利</a> <a href="http://list.yesmywine.com/z3-g31/" target="_blank" group1="ad" group2="1308">金巴利</a> <a href="http://list.yesmywine.com/z3-gd/" target="_blank" group1="ad" group2="1308">百加得</a> <a href="http://list.yesmywine.com/z3-g66/" target="_blank" group1="ad" group2="1308">占边</a> <a href="http://list.yesmywine.com/z3-g9/" target="_blank" group1="ad" group2="1308">斯米诺</a> <a href="http://list.yesmywine.com/z3-g5d/" target="_blank" group1="ad" group2="1308">万事好</a> <a href="http://list.yesmywine.com/z3-g30/" target="_blank" group1="ad" group2="1308">杰克丹尼</a> <a href="http://list.yesmywine.com/z3-gb/" target="_blank" group1="ad" group2="1308">奥美加</a> <a href="http://list.yesmywine.com/z3-ge/" target="_blank" group1="ad" group2="1308">必富达</a> <a href="http://list.yesmywine.com/z3-gc/" target="_blank" group1="ad" group2="1308">百富</a> <a href="http://list.yesmywine.com/z3-g11/" target="_blank" group1="ad" group2="1308">帝萨诺</a> <a href="http://list.yesmywine.com/z3-g68/" target="_blank" group1="ad" group2="1308">尊美醇</a> <a href="http://list.yesmywine.com/z3-g14/" target="_blank" group1="ad" group2="1308">甘露</a> <a href="http://list.yesmywine.com/z3-g1c/" target="_blank" group1="ad" group2="1308">杰彼斯</a> <a href="http://list.yesmywine.com/z3-g15/" target="_blank" group1="ad" group2="1308">柑曼怡</a> <a href="http://list.yesmywine.com/z3-g8/" target="_blank" group1="ad" group2="1308">蜂巢</a> <a href="http://list.yesmywine.com/z3-g1e/" target="_blank" group1="ad" group2="1308">爱德华</a> <a href="http://list.yesmywine.com/z3-g2f/" target="_blank" group1="ad" group2="1308">皇家</a> <a href="http://list.yesmywine.com/z3-g1f/" target="_blank" group1="ad" group2="1308">奥特西诺</a> <a href="http://list.yesmywine.com/z3-g17/" target="_blank" group1="ad" group2="1308">哥顿</a> <a href="http://list.yesmywine.com/z3-g13/" target="_blank" group1="ad" group2="1308">富豪</a> <a href="http://list.yesmywine.com/z3-g1a/" target="_blank" group1="ad" group2="1308">灰雁</a> <a href="http://list.yesmywine.com/z3-g2e/" target="_blank" group1="ad" group2="1308">红牌</a> <a href="http://list.yesmywine.com/z3-g19/" target="_blank" group1="ad" group2="1308">格朗</a> <a href="http://list.yesmywine.com/z3-g1d/" target="_blank" group1="ad" group2="1308">君度</a> <a href="http://list.yesmywine.com/z3-g55/" target="_blank" group1="ad" group2="1308">苏本</a> <a href="http://list.yesmywine.com/z3-g4/" target="_blank" group1="ad" group2="1308">马爹利</a> <a href="http://list.yesmywine.com/z3-g5/" target="_blank" group1="ad" group2="1308">尊尼获加</a> <a href="http://list.yesmywine.com/z3-ga/" target="_blank" group1="ad" group2="1308">绝对</a> <a href="http://list.yesmywine.com/z3-gf/" target="_blank" group1="ad" group2="1308">博泰勒斯</a> <a href="http://list.yesmywine.com/z3-g18/" target="_blank" group1="ad" group2="1308">格兰威特</a> <a href="http://list.yesmywine.com/z3-g12/" target="_blank" group1="ad" group2="1308">帝王</a> <a href="http://list.yesmywine.com/z3-g16/" target="_blank" group1="ad" group2="1308">高原骑士</a> <a href="http://list.yesmywine.com/z3-g10/" target="_blank" group1="ad" group2="1308">伯爵斯云利</a> <a href="http://list.yesmywine.com/z3-g5c/" target="_blank" group1="ad" group2="1308">托马斯</a> <a href="http://list.yesmywine.com/z3-g3c/" target="_blank" group1="ad" group2="1308">马天尼</a> <a href="http://list.yesmywine.com/z3-g43/" target="_blank" group1="ad" group2="1308">拿破仑</a> </p> </li> 
    </ul> -->
   </dd> </dl>
   <?php endif; ?>
   <?php $this->assign('p',$this->_var['p+1']); ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
   
 </div> 
</div></div>

	</div>

</div>

<div class="qqbox" id="divQQbox">
  <div class="qqlv" id="meumid" onMouseOver="show()"><img  src="themes/LevinJiu/images/r.gif"></div>
  <div class="qqkf" style="display:none;" id="contentid" onMouseOut="hideMsgBox(event)">
    <div class="qqtop"><img  src="themes/LevinJiu/images/20101113005414223.jpg"></div>
    <div class="qqcenter">
      <div class="qqcenter_box">
        <div class="qq1"><img  src="themes/LevinJiu/images/20101113005421224.jpg" align="absmiddle"> 在线咨询</div>
        <div class="qq_line"></div>
        <div class="qq1_box">
          <ul>
            <li><a target="_blank" href="tencent://message/?uin=1796395872&Site=www.legouday.com&Menu=yes"><a href="tencent://message/?uin=1796395872&Site=www.legouday.com&Menu=yes"><img src="themes/LevinJiu/images/qq.jpg"/>售前服务</a></li>
			<li><a target="_blank" href="tencent://message/?uin=1796395872&Site=www.legouday.com&Menu=yes"><a href="tencent://message/?uin=1796395872&Site=www.legouday.com&Menu=yes"><img src="themes/LevinJiu/images/qq.jpg"/>售后服务</a></li>
			<li><a target="_blank" href="tencent://message/?uin=1175874214 &Site=www.legouday.com&Menu=yes"><a href="tencent://message/?uin=1175874214 &Site=www.legouday.com&Menu=yes"><img src="themes/LevinJiu/images/qq.jpg"/>招商客服</a></li>
			<li><a target="_blank" href="tencent://message/?uin=1175874214 &Site=www.legouday.com&Menu=yes"><a href="tencent://message/?uin=1175874214 &Site=www.legouday.com&Menu=yes"><img src="themes/LevinJiu/images/qq.jpg"/>合作客服</a></li>
            
          </ul>
        </div>
        <div class="qq_line"></div>
      </div>
    </div>
    <div class="qqend"><img  src="themes/LevinJiu/images/20101113005427443.jpg"></div>
  </div>
</div>
<script language="javascript">
var tips; 
var theTop = 120;
var old = theTop;
function initFloatTips() 
{ 
	tips = document.getElementById('divQQbox');
	moveTips();
}
function moveTips()
{
	var tt=50; 
	if (window.innerHeight) 
	{
		pos = window.pageYOffset  
	}else if (document.documentElement && document.documentElement.scrollTop) {
		pos = document.documentElement.scrollTop  
	}else if (document.body) {
		pos = document.body.scrollTop;  
	}
	//http:
	pos=pos-tips.offsetTop+theTop; 
	pos=tips.offsetTop+pos/10; 
	if (pos < theTop){
		pos = theTop;
	}
	if (pos != old) { 
		tips.style.top = pos+"px";
		tt=10;//alert(tips.style.top);  
	}
	old = pos;
	setTimeout(moveTips,tt);
}
initFloatTips();
if(typeof(HTMLElement)!="undefined")//给firefox定义contains()方法，ie下不起作用
{  
	HTMLElement.prototype.contains=function (obj)  
	{  
		while(obj!=null&&typeof(obj.tagName)!="undefind"){//
			if(obj==this) return true;  
			obj=obj.parentNode;
		}  
		return false;  
	}
}
function show()
{
	document.getElementById("meumid").style.display="none"
	document.getElementById("contentid").style.display="block"
}
function hideMsgBox(theEvent){
	if (theEvent){
		var browser=navigator.userAgent;
		if (browser.indexOf("Firefox")>0){//Firefox
			if (document.getElementById("contentid").contains(theEvent.relatedTarget)) {
				return
			}
		}
		if (browser.indexOf("MSIE")>0 || browser.indexOf("Presto")>=0){
			if (document.getElementById('contentid').contains(event.toElement)) {
				return;//结束函式
			}
		}
	}
	document.getElementById("meumid").style.display = "block";
	document.getElementById("contentid").style.display = "none";
}
</script>
<div style="width:100%;height:auto; background-color:#EBEBE8">