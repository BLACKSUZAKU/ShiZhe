<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>实名认证</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/realname.css"/>
    <script type="text/javascript" src='/Public/Home/js/index.js'></script>
    <script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
  </head>
  
  <body>
  <div class="top">
           <img style="" alt="实名认证" src="/Public/Home/pic/lvli3.jpg" />
  </div>
  <center>
     <p class="p2">教育银行致力于维护合法、真实、有效的互联网平台,为了更好地保障您的合法权益,<br>请先阅读《教育银行用户实名认证协议》,认真填写以下信息</p>
          <br>
          <form action="/index.php/Home/Index/add" method="post">
          <table style="width:600px; height: auto; border-collapse:separate; border-spacing:30px; margin-left: 110px;">
         
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">真实姓名</td><td><input class="realname1" name="realname" type="text" /><span style="font-size:10px; color: red;">*信息审核成功后,名字不可修改</span></td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">性别</td><td><input id="man" type="radio"  checked="checked" name="sex" value="1" />男<input id="woman" type="radio"  name="sex" value="0" />女</td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">证件类型</td><td><select class="select" name="cardtype">
          							              <option value="1">中华人民共和国居民身份证</option>
                                      <option value="2">台湾往来大陆居民身份证</option>
                                      <option value="3">港澳往来大陆居民身份证</option>
                                      <option value="4">护照</option></select></td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">证件号码</td><td><input class="realname1" name="number" type="text" /></td>
          		</tr>
          		<!-- <tr style=" width:600px; height: 30px;">
          			<td style="float: right;">证书图片</td><td><img id="image" class="img1" src="images/edubank/uploadFile.png">
        <input type="file" name="files" accept="image/*" onchange="changImg(event)" ></td>
          		</tr> -->
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">手机号</td><td><input class="realname1" name="phone" type="text" /></td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">备注</td><td><textarea class="beizhu1" name="remark" rows="3" cols="26"></textarea></td>
          		</tr>
          		
          </table>
          <input class="submit" style="margin-left:-17px;" type="submit" value="提交" /><input class="reset" type="reset" value="取消" />	
          </form>
  </center>
  </body>
  <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
  　<script>  
        function changImg(e){ 
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files.item(i);
                //验证是否为图片，不是就跳出循环
                if (!(/^image\/.*$/i.test(file.type))) {
                    alert("不是图片！")
                    continue; 
                }
                //实例化FileReader API  
                var freader = new FileReader();  
                freader.readAsDataURL(file);  
                freader.onload = function(e) {  
                    $("#image").attr("src",e.target.result);  //显示图片
                }  
            }  
        }  
     </script>
</html>