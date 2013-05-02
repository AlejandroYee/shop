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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>


<div class="mbt10 main" id="particle">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  
  <div id="csb">
<?php echo $this->fetch('library/cart.lbi'); ?>
<?php echo $this->fetch('library/category_tree.lbi'); ?>
 <?php echo $this->fetch('library/filter_attr.lbi'); ?>
 <?php echo $this->fetch('library/price_grade.lbi'); ?>

<?php echo $this->fetch('library/goods_related.lbi'); ?>



    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div id="cma">
  <div class="nmb">
<div class="tt"><h1><?php echo htmlspecialchars($this->_var['article']['title']); ?><b><?php echo htmlspecialchars($this->_var['article']['author']); ?> / <?php echo $this->_var['article']['add_time']; ?></b></h1><span></span></div>
<div class="ct"><div class="bgw p1-0">
 <div id="art_contain"> 
 <?php if ($this->_var['article']['content']): ?>
         <?php echo $this->_var['article']['content']; ?>
         <?php endif; ?>
         <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
         <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
         
          <div class="nextprev"><?php if ($this->_var['next_article']): ?>
            <p class="right"><?php echo $this->_var['lang']['next_article']; ?>:<a class="next" href="<?php echo $this->_var['next_article']['url']; ?>"><?php echo $this->_var['next_article']['title']; ?></a></p>
          <?php endif; ?>
          
          <?php if ($this->_var['prev_article']): ?>
            <p class="left"> <?php echo $this->_var['lang']['prev_article']; ?>:<a class="prev" href="<?php echo $this->_var['prev_article']['url']; ?>"><?php echo $this->_var['prev_article']['title']; ?></a></p>
          <?php endif; ?>
          <div class="clear"></div>
</div></div></div></div>
<div class="bt"><span></span></div>
</div>
  <?php echo $this->fetch('library/comments.lbi'); ?>
  </div>
  
<div class="clear"></div>
    <?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
