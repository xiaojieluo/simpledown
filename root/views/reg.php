<style>
body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,form,fieldset,legend,button,input,textarea,th,td {
margin:0;
padding:0;
}

body,button,input,select,textarea {
font:12px/1.5 tahoma,arial,\5b8b\4f53,sans-serif;
text-align:justify;
text-justify:inter-ideograph;
word-break:break-all;
word-wrap:break-word;
}

h1,h2,h3,h4,h5,h6 {
font-size:100%;
}

address,cite,dfn,em,var,i,u {
font-style:normal;
}
code,kbd,pre,samp {
font-family:courier new,courier,monospace;
}

small {
font-size:12px;
}

ul,ol {
list-style:none;
}

sup {
vertical-align:text-top;
}

sub {
vertical-align:text-bottom;
}

legend {
color:#000;
}

fieldset,img {
border:0;
}

button,input,select,textarea {
font-size:100%;
margin:0;
padding:0;
}

table {
border-collapse:collapse;
border-spacing:0;
}

caption,th {
text-align:left;
}

.ovh {
overflow:hidden;
}

.l {
float:left;
}

.r {
float:right;
}

.cur {
cursor:pointer;
}

.c_b {
content:".";
display:block;
height:0;
clear:both;
zoom:1;
font-size:0;
overflow:hidden;
visibility:hidden;
}

.c_b2 {
clear:both;
}

.dn {
display:none;
}

.dis {
display:block;
}

.b {
font-weight:700;
}

body {
behavior:url(css/hover_htc.htc);
font-family:"Microsoft YaHei",宋体;
color:#333;
}

.login ul {
padding-top:10px;
border-top:1px solid #fff;
}

.login ul a {
color:#005cb1;
}

.login .id input,.login .pw input,.in_id,.in_mo,.reg_input,.reg_input_pic {
background-color:#FFF;
border:1px solid #d5cfc2;
font-size:14px;
font-weight:700;
vertical-align:middle;
}

.login .id input,.login .pw input {
width:170px;
height:30px;
line-height:30px;
margin:0 5px 5px 0;
padding:0 5px;
}

.login .id input:hover,.login .pw input:hover,.in_id:hover,.in_mo:hover,.reg_input:hover,.reg_input_pic:hover {
border:1px solid #005cb1;
background-color:#F2FAFF;
}

.l_button,.r_button {
background:url(dist/images/login_button.png) no-repeat;
width:118px;
height:39px;
border:none;
cursor:pointer;
display:block;
float:left;
text-indent:-9000px;
}

.l_button {
background-position:0 -60px;
}

.r_button {
background-position:-138px -60px;
margin-right:4px;
}

.r_button:hover {
background-position:-138px 0;
}

.f_reg_but {
margin:10px 0 0 115px;
}

.reg {
width:460px;
font-size:14px;
line-height:25px;
overflow:hidden;
}

.reg dl {
padding-left:10px;
font-size:14px;
}

.reg dl dd {
padding:3px 0;
}

.reg .title {
width:100px;
display:inline-block;
text-align:right;
padding-right:10px;
}

.reg_input_pic {
width:80px;
}

.in_pic_s {
margin-left:83px;
}

.reg .img {
position:absolute;
}

.onShow,.onFocus,.onError,.onCorrect,.onLoad {
background:url(dist/images/reg_bg.png) no-repeat 3000px 3000px;
padding-left:30px;
font-size:12px;
height:25px;
width:124px;
display:inline-block;
line-height:25px;
vertical-align:middle;
overflow:hidden;
margin-left:6px;
}

.onShow {
color:#999;
padding-left:0;
}

.onFocus {
background-position:0 -30px;
color:#333;
}

.onError {
background-position:0 -60px;
color:#333;
}

.onCorrect {
background-position:0 0;
text-indent:-9000px;
}

.reg_m {
margin-left:90px;
}

.clew_txt {
display:inline-block;
font-size:12px;
padding:7px 0 0 15px;
}

.id input,.pw input,.in_id,.in_mo,.reg_input,.reg_input_pic {
_behavior:url(js/Round_htc.htc);
-moz-border-radius:4px;
-webkit-border-radius:4px;
border-radius:4px;
height:25px;
}

.user_button a,.pay_but {
_behavior:url(js/Round_htc.htc);
-moz-border-radius:100px;
-webkit-border-radius:100px;
border-radius:100px;
}

#one1,#one2 {
display:block;
background-color:#e9eed8;
text-align:center;
clear:both;
cursor:pointer;
padding:5px 0;
}

#one1:hover,#one2:hover {
background-color:#d4dfb0;
}

#one1 span,#one2 span {
color:red;
}

.l_button:hover,.onLoad {
background-position:0 0;
}

.reg dl dt,#one2 {
margin-top:15px;
}

#tips{
float:left;
margin:2px 0 0 110px;
}
#tips span {
float:left;
width:40px;
height:20px;
color:#fff;
overflow:hidden;
background:#ccc;
margin-right:2px;
line-height:20px;
text-align:center;
}
#tips.s1 .active{background:#f30;}
#tips.s2 .active{background:#fc0;}
#tips.s3 .active{background:#cc0;}
#tips.s4 .active{background:#090;}
</style>
<div class="container">       
<div class="hero-unit">
    <div class="reg">
    <?php 
      echo form_open('reg');
    ?>
      	<dl>
      		<dt class="f14 b">帐户基本信息</dt>
        	<dd><span class="title">登录账号：</span><input type="text" class="reg_input" name="username" value="<?php echo set_value('username'); ?>" required="true" maxlength="12" autofocus="true"><?php echo form_error('username'); ?></dd>
        	<dd><span class="title">昵称：</span><input type="text" class="reg_input" name="displayname" maxlength="5" value="<?php echo set_value('displayname'); ?>" required="true"><span class="onshow"><?php echo form_error('displayname'); ?></span></dd>
      		<dd></dd>
      	</dl>
      	<dl>
            <dt class="f14 b">帐户安全设置</dt>
      		<dd><span class="title">登录密码：</span><input type="password" class="reg_input" name="password" maxlength="16" required="true"><span class="onshow"><?php echo form_error('password'); ?></span></dd>
      		<dd><span class="title">确认登录密码：</span><input type="password" class="reg_input" name="passconf" maxlength="16" required="true"><span class="onshow"><?php echo form_error('passconf'); ?></span></dd>
      		<dd><span class="title">邮箱地址：</span><input type="email" class="reg_input" name="email" maxlength="64" value="<?php echo set_value('email'); ?>" required="true"><span class="onshow"><?php echo form_error('email'); ?></span></dd>
      		<dd><span class="title">QQ 号码：</span><input type="text" class="reg_input" name="qq" maxlength="15" value="<?php echo set_value('qq'); ?>" required="true"><span class="onshow"><?php echo form_error('qq'); ?></span></dd>
      	</dl>
      	<div class="f_reg_but"><input type="submit" value="免费注册" class="r_button"/></div>
        
    </form> 

    </div>
</div>
</div>