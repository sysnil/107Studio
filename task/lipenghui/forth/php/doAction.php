<?php
require_once "common.php";
header('content-type:text/html;charset=gb2312');
$username=$_POST['username'];
$username=$mysqli->escape_string($username);
$password=md5($_POST['password']);
$act=$_GET['act'];
$id=$_GET['id'];
$in=$_GET['in'];
//���ݲ�ͬ������ɲ�ͬ����
switch($act){
    case 'login':
        // ��¼
        $sql0="select account,password from sadmin where password='{$password}' and account='{$username}'";
        $res0=$mysqli->query($sql0);
        if($res0->num_rows>0){
            echo "<script type='text/javascript'>
            location.href='userList.php?username={$username}';
            </script>";
        }
        $sql="select account,password from user where password='{$password}' and account='{$username}'";
        $res=$mysqli->query($sql);
        if($res->num_rows>0){
            session_start();
            $_SESSION['account']=$username;
            echo "<script type='text/javascript'>
            location.href='cuser.php?username={$username}';
            </script>";
            exit;
        }
        else{
            echo "<script type='text/javascript'>
            alert('�������');
            location.href='login.php';
            </script>";
            exit;
        }
        break;
    case 'addUser':
        //echo '����û��Ĳ���';
        $sql2="select account from user where account='{$username}'";
        $res2=$mysqli->query($sql2);
        if($res2->num_rows>0){
            echo "<script type='text/javascript'>
			alert('���û����Ѿ����ڣ���һ������');
			location.href='login.php';
			</script>";
            exit;
        }
        $sql="insert into user(account,password) values('{$username}','{$password}')";
        $res=$mysqli->query($sql);
        if($res){
            $insert_id=$mysqli->insert_id;
            session_start();
            $_SESSION['account']=$username;
            echo "<script type='text/javascript'>
            alert('��ӳɹ�����վ�ĵ�{$insert_id}λ�û�');
            if($in==-1)
                location.href='userList.php';
            else
                location.href='cuser.php';
            </script>";
            exit;
        }else{
            echo "<script type='text/javascript'>
			alert('���ʧ��,���������');
			location.href='addUser.php';
			</script>";
            exit;
        }
        break;
    case 'delUser':
        //echo 'ɾ����¼'.$id;
        $id=$_GET['id'];
        if($id>0){
            $sql="DELETE FROM user WHERE id=".$id;
        }else{
            $sql="DELETE FROM user WHERE id=".(-1)*$id;
        }
        $res=$mysqli->query($sql);
        if($res){
            $mes='ɾ���ɹ�';
        }else{
            $mes='ɾ��ʧ��';
        }
        if($id>0)
            $url='login.php';
        else
            $url='userList.php';
        echo "<script type='text/javascript'>
        alert('{$mes}');
        location.href='{$url}';
        </script>";
        exit;
        break;
    case 'editUser':
        $id0=$_GET['id'];
        session_start();
        $k = $_SESSION['k'];
        unset($_SESSION['k']);
        $sql="update user SET account='{$username}',password='{$password}' WHERE id='{$id0}'";
        $res=$mysqli->query($sql);
        if($res){
            $mes='���³ɹ�';
        }else{
            $mes='����ʧ��';
        }
        echo "<script type='text/javascript'>
        alert('{$mes}');
        if($k>0)
            location.href='userList.php?username={$username}';
        else
            location.href='cuser.php?username={$username}';
        </script>";
        exit;
        break;
}
