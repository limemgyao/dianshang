<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
    </div>
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/head.css">
	<link rel="stylesheet" href="<?php echo THEME_PATH; ?>css/index.css">	
	<link rel="stylesheet" href="" />
    <div class="container1">
        <!--内容一开始-->
        <div class="con1">
<div class="con1_left">
    <div class="con1_left-big">
        <div class="con1_left_bigCon" id="single_lb">
            <ul class="big" style="height: 1325px;">
                            <?php $rt = $this->list_tag("action=module catid=83"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($key==0) { ?>
	                        <li class="none disblock">
	                            <a href="<?php echo $t['url'].'&pid=83'; ?>"><img src="<?php echo dr_get_file($t['thumb']); ?>" alt=""></a>
	                        </li>
                       	 <?php }  if ($key>0) { ?>
	                        <li class="none">
	                            <a href="<?php echo $t['url'].'&pid=83'; ?>"><img src="<?php echo dr_get_file($t['thumb']); ?>" alt=""></a>
	                        </li>
                       	 <?php }  } } ?>
                        </ul>
                        <<div class="title"></div>
            				<div class="title_con">
                            <ul class="small" id="small">
                            	 <?php $rt = $this->list_tag("action=module catid=83"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                                <li><?php echo $t['title']; ?></li>
                                <?php } } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                  <div class="con1_left_min">
       				 <ul class="small" id="small">
                    	<?php $rt = $this->list_tag("action=module catid=83"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                        <li id="min_image">
                            <img src="<?php echo dr_get_file($t['thumb']); ?>" alt="">
                        </li>
                        <?php } } ?>
                        
                    </ul>
                </div>
            </div>
           <div class="con1_right">
               <div class="con1_right_con">
                    <div class="con1">
                        <p class="p1">
                            <strong>要闻速递</strong>
                            <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==47) { ?>
                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
                            <?php }  } } ?>
                        </p>
                        <p class="p2">
                        	<?php $rt = $this->list_tag("action=module catid=47 num=1"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <a href="<?php echo $t['url'].'&pid=47'; ?>">
                                <strong><?php echo $t['title']; ?></strong>
                            </a>
                        </p>
                        <p class="p3">
                            <?php echo $t['des']; ?> <a href="<?php echo $t['url'].'&pid=47'; ?>">[详情]</a>
                        </p>
                        <?php } } ?>
                        <p class="p1 p4">
                            <strong>中心动态</strong>
                            <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==47) { ?>
                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
                            <?php }  } } ?>
                        </p>
                        <ul>
                        	<?php $rt = $this->list_tag("action=module catid=47 num=8"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($key>0) {  if (strlen($t['title'])>140) { ?>
                            <li>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['url'].'&pid=47'; ?>"><?php echo mb_substr($t['title'],0,19,'utf-8'); ?>...</a>
                                    <span style="display: block;float:right;">2017-12-15</span>
                                </p>
                            </li>
                            <?php }  if (strlen($t['title'])<140) { ?>
                            <li>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['url'].'&pid=47'; ?>"><?php echo mb_substr($t['title'],0,19,'utf-8'); ?></a>
                                    <span style="display: block;float:right;">2017-12-15</span>
                                </p>
                            </li>
                            <?php }  }  } } ?>
                        </ul>
                    </div>
               </div>
           </div>
        </div>
        <!--内容一结束-->
        <!--广告开始-->
        <div class="advertising">
            <img src="<?php echo THEME_PATH; ?>img/lx-index-guanggao.jpg" alt="">
        </div>
        <!--广告结束-->
        <!--内容三开始-->
        <div class="con2">
            <div class="con2_left">
                <div class="con2_left_top">
                    <div class="title">
                        <ul>
                            <li class="icon">
                                <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                            </li>
                            <li class="title1">
                                <strong>服务大厅</strong>
                            </li>
                            <li class="more">
                            	 <?php $rt = $this->list_tag("action=category id=66"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                          
                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
                          
                            <?php } } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="con">
                    	
                        <ul>
                        	<?php $rt = $this->list_tag("action=category  pid=65"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a>
                            </li>
                            <?php } } ?>
                           
                        </ul>
                    </div>
                </div>
                <div style="height: 6px;"></div>
                <div class="con2_left_top con2_left_center">
                    <div class="title">
                        <ul>
                            <li class="icon">
                                <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                            </li>
                            <li class="title1">
                                <strong>省市协会</strong>
                            </li>
                            <li class="more" >
                            	<?php $rt = $this->list_tag("action=module catid=78"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==328) { ?>
                                <a href="<?php echo $t['url']; ?>">更多>></a>
                                <?php }  } } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="con">
                        <ul>
                        	<?php $rt = $this->list_tag("action=module catid=78"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <li style="padding-top: 0px;line-height: 10px;width: 49px;height: 20px;line-height: 20px;">
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                            </li>
                            <?php } } ?>
                            
                        </ul>
                    </div>
                </div>
                <div style="height: 6px;"></div>
                <div class="con2_left_top con3_left_center">
                    <div class="title">
                        <ul>
                            <li class="icon">
                                <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                            </li>
                            <li class="title1">
                                <strong>协会会员</strong>
                            </li>
                            <li class="more">
                            	<?php $rt = $this->list_tag("action=category id=79"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                                <a href="<?php echo $t['url']; ?>">更多>></a>
                                <?php } } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="con">
                        <ul>
                        	<?php $rt = $this->list_tag("action=module catid=80"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <li>&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['url'].'&pid=80'; ?>"><?php echo $t['title']; ?></a></li>
                            <?php } } ?>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="con2_right">
                <div class="top">
                    <div class="left">
                        <div class="left-1 con2_left_top">
                            <div class="title">
                                <ul>
                                    <li class="icon">
                                        <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                                    </li>
                                    <li class="title1">
                                    	
                                        <strong>通知公告</strong>
                                    </li>
                                    <li class="more" style="margin-top:-4px;">
                                    	<?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==49) { ?>
				                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
				                            <?php }  } } ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="con" style="width:515px;">
                                <ul>
                                	<?php $rt = $this->list_tag("action=module catid=49 num=6"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                                    <li style="width: 100%;">
                                    	
                                        
                                            <p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['url'].'&pid=49'; ?>"><?php echo substr($t['title'],0,100); ?>
                                                </a>
                                                <span style="display: block;float:right;"><?php echo date('y-m-d',$t['updatetime']) ?></span>
                                            </p>
                                        
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="left-1 left-2 con2_left_top">
                            <div class="title">
                                <ul>
                                    <li class="icon">
                                        <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                                    </li>
                                    <li class="title1">
                                        <strong>活动专题</strong>
                                    </li>
                                    <li class="more" style="margin-top:-4px;">
                                    	<?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==51) { ?>
				                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
				                            <?php }  } } ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="con" style="width:515px;">
                                <ul>
                                	
                                    <?php $rt = $this->list_tag("action=module catid=51 num=6"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                                    <li style="width: 100%;">
                                    	
                                        
                                            <p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['url'].'&pid=51'; ?>"><?php echo substr($t['title'],0,100); ?>
                                               </a>
                                               <span style="display: block;float:right;"><?php echo date('y-m-d',$t['updatetime']) ?></span>
                                            </p>
                                        
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="left-3">
                            <img src="<?php echo THEME_PATH; ?>img/lx-index-welcom.jpg" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="blog">
                            <a href="javascript:;" style="display:inline-block;width:112px;height:87px;">
                                <img src="<?php echo THEME_PATH; ?>img/lx-index-erweima.jpg" alt="">
                            </a>
                            <a href="javascript:;" style="display:inline-block;width:117px;height:87px;">
                                <img src="<?php echo THEME_PATH; ?>img/lx-index-brand17.jpg" alt="">
                            </a>

                        </div>
                        <div class="cooperation con2_left_top">
                            <div class="title">
                                <ul>
                                    <li class="icon">
                                        <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                                    </li>
                                    <li class="title1">
                                        <strong>合作机构</strong>
                                    </li>
                                    <li class="more">
                                     <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==61) { ?>
				                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
				                            <?php }  } } ?>
                                    </li>
                                </ul>
                            </div>
                            <div >
                                <ul class="con cooperation1">
                                	 <?php $rt = $this->list_tag("action=module catid=61 num=6"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                                    <li style="float:none;padding-top:5px">
                                            <p> 
                                                &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['dizhi']; ?>"><?php echo $t['title']; ?>
                                            </a>
                                            </p>
                                        
                                    </li>
                                    <?php } } ?>
                           
                                </ul>
                            </div>
                        </div>
                        <div class="video con2_left_top">
                            <div class="title">
                                <ul>
                                    <li class="iconcon">
                                        <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                                    </li>
                                    <li class="title1">
                                        <strong>音频/视频</strong>
                                    </li>
                                    <li class="more" >
                                        <a href="javascripot:;">更多>></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="con">
                                <div class="sp">

                                </div>
                                <p>直通首届世界互联网大会电子商务论...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center  con2_left_top">
                    <div class="title">
                        <ul>
                            <li class="icon">
                                <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                            </li>
                            <li class="title1">
                                <strong>专家观点</strong>
                            </li>
                            <li class="more" style="margin-top:-4px;">
                                <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==54) { ?>
		                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
		                            <?php }  } } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="con" style="width:100%;">
                        <div class="left">
                        	<?php $rt = $this->list_tag("action=module catid=54 num=2"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <div class="left-1">
                                <div class="left-1-1">
									<img src="<?php echo dr_get_file($t['thumb']); ?>" alt=""  style="width: 100%;height: 100%;"/>
                                </div>
                                <div class="left-1-2">
                                    <a href="<?php echo $t['url'].'&pid=54'; ?>" style="color:#003366;">
                                    	<?php if (strlen($t['title'])<13) { ?>
                                    		<strong>
                                           <?php echo $t['laiyuan']; ?>:  <?php echo $t['title']; ?>
                                        </strong>
                                    	<?php }  if (strlen($t['title'])>13) { ?>
                                    		<strong>
                                           <?php echo $t['laiyuan']; ?>:  <?php echo mb_substr($t['title'],0,13,'utf-8'); ?>...
                                        </strong>
                                    	<?php } ?>	
                                    </a>
                                    
                                        <p style="line-height:22px;"><a href="<?php echo $t['url'].'&pid=54'; ?>" class="detail" style="line-height:22px;">
                                           [详情]
                                        </a>
                                        </p>
                                    
                                </div>
                            </div>
                           <?php } } ?>
                           </div>
                        <div class="right">
                            <ul>
                            	<?php $rt = $this->list_tag("action=module catid=54 num=8"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($key>1) { ?>
                                <li>
                                	<?php if (strlen($t['title'])>30) { ?>
                                    <a href="<?php echo $t['url'].'&pid=54'; ?>" style="color:rgb(0,51,153);">[<?php echo $t['laiyuan']; ?>]</a>
                                   <a href="<?php echo $t['url'].'&pid=54'; ?>"><?php echo mb_substr($t['title'],0,30,'utf-8'); ?>...</a>
                                   <?php }  if (strlen($t['title'])<30) { ?>
                                    <a href="<?php echo $t['url'].'&pid=54'; ?>" style="color:rgb(0,51,153);">[<?php echo $t['laiyuan']; ?>]</a>
                                   <a href="<?php echo $t['url'].'&pid=54'; ?>"><?php echo $t['title']; ?></a>
                                   <?php }  }  } } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="left  con2_left_top">
                        <div class="title">
                            <ul>
                                <li class="icon">
                                    <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                                </li>
                                <li class="title1">
                                    <strong>行业动态</strong>
                                </li>
                                <li class="more" style="margin-top:-4px;">
                                    <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==56) { ?>
		                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
		                            <?php }  } } ?>
                                </li>
                            </ul>
                        </div>
                        <div class="con" style="width:100%;">
                            <ul>
                            	<?php $rt = $this->list_tag("action=module catid=56 num=5"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if (strlen($t['title'])>200) { ?>
                                <li style="width:100%;">
                                   
                                        <p style="width:100%;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp; <a href="<?php echo $t['url'].'&pid=56'; ?>" style="width:100%;"><?php echo mb_substr($t['title'],0,20,'utf-8'); ?>...
                                             </a>
                                            <span style="float:right;"><?php echo date('y-m-d',$t['updatetime']) ?></span>
                                        </p>
                                   
                                </li>
                                <?php }  if (strlen($t['title'])<200) { ?>
                                <li style="width:100%;">
                                    
                                        <p style="width:100%;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp;<a href="<?php echo $t['url'].'&pid=56'; ?>" style="width:100%;"><?php echo mb_substr($t['title'],0,22,'utf-8'); ?>
                                            </a>
                                            <span style="float:right;"><?php echo date('y-m-d',$t['updatetime']) ?></span>
                                        </p>
                                    
                                </li>
                                <?php }  } } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="right  con2_left_top">
                        <div class="title">
                            <ul>
                                <li class="icon">
                                    <img src="<?php echo THEME_PATH; ?>img/lx-index-tishi.jpg" alt="">
                                </li>
                                <li class="title1">
                                    <strong>行业政策</strong>
                                </li>
                                <li class="more" style="margin-top:-4px;">
                                   <?php $rt = $this->list_tag("action=category pid=0"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if ($t['id']==58) { ?>
		                            <span><a href="<?php echo $t['url']; ?>">更多>></a></span>
		                            <?php }  } } ?>
                                </li>
                            </ul>
                        </div>
                        <div class="con" style="width:100%">
                            <ul>
                            	<?php $rt = $this->list_tag("action=module catid=58 num=5"); if ($rt) extract($rt); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) {  if (strlen($t['title'])>90) { ?>
                                <li style="width:100%;">
                                   
                                        <p style="width:100%;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp; <a href="<?php echo $t['url'].'&pid=58'; ?>" style="width:100%;"><?php echo mb_substr($t['title'],0,23,'utf-8'); ?>...
                                             </a>
                                            <span style="float:right;"><?php echo date('y-m-d',$t['updatetime']) ?></span>
                                        </p>
                                   
                                </li>
                                <?php }  if (strlen($t['title'])<90) { ?>
                                <li style="width:100%;">
                                   
                                        <p style="width:100%;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;·&nbsp;&nbsp; <a href="<?php echo $t['url'].'&pid=58'; ?>" style="width:100%;"><?php echo mb_substr($t['title'],0,23,'utf-8'); ?>
                                            </a>
                                            <span style="float:right;"><?php echo date('y-m-d',$t['updatetime']) ?></span>
                                        </p>
                                    
                                </li>
                                <?php }  } } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--内容三结束-->

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
























