<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title>待编辑</title>
	<link href="/Public/Home/css/youku.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/chuda_qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/youku.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/up_v3.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='/Public/Home/js/common.js'></script>
<script type="text/javascript" src='/Public/Home/js/qwindow.js'></script>

</head>
<body class="yk-w1190 body-offset-w1190">
			<!-- 头部 -->
			
			<!-- 头部结束 -->

			<!-- 主体 -->
			<div class='s_main'>
				
<form action="<?php echo U('Home/Upload/insertInfo');?>" method="post" enctype="multipart/form-data" >
<div class="upload-progress" style="display: block;">
        <!--uploadTitle start-->
        <div class="uploadTitle">
            <h3>上传视频</h3>
        </div><!--uploadTitle end-->

        <div class="videoInfo">
            <div class="videoLeft">   
            <div class="items upBottom">
                <h3>视频信息</h3>
            </div>
            <div class="space20"></div>
            <div class="items">
                <span class="meta-title f_14">标题：</span>
                <input type="text" style="width:548px;" value="默认视频名称" name="title" class="form_input" >
                <div style="display:none" class="qtips qtips_lt qtips-title">
                    <div class="handler handler-qtips"></div>
                    <div class="arrow"></div>
                    <div class="content">
                        <p></p>
                        <div class="con_tips">
                            用一句话概括视频在讲什么故事, 简明扼要的标题会使你的视频更容易被搜索到，建议不要使用无意义或难于理解的文字。
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="error error-title" style="display: none;"></div>
            <div class="space20"></div>
            <div style="z-index:100" class="textareaItems">
                <span class="f_14">简介：</span><textarea style="overflow:hidden" name="description" class="form_input" ></textarea>
                
            </div>
            <div class="space20"></div>
            <div style="z-index:92" class="items">
                <span class="f_14">分类：</span>
                    <select  name='class' style='width:560px;height:30px;line-height:25px'>
                        <option value='1'>文学</option>
                        <option value='2'>数学</option>
                        <option value='3'>语言</option>
                        <option value='4'>物理</option>
                        <option value='5'>化学</option>
                        <option value='6'>生物</option>
                        <option value='7'>历史</option>
                        <option value='8'>地理</option>
                        <option value='9'>政治</option>
                        <option value='10'>计算机科学</option>
                        <option value='11'>哲学</option>
                        <option value='12'>法学</option>
                        <option value='13'>社会学</option>
                        <option value='14'>商业</option>
                        <option value='15'>传媒</option>
                        <option value='16'>经济学</option>
                        <option value='17'>医学</option>
                        <option value='18'>艺术学</option>
                        <option value='19'>工学类</option>
                        <option value='20'>理学类</option>
                        <option value='21'>农学</option>
                        <option value='22'>军事学</option>
                        <option value='23'>管理学</option>
                        <option value='24'>教育学</option>
                        <option value='25'>宗教学</option>
                        <option value='26'>心理学</option>
                        <option value='27'>学校&机构</option>
                    </select>
            </div>
            <div class="space20"></div>

            <div style="z-index:92" class="items">
                <span class="f_14" style="width: 80px;">封面图：</span>
                    <input type='file' name='pic'/>
            </div>
            <div class="space20"></div>

           
            </div>
            
            
        <div class="clear"></div>
        </div>    
        <!--videoInfo end-->

        <div class="clear"></div>
        <div class="line_dot"></div>

        <!--saveBtn start-->
        <div class="saveBtn">
            <div class="items">
                <div class="form_btn form_btn_l form_btnmaj_l meta-save">
                    <span class="form_btn_text">上&#12288;传</span>
                    <input type='submit' id='but' style='display:none'></input>
                </div>
            </div>
        </div>
</div>
</form>

			</div>
			<!-- 主体结束 -->

			<!-- 底部 -->
			<div class="s_miniFooter">
    <div class="footerBox">
        <div class="copyright">
            Copyright&copy;2020 师者 shizhe.com 版权所有 
            <a target="_blank" href="/index.php/Home/Upload/upload-provision.html">反盗版盗链声明</a>
            <a target="_blank" href="">京ICP证060288号</a>
            <a target="_blank" href="">
                <span title="经营性网站备案" class="icp"></span>
            </a>
        </div>
    </div>
</div>
			<!-- 底部结束 -->
	<script type="text/javascript">
	    $('.form_btn_text').click(function(){
	        $('#but').click();
	    });
	</script>
</body>
</html>