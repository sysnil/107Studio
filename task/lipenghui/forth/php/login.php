<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>login</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<?php
header('content-type:text/html;charset=GB2312');?>
<section id="content">
    <!--头部-->
    <div class="content-header clearfix">
        <a href="javascript:;" class="current">登录</a>
        <a href="javascript:;">注册</a>
    </div>
    <!--内容-->
    <div class="content-body">
        <div class="dom" style="display: block;">
            <form action="doAction.php?act=login" method="post">
                <div class="s1">
                    <h4>账号</h4>
                    <input name="username" id="" type="text" placeholder="用户名/手机/邮箱">
                </div>
                <div class="s1">
                    <h4>密码</h4>
                    <input name="password" id="" type="password" placeholder="请输入密码">
                </div>
                <div class="s2">
                    <input type="checkbox">
                    <span>记住密码</span>
                </div>
                <input type="submit" class="btn" value="登&nbsp;录">
                <p style="text-align:center"><a href="../index.html">返回首页</a></p>
            </form>

        </div>
        <div class="dom">
             <form action="doAction.php?act=addUser&in=1" method="post">
                <div class="s1">
                    <h4>账号</h4>
                    <input name="username" id="" type="text" placeholder="用户名/手机/邮箱" required='required'>
                </div>
                <div class="s1">
                    <h4>密码</h4>
                    <input name="password" id="" type="password" placeholder="请输入密码" required='required'>
                </div>
                <input type="submit" class="btn" value="注&nbsp;册">
            </form>
        </div>
    </div>
</section>
<script>
    window.onload = function () {
        // 1.1 获取需要的标签
        let as = document.getElementsByClassName('content-header')[0].getElementsByTagName('a');
        let contents = document.getElementsByClassName('dom');

        // 1.2 遍历
        for (let i = 0; i < as.length; i++) {
            // 1.2.1 取出单个对象
            let a = as[i];
            a.id = i;

            // 1.2.2 监听鼠标的移动事件
            a.onclick = function () {
                // 让所有的a的class都清除
                for (let j = 0; j < as.length; j++) {
                    as[j].className = '';
                    contents[j].style.display = 'none';
                }

                // 设置当前a的class
                this.className = 'current';
                // 从contents数组中取出对应的标签
                contents[this.id].style.display = 'block';
            }

        }
    }
</script>
</body>
</html>