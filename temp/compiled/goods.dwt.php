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
<link href="themes/LevinJiu/magiczoomplus.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/LevinJiu/js/mzp-packed.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div class="mbt10 main" id="pgoods">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  
  <div id="csb">
    
<?php echo $this->fetch('library/category_tree_g.lbi'); ?>
<?php echo $this->fetch('library/goods_related.lbi'); ?>
<?php echo $this->fetch('library/goods_fittings.lbi'); ?>
<?php echo $this->fetch('library/goods_article.lbi'); ?>
<?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>



    
<?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div id="cma">
   
   <div id="goodsinfo" class="mbt10">
     
     <div id="imginfo">
<a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" ID="zoom1" rel="thumb-change: mouseover;" class="MagicZoom MagicThumb" title="<?php echo $this->_var['goods']['goods_style_name']; ?>" >
<img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="300"/>
</a>
     
     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
     
         
     
     </div>
     
     <div id="textinfo">
     <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		 <div class="clearfix">
      <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
			</div>
      <ul>
          <li class="shop_price"><?php echo $this->_var['lang']['amount']; ?>：<span id="ECS_GOODS_AMOUNT"></span><img src="themes/LevinJiu/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /></li>
   <?php if ($this->_var['promotion']): ?>
    <?php endif; ?>
      <li class="clearfix">
       <dd>
       <?php if ($this->_var['cfg']['show_goodssn']): ?>
       <strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?>
       <?php endif; ?>
       </dd>
       <dd class="ddR">
       <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font>
        <?php else: ?>
          <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?>
        <?php endif; ?>
      <?php endif; ?>
       </dd>
      </li>
      <li class="clearfix">
       <dd>
       <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
       <strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
       <?php endif; ?>
       </dd>
       <dd class="ddR">
       <?php if ($this->_var['cfg']['show_goodsweight']): ?>
       <strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?>
       <?php endif; ?>
       </dd>
      </li>
      <li class="clearfix">
       <dd>
       <?php if ($this->_var['cfg']['show_addtime']): ?>
      <strong><?php echo $this->_var['lang']['add_time']; ?></strong><?php echo $this->_var['goods']['add_time']; ?>
      <?php endif; ?>
       </dd>
       <dd class="ddR">
       
       <strong><?php echo $this->_var['lang']['goods_click_count']; ?>：</strong><?php echo $this->_var['goods']['click_count']; ?>
       </dd>
      </li>
       <?php if ($this->_var['goods']['give_integral'] > 0): ?>
      <li class="clearfix">
        <strong><?php echo $this->_var['lang']['goods_give_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font>
      </li>
        <?php endif; ?>
      <?php if ($this->_var['goods']['bonus_money']): ?>
      <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
      <strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
      </li>
      <?php endif; ?>
       <?php if ($this->_var['goods']['integral'] > 0): ?>
      <li class="clearfix">
       <strong><?php echo $this->_var['lang']['goods_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></font>
      </li>
       <?php endif; ?>
      <?php if ($this->_var['goods']['is_shipping']): ?>
      <li style="height:30px;padding-top:4px;">
      <?php echo $this->_var['lang']['goods_free_shipping']; ?><br />
      </li>
      <?php endif; ?>
      <li id="buy">
           <p class="mbt10"><span><?php echo $this->_var['lang']['number']; ?>
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" class="text tnum"/></span>
         <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
      <span>促销<?php echo $this->_var['lang']['residual_time']; ?></span>
      <span class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span>
      <?php endif; ?>
        </p>
 <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/LevinJiu/images/bnt_cat.gif" /></a>
      <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/LevinJiu/images/bnt_colles.gif" /></a>
      </li>
     <li> <span><a href="#"><img src="themes/LevinJiu/images/prove1.gif" /></a></span>   </li></ul>
      </form>
      <div class="clear"></div>
     </div>
     <div class="clear"></div>
   </div>
   
   
     <div id="goodsdet">
     <div class="nmb">
     <div class="tt">
      <h3>
        <div id="com_b" class="clearfix">
        <h2><?php echo $this->_var['lang']['goods_brief']; ?><span></span></h2>
        <h2 class="h2bg"><?php echo $this->_var['lang']['goods_attr']; ?><span></span></h2>
        <h2 class="h2bg"><?php echo $this->_var['lang']['goods_tag']; ?><span></span></h2>
        <?php if ($this->_var['package_goods_list']): ?>
        <h2 class="h2bg" style="color:red;"><?php echo $this->_var['lang']['remark_package']; ?><span></span></h2>
        <?php endif; ?>
        </div>
      </h3><span></span>
      </div>
      <div class="ct">
      <div id="com_v" class="boxCenterList RelaArticle"></div>
      <div id="com_h">
       <blockquote>
        <?php echo $this->_var['goods']['goods_desc']; ?>
       </blockquote>

     <blockquote>
      <table width="100%" border="0" cellpadding="3" cellspacing="1">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2"><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td align="left" width="70%"><?php echo htmlspecialchars($this->_var['property']['value']); ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
    <script type="text/javascript" src="themes/LevinJiu/js/table.js"></script>
 </blockquote>
       <blockquote>
<form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">
        <p id="ECS_TAGS" style="margin-bottom:5px;">
          <?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
          <a href="search.php?keywords=<?php echo urlencode($this->_var['tag']['tag_words']); ?>" style="color:#006ace; text-decoration:none; margin-right:5px;"><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?>[<?php echo $this->_var['tag']['tag_count']; ?>]</a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
        <p>
          <input type="text" name="tag" id="tag" class="text ttag" size="35" />
          <input type="submit" value="添 加" class="btn badd"/>
          <input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>"  />
        </p>
                <script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                function submitTag(frm)
                {
                  try
                  {
                    var tag = frm.elements['tag'].value;
                    var idx = frm.elements['goods_id'].value;

                    if (tag.length > 0 && parseInt(idx) > 0)
                    {
                      Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                    }
                  }
                  catch (e) {alert(e);}

                  return false;
                }

                function submitTagResponse(result)
                {
                  var div = document.getElementById('ECS_TAGS');

                  if (result.error > 0)
                  {
                    alert(result.message);
                  }
                  else
                  {
                    try
                    {
                      div.innerHTML = '';
                      var tags = result.content;

                      for (i = 0; i < tags.length; i++)
                      {
                        div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                      }
                    }
                    catch (e) {alert(e);}
                  }
                }
                
                //]]>
                </script>
              </form>       </blockquote>
     <?php if ($this->_var['package_goods_list']): ?>
     <blockquote>
       <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
			  <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
        <table width="100%" border="0" cellpadding="3" cellspacing="1">
				<tr>
					<td>
					<?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
					<a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><font class="f1"><?php echo $this->_var['goods_list']['goods_name']; ?></font></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</td>
					<td>
					<strong><?php echo $this->_var['lang']['old_price']; ?></strong><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
          <strong><?php echo $this->_var['lang']['package_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
          <strong><?php echo $this->_var['lang']['then_old_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
					</td>
					<td>
					<a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" style="background:transparent"><img src="themes/LevinJiu/images/bnt_buy_1.gif" alt="<?php echo $this->_var['lang']['add_to_cart']; ?>" /></a>
					</td>
				</tr>
	    </table>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </blockquote>
     <?php endif; ?>

      </div>
     </div>
     <div class="bt"><span></span></div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
</div>
  
  
<?php echo $this->fetch('library/bought_goods.lbi'); ?>
<?php echo $this->fetch('library/comments.lbi'); ?>

  </div>
  
  <div class="clear"></div>
<?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
