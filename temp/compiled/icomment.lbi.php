<?php
if(!function_exists("get_comments")){
function get_comments($num)
{
$sql = 'SELECT a.*,b.goods_id,b.goods_thumb,b.goods_name FROM '. $GLOBALS['ecs']->table('comment') .
' AS a,'. $GLOBALS['ecs']->table('goods') .'AS b WHERE a.status = 1 AND a.parent_id = 0 and a.comment_type=0 and a.id_value=b.goods_id '.
' ORDER BY a.add_time DESC';
if ($num > 0)
{
$sql .= ' LIMIT ' . $num;
}
//echo $sql;
$res = $GLOBALS['db']->getAll($sql);
$comments = array();
foreach ($res AS $idx => $row)
{
$comments[$idx]['add_time'] = local_date($GLOBALS['_CFG']['time_format'], $row['add_time']);
$comments[$idx]['content'] = $row['content'];
$comments[$idx]['id_value'] = $row['id_value'];
$comments[$idx]['comment_rank'] = $row['comment_rank'];
$comments[$idx]['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
$comments[$idx]['goods_name'] = $row['goods_name'];
}
return $comments;
}
}
?>

<?php
$this->assign('my_comments',get_comments(5)); // 数据条数
?>
<div id="icomment" class="mt10">
<div class="nmb">
<div class="tt"><h3>客户酒评</h3></div>
<div class="ct">
<div class="bgw p1-0">
<?php $_from = $this->_var['my_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['icomment'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['icomment']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['icomment']['iteration']++;
?>
<div class="gml" id="ic_<?php echo $this->_foreach['icomment']['iteration']; ?>">
<a href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" target="_blank"><img src="<?php echo $this->_var['comments']['goods_thumb']; ?>" class="gi"/></a>
<a href="goods.php?id=<?php echo $this->_var['comments']['id_value']; ?>" target="_blank" class="gn"><?php echo $this->_var['comments']['goods_name']; ?></a>
<p class="gd"><?php echo sub_str($this->_var['comments']['content'],30); ?> <img src="themes/LevinJiu/images/stars<?php echo $this->_var['comments']['comment_rank']; ?>.gif" align="absmiddle" /><span> (<?php echo $this->_var['comments']['add_time']; ?>) </span></p>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<div class="bt"><span></span></div>
</div></div>