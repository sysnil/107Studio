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
    <!--ͷ��-->
    <div class="content-header clearfix">
        <a href="javascript:;" class="current">��¼</a>
        <a href="javascript:;">ע��</a>
    </div>
    <!--����-->
    <div class="content-body">
        <div class="dom" style="display: block;">
            <form action="doAction.php?act=login" method="post">
                <div class="s1">
                    <h4>�˺�</h4>
                    <input name="username" id="" type="text" placeholder="�û���/�ֻ�/����">
                </div>
                <div class="s1">
                    <h4>����</h4>
                    <input name="password" id="" type="password" placeholder="����������">
                </div>
                <div class="s2">
                    <input type="checkbox">
                    <span>��ס����</span>
                </div>
                <input type="submit" class="btn" value="��&nbsp;¼">
                <p style="text-align:center"><a href="../index.html">������ҳ</a></p>
            </form>

        </div>
        <div class="dom">
             <form action="doAction.php?act=addUser&in=1" method="post">
                <div class="s1">
                    <h4>�˺�</h4>
                    <input name="username" id="" type="text" placeholder="�û���/�ֻ�/����" required='required'>
                </div>
                <div class="s1">
                    <h4>����</h4>
                    <input name="password" id="" type="password" placeholder="����������" required='required'>
                </div>
                <input type="submit" class="btn" value="ע&nbsp;��">
            </form>
        </div>
    </div>
</section>
<script>
    window.onload = function () {
        // 1.1 ��ȡ��Ҫ�ı�ǩ
        let as = document.getElementsByClassName('content-header')[0].getElementsByTagName('a');
        let contents = document.getElementsByClassName('dom');

        // 1.2 ����
        for (let i = 0; i < as.length; i++) {
            // 1.2.1 ȡ����������
            let a = as[i];
            a.id = i;

            // 1.2.2 ���������ƶ��¼�
            a.onclick = function () {
                // �����е�a��class�����
                for (let j = 0; j < as.length; j++) {
                    as[j].className = '';
                    contents[j].style.display = 'none';
                }

                // ���õ�ǰa��class
                this.className = 'current';
                // ��contents������ȡ����Ӧ�ı�ǩ
                contents[this.id].style.display = 'block';
            }

        }
    }
</script>
</body>
</html>