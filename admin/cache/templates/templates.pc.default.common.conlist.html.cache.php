<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/extra.css">
 <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/ct_content.css">
<div class="body">
    <!--开头结尾部分-->
    <div class="sanjiliandong">
        <span>你现在所在的位置 ：</span>
        <a href="/index.php?c=category&id=39">首页  </a> >
        <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==$_GET["id"]) { ?>
        		<span>  <?php echo $t['title']; ?>> </span>
        	<?php }  } } ?>
    </div>
    <!--内容部分-->
    <div class="container22">
        <div class="ct_content">
            <div class="ct_txt">
            	 <?php $rt = $this->list_tag("action=module catid=61"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            		<div style="width: 180px;height: 108px; overflow: hidden; float: left; margin: 50px 30px;"><a href="<?php echo $t['dizhi']; ?>">
            			<img src="<?php echo dr_get_file($t['thumb']); ?>" alt="" /></a></div>
            	<?php } } ?>	
            </div>
        </div>
    </div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
