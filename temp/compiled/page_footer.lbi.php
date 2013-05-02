</div>
<script type="text/javascript">
//<![CDATA[
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
//]]>
</script>
<div id="footer">
<div class="main posr">

<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="bNavList clearfix">
   <div class="left">
仅限18周岁以上人士购买   </div>
   <div class="right">
   <?php if ($this->_var['navigator_list']['bottom']): ?>
   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_30576100_1367414342');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_30576100_1367414342']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav_0_30576100_1367414342']['url']; ?>" <?php if ($this->_var['nav_0_30576100_1367414342']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_30576100_1367414342']['name']; ?></a>
        <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
           -
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
   </div>
   <div class="clear"></div>
  </div>
 </div>
</div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="flink" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>


<div id="footer" class="footer">

	<div class="foot-main"> 
 <!--<ul class="col5 clearfix"> 
  <li class="first"> <a href="http://www.yesmywine.com/" class="foot-logo" target="_blank" group1="ad" group2="1303">也买酒</a> <p> 拒绝电话推销？ <a href="http://www.yesmywine.com/cancel/showApplyTel.jspa" target="_blank" group1="ad" group2="1303">设置勿扰</a> </p> </li> 
  <li> <h4>关注我们</h4> <p class="sns"> <a class="ico-weibo" href="http://e.weibo.com/yesmywine?ref=http://www.yesmywine.com/" target="_blank" group1="ad" group2="1303">新浪微博</a> <span class="ico-weixin">我的微信<b></b></span> <a class="ico-tencent" href="http://1.t.qq.com/ymwine" target="_blank" group1="ad" group2="1303">腾讯微博</a> <a class="ico-douban" href="http://site.douban.com/134220/" target="_blank" group1="ad" group2="1303">豆瓣小站</a> <a class="ico-mail" href="#" onClick="YM.login.pop('http://www.yesmywine.com/personalCenter/showMySubscribe.jspa');return false;" group1="ad" group2="1303">邮件订阅</a> </p> </li> 
  <li> <h4>帮助指南</h4> <p> <a href="http://www.yesmywine.com/help/view.jspa?cid=2782" target="_blank" group1="ad" group2="1303">帐户注册</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2784" target="_blank" group1="ad" group2="1303">购物流程</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2788" target="_blank" group1="ad" group2="1303">积分制度</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2790" target="_blank" group1="ad" group2="1303">常见问题</a> </p> </li> 
  <li> <h4>支付方式</h4> <p> <a href="http://www.yesmywine.com/help/view.jspa?cid=2803#p1" target="_blank" group1="ad" group2="1303">货到付款</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2803#p2" target="_blank" group1="ad" group2="1303">在线支付</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2803#p3" target="_blank" group1="ad" group2="1303">银行转帐</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2815" target="_blank" group1="ad" group2="1303">发票制度</a> </p> </li> 
  <li> <h4>配送售后</h4> <p> <a href="http://www.yesmywine.com/help/view.jspa?cid=2800" target="_blank" group1="ad" group2="1303">配送运费</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2800" target="_blank" group1="ad" group2="1303">配送范围</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=10993" target="_blank" group1="ad" group2="1303">恒温恒湿仓</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=2794" target="_blank" group1="ad" group2="1303">退换货办理</a> </p> </li> 
  <li> <h4>特色服务</h4> <p> <a href="http://www.yesmywine.com/marketing/jiuku/jiukuShuoM.html" target="_blank" group1="ad" group2="1303">存酒服务</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=10991" target="_blank" group1="ad" group2="1303">安心购物</a> <a href="http://www.yesmywine.com/help/view.jspa?cid=10994" target="_blank" group1="ad" group2="1303">联合打假</a> <a href="http://www.yesmywine.com/marketing/topic/01581/01581.html" target="_blank" group1="ad" group2="1303">经销商招募</a> <a href="http://www.yesmywine.com/marketing/topic/013588/013588.html" target="_blank" group1="ad" group2="1303">连锁加盟</a> <a href="http://www.yesmywine.com/marketing/topic/01167/01167.html" target="_blank" group1="ad" group2="1303">也买联盟</a> </p> </li> 
 </ul> -->
</div><div class="foot-nav"> 
 <a style="color:#9D8F80" href="index.php" target="_blank" group1="ad" group2="1304">关于乐购</a> 
 <span class="sep">|</span> 
 <?php if ($this->_var['navigator_list']['bottom']): ?>
   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_30646200_1367414342');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_30646200_1367414342']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a style="color:#9D8F80" href="<?php echo $this->_var['nav_0_30646200_1367414342']['url']; ?>" <?php if ($this->_var['nav_0_30646200_1367414342']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_30646200_1367414342']['name']; ?></a>
        <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
           <span class="sep">|</span> 
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
</div><!--<div class="foot-links">

		<h5><a href="http://www.yesmywine.com/help/help_05.html" target="_blank">友情链接：</a></h5>

		<p>

			<a href="http://www.howbuy.com/" title="好买基金网" target="_blank" group1="ad" group2="925">好买基金网</a> 
<a href="http://www.fenxiaowang.com/" title="分销软件" target="_blank" group1="ad" group2="925">分销软件</a> 
<a href="http://www.959.cn" title="959品牌招商网" target="_blank" group1="ad" group2="925">959品牌招商网</a> 
<a href="http://suzhou.house.sina.com.cn/" title="苏州房产网" target="_blank" group1="ad" group2="925">苏州房产网</a> 
<a href="http://www.ibicn.com" title="B2B电子商务网站" target="_blank" group1="ad" group2="925">B2B电子商务网站</a> 
<a href="http://www.yuele.com/" title="麦当劳优惠券" target="_blank" group1="ad" group2="925">麦当劳优惠券</a> 
<a href="http://www.qiong9.com" title="邛酒电子商务网" target="_blank" group1="ad" group2="925">邛酒电子商务网</a> 
<a href="http://www.mtz999.com/" title="茅台镇美酒商城" target="_blank" group1="ad" group2="925">茅台镇美酒商城</a> 
<a href="http://www.kaitao.cn/" title="开淘网" target="_blank" group1="ad" group2="925">开淘网</a> 
<a href="http://www.9tour.cn/" title="九游网" target="_blank" group1="ad" group2="925">九游网</a> 
<a href="http://www.quanmama.com" title="唯品会优惠券" target="_blank" group1="ad" group2="925">唯品会优惠券</a> 
<a href="http://www.kadang.com/" title="创意礼品" target="_blank" group1="ad" group2="925">创意礼品</a> 
<a href="http://www.globevisa.com.cn/ " title="加拿大投资移民" target="_blank" group1="ad" group2="925">加拿大投资移民</a> 
<a href="http://www.wbiao.cn/" title="万表网" target="_blank" group1="ad" group2="925">万表网</a> 
<a href="http://www.aicai.com/" title="网上买彩票" target="_blank" group1="ad" group2="925">网上买彩票</a> 
<a href="http://www.li63.com" title="礼物网" target="_blank" group1="ad" group2="925">礼物网</a> 
<a href="http://www.kypbuy.com" title="快易拍商城" target="_blank" group1="ad" group2="925">快易拍商城</a> 
<a href="http://www.haochi123.com/" title="123美食网 - 菜谱大全、餐厅点评" target="_blank" group1="ad" group2="925">123美食网</a> 
<a href="http://www.wed9.com" title="重庆婚庆" target="_blank" group1="ad" group2="925">重庆婚庆</a> 
<a href="http://shanghai.liebiao.com/" title="上海列表网" target="_blank" group1="ad" group2="925">上海列表网</a> 
<a href="http://www.renhe.cn/" title="人和网" target="_blank" group1="ad" group2="925">人和网</a> 
<a href="http://www.jiushui.tv" title="酒招商" target="_blank" group1="ad" group2="925">酒招商</a> 
<a href="http://www.qidian.com/" title="起点中文网" target="_blank" group1="ad" group2="925">起点中文网</a> 
<a href="http://www.yododo.cn/" title="旅游住宿预订" target="_blank" group1="ad" group2="925">旅游住宿预订</a> 
<a href="http://www.lvmama.com/abroad" title="出境游" target="_blank" group1="ad" group2="925">出境游</a> 
<a href="http://www.lingshi.com/" title="中国零食网" target="_blank" group1="ad" group2="925">中国零食网</a> 
<a href="http://wed114.cn/" title="wed114结婚网" target="_blank" group1="ad" group2="925">wed114结婚网</a> 
<a href="http://chengdu.anjuke.com/" title="成都房产网" target="_blank" group1="ad" group2="925">成都房产网</a> 
<a href="http://guangzhou.haozu.com/" title="广州租房" target="_blank" group1="ad" group2="925">广州租房</a> 
<a href="http://www.shaojiu.com" title="烧酒网" target="_blank" group1="ad" group2="925">烧酒网</a> 
<a href="http://www.yoger.com.cn/" title="户外运动用品" target="_blank" group1="ad" group2="925">户外运动用品</a> 
<a href="http://www.chemdrug.com/" title="药品资讯网" target="_blank" group1="ad" group2="925">药品资讯网</a> 
<a href="http://www.57tuan.com/" title="团购网" target="_blank" group1="ad" group2="925">团购网</a> 
<a href="http://www.yupsky.com/" title="潮流网站" target="_blank" group1="ad" group2="925">潮流网站</a> 
<a href="http://www.zhms.cn/" title="中华美食" target="_blank" group1="ad" group2="925">中华美食</a> 
<a href="http://www.class01.com/" title="一品中国" target="_blank" group1="ad" group2="925">一品中国</a> 
<a href="http://www.tangjiu.com" title="食品招商网" target="_blank" group1="ad" group2="925">食品招商网</a> 
<a href="http://bizinfo.jinti.com/" title="生活服务" target="_blank" group1="ad" group2="925">生活服务</a> 
<a href="http://www.brandcn.com/" title="中国品牌网" target="_blank" group1="ad" group2="925">中国品牌网</a> 
<a href="http://www.reader8.cn/" title="读书人网" target="_blank" group1="ad" group2="925">读书人网</a> 
<a href="http://www.maichawang.com" title="茶叶商城" target="_blank" group1="ad" group2="925">茶叶商城</a> 
<a href="http://product.cn.china.cn" title="热门行业" target="_blank" group1="ad" group2="925">热门行业</a> 
<a href="http://www.sinoef.com" title="服装加盟" target="_blank" group1="ad" group2="925">服装加盟</a> 
<a href="http://www.kela.cn" title="钻戒" target="_blank" group1="ad" group2="925">钻戒</a> 
<a href="http://yt.focus.cn/" title="搜狐焦点烟台站" target="_blank" group1="ad" group2="925">搜狐焦点烟台站</a> 
<a href="http://www.dajiubao.com/" title="数码比价网" target="_blank" group1="ad" group2="925">数码比价网</a> 
<a href="http://www.miaokenet.com" title="秒杀" target="_blank" group1="ad" group2="925">秒杀</a> 
<a href="http://www.mizhe.com" title="淘宝返利网" target="_blank" group1="ad" group2="925">淘宝返利网</a> 
<a href="http://www.easy361.com" title="网上商城" target="_blank" group1="ad" group2="925">网上商城</a> 
<a href="http://www.51efu.cn" title="职业装" target="_blank" group1="ad" group2="925">职业装</a> 
<a href="http://www.yipihuo.com" title="阿里巴巴批发网" target="_blank" group1="ad" group2="925">阿里巴巴批发网</a> 
<a href="http://www.qmango.com/" title="酒店预订网" target="_blank" group1="ad" group2="925">酒店预订网</a> 
<a href="http://www.xiangqinba.com" title="女性网站" target="_blank" group1="ad" group2="925">女性网站</a> 
<a href="http://www.ctsports.com.cn/" title="楚天运动频道" target="_blank" group1="ad" group2="925">楚天运动频道</a> 
<a href="http://www.cntjmh.cn" title="中国糖酒门户" target="_blank" group1="ad" group2="925">中国糖酒门户</a> 
<a href="http://www.61ef.cn" title="中国品牌童装网" target="_blank" group1="ad" group2="925">中国品牌童装网</a> 
<a href="http://www.barmap.com/" title="酒吧地图网" target="_blank" group1="ad" group2="925">酒吧地图网</a> 
<a href="http://www.zgsc123.com/" title="中国水产网" target="_blank" group1="ad" group2="925">中国水产网</a> 
<a href="http://www.5588.tv/" title="化妆品代理" target="_blank" group1="ad" group2="925">化妆品代理</a> 
<a href="http://wenzhou.liebiao.com/" title="温州分类信息网" target="_blank" group1="ad" group2="925">温州分类信息网</a> 
<a href="http://www.win4000.com/" title="桌面主题" target="_blank" group1="ad" group2="925">桌面主题</a> 
<a href="http://www.ruci.cn/" title="户外用品" target="_blank" group1="ad" group2="925">户外用品</a> 
<a href="http://www.baixiangxiang.com/" title="白相相" target="_blank" group1="ad" group2="925">白相相</a> 
<a href="http://www.eshow365.com/" title="展览会" target="_blank" group1="ad" group2="925">展览会</a> 
<a href="http://www.qieta.com/" title="切它网B2B" target="_blank" group1="ad" group2="925">切它网B2B</a> 
<a href="http://www.hi0574.com" title="宁波网" target="_blank" group1="ad" group2="925">宁波网</a> 
<a href="http://www.26595.com" title="265网址大全" target="_blank" group1="ad" group2="925">265网址大全</a> 
<a href="http://www.9000wy.com" title="大连天气" target="_blank" group1="ad" group2="925">大连天气</a> 
<a href="http://www.zhhhq.com/" title="中华婚庆网" target="_blank" group1="ad" group2="925">中华婚庆网</a> 
<a href="http://www.safedom.net/" title="女性健康网" target="_blank" group1="ad" group2="925">女性健康网</a> 
<a href="http://www.jaadee.com" title="翡翠" target="_blank" group1="ad" group2="925">翡翠</a> 
<a href="http://www.hao224.com/" title="团购导航" target="_blank" group1="ad" group2="925">团购导航</a> 
<a href="http://quanzhou.focus.cn/" title="泉州房产网" target="_blank" group1="ad" group2="925">泉州房产网</a> 
<a href="http://qd.city8.com" title="青岛地图" target="_blank" group1="ad" group2="925">青岛地图</a> 
<a href="http://www.wodingwang.com/" title="成都美食" target="_blank" group1="ad" group2="925">成都美食</a> 
<a href="http://www.boomei.com/" title="丰胸" target="_blank" group1="ad" group2="925">丰胸</a> 
<a href="http://www.zazhimi.com/" title="时尚杂志" target="_blank" group1="ad" group2="925">时尚杂志</a> 
<a href="http://www.showguide.cn" title="展会" target="_blank" group1="ad" group2="925">展会</a> 
<a href="http://www.chinalao.com" title="中劳网" target="_blank" group1="ad" group2="925">中劳网</a> 
<a href="http://www.7caihua.com/" title="七彩鲜花" target="_blank" group1="ad" group2="925">七彩鲜花</a> 
<a href="http://www.3jgo.com" title="天津三佳购物" target="_blank" group1="ad" group2="925">天津三佳购物</a> 
<a href="http://www.xyb2c.com" title="母婴用品" target="_blank" group1="ad" group2="925">母婴用品</a> 
<a href="http://www.qianinfo.com" title="市场调研" target="_blank" group1="ad" group2="925">市场调研</a> 
<a href="http://www.sjq.cn" title="四季青服装网" target="_blank" group1="ad" group2="925">四季青服装网</a> 
<a href="http://www.hercity.com" title="倾城网" target="_blank" group1="ad" group2="925">倾城网</a> 
<a href="http://www.shanghaining.com/" title="上海论坛" target="_blank" group1="ad" group2="925">上海论坛</a> 
<a href="http://shenzhen.aifang.com" title="深圳房产网" target="_blank" group1="ad" group2="925">深圳房产网</a> 
<a href="http://bj.nuomi.com" title="北京团购" target="_blank" group1="ad" group2="925">北京团购</a> 
<a href="http://www.16floor.com" title="16楼" target="_blank" group1="ad" group2="925">16楼</a> 
<a href="http://www.qm118.com/" title="鸿运起名网" target="_blank" group1="ad" group2="925">鸿运起名网</a> 
<a href="http://www.9928.tv/" title="白酒招商" target="_blank" group1="ad" group2="925">白酒招商</a> 
<a href="http://sg.zhulong.com " title="建造师" target="_blank" group1="ad" group2="925">建造师</a> 
<a href="http://bbs.diannaodian.com" title="电脑维修论坛" target="_blank" group1="ad" group2="925">电脑维修论坛</a> 
<a href="http://zz.focus.cn/" title="郑州房产网" target="_blank" group1="ad" group2="925">郑州房产网</a> 
<a href="http://chengde.focus.cn/" title="承德房地产网" target="_blank" group1="ad" group2="925">承德房地产网</a> 
<a href="http://esf.wuhan.soufun.com/" title="武汉二手房" target="_blank" group1="ad" group2="925">武汉二手房</a> 
<a href="http://www.easeeyes.com/" title="隐形眼镜" target="_blank" group1="ad" group2="925">隐形眼镜</a> 
<a href="http://mil.chinaiiss.com/" title="军事新闻" target="_blank" group1="ad" group2="925">军事新闻</a> 
<a href="http://www.mai126.com" title="安全网购导航" target="_blank" group1="ad" group2="925">安全网购导航</a> 
<a href="http://www.wuyuan168.com/" title="婺源" target="_blank" group1="ad" group2="925">婺源</a> 
<a href="http://www.58food.com" title="中国食品网" target="_blank" group1="ad" group2="925">中国食品网</a> 
<a href="http://www.juhoog.cn" title="化州橘红" target="_blank" group1="ad" group2="925">化州橘红</a> 
<a href="http://nt.zhulong.com" title="暖通" target="_blank" group1="ad" group2="925">暖通</a> 
<a href="http://www.pinjiu.com" title="干红葡萄酒" target="_blank" group1="ad" group2="925">干红葡萄酒</a> 
<a href="http://www.qian999.com" title="贷款融资" target="_blank" group1="ad" group2="925">贷款融资</a> 
<a href="http://2s.ffw.com.cn/" title="福州二手房" target="_blank" group1="ad" group2="925">福州二手房</a> 
<a href="http://www.9939.com" title="健康网" target="_blank" group1="ad" group2="925">健康网</a> 
<a href="http://www.go9939.com" title="保健品商城" target="_blank" group1="ad" group2="925">保健品商城</a> 
<a href="http://www.guangjiela.com/" title="逛街啦" target="_blank" group1="ad" group2="925">逛街啦</a> 
<a href="http://www.zerodu.com" title="进口红酒" target="_blank" group1="ad" group2="925">进口红酒</a> 
<a href="http://piao.gaotie.cn" title="网上订票" target="_blank" group1="ad" group2="925">网上订票</a> 
<a href="http://www.360buycom360.com" title="唯品会女装" target="_blank" group1="ad" group2="925">唯品会女装</a> 
<a href="http://www.balifafa.com" title="巴黎商城" target="_blank" group1="ad" group2="925">巴黎商城</a> 
<a href="http://www.wine9.com" title="品尚红酒网" target="_blank" group1="ad" group2="925">品尚红酒网</a> 
<a href="http://www.foodszs.com/" title="中国食品招商网" target="_blank" group1="ad" group2="925">中国食品招商网</a> 
<a href="http://www.5food.cn" title="中国食品网" target="_blank" group1="ad" group2="925">中国食品网</a> 
<a href="http://henanfood.net/" title="河南食品安全" target="_blank" group1="ad" group2="925">河南食品安全</a> 
<a href="http://www.baijiu001.com" title="白酒" target="_blank" group1="ad" group2="925">白酒</a> 
<a href="http://www.zgfspmh.cn" title="副食品门户" target="_blank" group1="ad" group2="925">副食品门户</a> 
<a href="http://www.guuoo.com" title="天梭手表官网" target="_blank" group1="ad" group2="925">天梭手表官网</a></p>

		<span class="btn-more" onClick="$('.foot-links').toggleClass('foot-links-show');"></span>

	</div>
    -->
	<div class="foot-license"> 
 <span class="top100">消费者最喜爱的网站TOP100</span> 
 <span class="sep">|</span> 
 <span class="year18">仅限18周岁以上人士购买</span> 
 <span class="sep">|</span> 
 <span class="shzxw">网络社会征信网</span> 
 <span class="sep">|</span> 
 <span class="shgs">天津工商</span> 
 <span class="sep">|</span> 
 <span>津ICP备12007052号-1</span> 
</div> 
<!--<div class="foot-copyright e-imageload">
  &copy; CopyRight: YESMYWINE.COM All Rights Reserved 
 <span class="sep">|</span> 
 <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#999" group1="ad" group2="1305">沪ICP备09093441号</a> 
 <br /> 
 <a id="___szfw_logo___" href="https://search.szfw.org/cert/l/CX20130327002363002881" target="_blank" group1="ad" group2="1305"><img src="/images/blank.gif" width="112" height="40" align="absmiddle" original="http://img11.yesmyimg.com/newWeb/images/chengxin.png" /></a> 
 <script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();
 </script> 
</div>--></div>

<div class="blank"></div>

 <div class="text tcenter p10-0">
 <img src="themes/LevinJiu/images/levin/footerIcon.gif" class="mbt10"/><br />
 <?php echo $this->_var['copyright']; ?> Design By<a href="http://www.levinchiu.com" target="_blank"> LevinChiu</a><br />
 <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?>
 <?php if ($this->_var['service_phone']): ?>
      Tel: <?php echo $this->_var['service_phone']; ?>
 <?php endif; ?>
 <?php if ($this->_var['service_email']): ?>
      E-mail: <?php echo $this->_var['service_email']; ?><br />
 <?php endif; ?>
 <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/LevinJiu/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="themes/LevinJiu/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  <?php if ($this->_var['icp_number']): ?>
  <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
  <?php endif; ?>
  <!--<?php 
$k = array (
  'name' => 'query_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><br />-->
   <!-- <div align="left"  id="rss" style="text-align:center"><a href="<?php echo $this->_var['feed_url']; ?>"><img src="themes/LevinJiu/images/xml_rss2.gif" alt="rss" /></a></div>-->
 </div>
</div></div>

