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

body {
behavior:url(css/hover_htc.htc);
font-family:"Microsoft YaHei",宋体;
color:#333;
}

.login .id input,.login .pw input,.in_id,.in_mo,.reg_input,.reg_input_pic {
background-color:#FFF;
border:1px solid #d5cfc2;
font-size:14px;
font-weight:700;
vertical-align:middle;
}

.reg {
width:460px;
font-size:14px;
line-height:25px;
overflow:hidden;
padding-left:50px;
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

.id input,.pw input,.in_id,.in_mo,.reg_input,.reg_input_pic {
_behavior:url(js/Round_htc.htc);
-moz-border-radius:4px;
-webkit-border-radius:4px;
border-radius:4px;
height:25px;
}
  /* Buttons */
.menu-toggle,
input[type="submit"],
input[type="button"],
input[type="reset"],
article.post-password-required input[type=submit],
.bypostauthor cite span {
    padding: 6px 10px;
    padding: 0.428571429rem 0.714285714rem;
    font-size: 11px;
    font-size: 0.785714286rem;
    line-height: 1.428571429;
    font-weight: normal;
    color: #7c7c7c;
    background-color: #e6e6e6;
    background-repeat: repeat-x;
    background-image: -moz-linear-gradient(top, #f4f4f4, #e6e6e6);
    background-image: -ms-linear-gradient(top, #f4f4f4, #e6e6e6);
    background-image: -webkit-linear-gradient(top, #f4f4f4, #e6e6e6);
    background-image: -o-linear-gradient(top, #f4f4f4, #e6e6e6);
    background-image: linear-gradient(top, #f4f4f4, #e6e6e6);
    border: 1px solid #d2d2d2;
    border-radius: 3px;
    box-shadow: 0 1px 2px rgba(64, 64, 64, 0.1);
}
.menu-toggle,
button,
input[type="submit"],
input[type="button"],
input[type="reset"] {
    cursor: pointer;
}
button[disabled],
input[disabled] {
    cursor: default;
}
.menu-toggle:hover,
button:hover,
input[type="submit"]:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
article.post-password-required input[type=submit]:hover {
    color: #5e5e5e;
    background-color: #ebebeb;
    background-repeat: repeat-x;
    background-image: -moz-linear-gradient(top, #f9f9f9, #ebebeb);
    background-image: -ms-linear-gradient(top, #f9f9f9, #ebebeb);
    background-image: -webkit-linear-gradient(top, #f9f9f9, #ebebeb);
    background-image: -o-linear-gradient(top, #f9f9f9, #ebebeb);
    background-image: linear-gradient(top, #f9f9f9, #ebebeb);
}
.menu-toggle:active,
.menu-toggle.toggled-on,
button:active,
input[type="submit"]:active,
input[type="button"]:active,
input[type="reset"]:active {
    color: #757575;
    background-color: #e1e1e1;
    background-repeat: repeat-x;
    background-image: -moz-linear-gradient(top, #ebebeb, #e1e1e1);
    background-image: -ms-linear-gradient(top, #ebebeb, #e1e1e1);
    background-image: -webkit-linear-gradient(top, #ebebeb, #e1e1e1);
    background-image: -o-linear-gradient(top, #ebebeb, #e1e1e1);
    background-image: linear-gradient(top, #ebebeb, #e1e1e1);
    box-shadow: inset 0 0 8px 2px #c6c6c6, 0 1px 0 0 #f4f4f4;
    border-color: transparent;
}
#adminmenuwrap {
background-color: #ECECEC;
border-color: #CCC;
position: relative;
float: left;
border-width: 0 1px 0 0;
border-style: solid;
width: 145px;
}
</style>
<div class="container">       
	<div class="hero-unit">
        <div id="adminmenuwrap">
            <a href="<?php echo site_url('system') ?>" class="menu-toggle">系统设置</a><br/>
            <a href="<?php echo site_url('system/type') ?>" class="menu-toggle">分类设置</a><br/>
            <a href="<?php echo site_url('system/tag') ?>" class="menu-toggle">标签设置</a><br/>
            <a href="<?php echo site_url('system/show') ?>" class="menu-toggle">显示设置</a><br/>
            <a href="<?php echo site_url('system/mupost') ?>" class="menu-toggle">批量发布</a><br/>
            <a href="<?php echo site_url('system/hbdxcc') ?>" class="menu-toggle">作者信息</a><br/>
        </div>
        <div class="reg">
        <dl>
            <dt class="f14 b">新增标签</dt>
            <form action="<?php echo base_url()."system/settag"; ?>" method="post" name="form1" id="form1">
            <dd><span class="title">新标签名称：</span><input class="reg_input" name="tag_name" id="tag_name" type="text"/></dd>
            <input type="submit" value="添加标签"/>
            </form> 
            <dd>    
                <dt class="f14 b">标签管理</dt>
                <table class='table'>
                    <tr>
                        <th>操作</th><th>名称</th>
                    </tr>
                    <?php foreach ($hbdx_baseinfo as $tag_item): ?>
                        <tr><td><a href="<?php echo base_url()."system/del_tag/".$tag_item['id'] ?>">删除</a></td><td><?php echo $tag_item['tag_name'] ?></td></tr>
                    <?php endforeach ?>
                </table>
            </dd>
        </dl>                            
        </div>
    </div>
</div>
