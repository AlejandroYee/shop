<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta name="chinaz-site-verification" content="081e7651-48c6-4c2f-a569-99321685eab1"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/LevinJiu/header.css" rel="stylesheet" type="text/css" /> 
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body >
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script>window.onload=function(){
var id=document.getElementById('select_wine');
id.style.display='block';
}</script>
<div class="mbt10 main" id="index">
<div class="mbt10">

<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
<div>
<div id="csbl">

<?php echo $this->fetch('library/category_tree.lbi'); ?>

</div>
<div id="cmi">

<?php echo $this->fetch('library/index_ad.lbi'); ?>

<div class="mt10">

<!--<a href="/index.php"><img src="themes/LevinJiu/images/510X100.gif"/></a>-->

</div>
</div>

<div class="clear"></div>
</div>
<div class="mbt10">
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php echo $this->fetch('library/ibox.lbi'); ?>
<div class="clear"></div>
</div>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
<div class="mbt10">

<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<div>
<div id="icatgoods" class="b690l">
  
<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?><?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?><?php $this->assign('cat_goods',$this->_var['cat_goods_4']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_4']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

</div>
<div class="b302r">
<a href="http://www.legouday.com"><img src="themes/LevinJiu/images/ad4.gif"/></a>


<?php echo $this->fetch('library/icomment.lbi'); ?>
</div>
<div class="clear"></div>
</div>
<div>
<div class="b690l" id="icatarticle">
<a href="http://www.legouday.com"><img src="themes/LevinJiu/images/ad11.gif" class="mbt10"/></a>


<div class="icatart1 left">

<?php $this->assign('articles',$this->_var['articles_5']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_5']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

</div>
<div class="icatart2 right">

<?php $this->assign('articles',$this->_var['articles_6']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_6']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

</div>
<div class="clear"></div>
<div class="icatart3 left">


</div>
<div class="icatart4 right">


</div>
<div class="clear"></div>
</div>
<div class="b302r">
<?php echo $this->fetch('library/brands.lbi'); ?>
</div>
<div class="clear"></div>
</div>
<a href="http://www.legouday.com"><img src="themes/LevinJiu/images/ad12.gif" class="mbt10"/></a>


<?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>
