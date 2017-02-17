<?php
  $u_name=$_POST["u_name"];
  $u_pswd=$_POST["u_pswd"];
  $u_phone=$_POST["u_phone"];
  $u_email=$_POST["u_email"];
  $user=mysql_connect("localhost","root","");
  mysql_query("set names 'utf8'");
  mysql_select_db("baidu_postbar",$user);
  mysql_query("insert into user(u_name,u_pswd,u_phone,u_email) 
  values('$u_name','$u_pswd','$u_phone','$u_email')");
  $id=-1;
  $_SESSION["id"]=$id;
  $id=mysql_insert_id($user);
  if($id>0){
  	$_SESSION["u_name"]=$u_name;
  	$_SESSION["id"]=$id;
  }
  mysql_close($user);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册成功页面</title>
<script type="text/javascript">
    setTimeout(function(){
        window.location.href="postbar.php";
        },2000);
</script>
</head>
<body>
     <div style="margin-left:200px;font-size:50px;color:red;font-weight:bolder;margin-top:300px;">注册成功,即将跳转到主页</div>
</body>
</html>