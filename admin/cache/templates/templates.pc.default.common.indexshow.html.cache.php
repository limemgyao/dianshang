<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
 <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/ct_content.css">

<div class="body">
    <!--开头结尾部分-->
    <div class="sanjiliandong">
        <span>你现在所在的位置 ：</span>
        <a href="/index.php?c=category&id=39">首页 </a> > 
        <span><?php echo $cat['name']; ?>></span>
        <?php $rt = $this->list_tag("action=module catid=$_GET[pid]"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==$_GET["id"]) { ?>
        <span>  <?php echo $t['title']; ?></span>
        <?php }  } } ?>
    </div>
    <!--内容部分-->
    <div class="container22">
        <div class="ct_content">
            <div class="cont_title">
            	<?php $rt = $this->list_tag("action=module catid=$_GET[pid]"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==$_GET["id"]) { ?>
                <div>
                    <?php echo $t['title']; ?>
                </div>
                <p>来源：<?php echo $t['laiyuan']; ?>    阅读次数: <?php echo $t['hits']; ?>  发布时间：<?php echo $t['updatetime']; ?></p>
            </div>
            <hr>
            <div class="ct_txt">
               <?php echo $content; ?>
            </div>
            <?php }  } } ?>
        </div>
    </div>
    <!--链接开始-->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
