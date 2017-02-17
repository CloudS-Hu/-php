<?php 
	header("Content-type:text/html;charset=utf-8");
	$u_name=$_POST["u_name"];
	$u_pswd=$_POST["u_pswd"];
	$user=mysql_connect("localhost","root","");
	mysql_select_db("baidu_postbar",$user);
	$query=mysql_query("select * from user where u_name='$u_name' and u_pswd='$u_pswd'");
	$query_id=mysql_query("select u_id from user where u_name='$u_name' and u_pswd='$u_pswd'");
	$result_id=mysql_fetch_array($query_id);
	$_SESSION["id"]=$result_id[0];
	$isHaving=false;
	while($result=mysql_fetch_array($query)){
		$isHaving=true;
	}
	mysql_close($user);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登录状态页面</title>
<script type="text/javascript">
    setTimeout(function(){
        window.location.href="../postbar.php";
    },2000);
</script>
</head>
<body>
     <div style="margin-left:200px;font-size:50px;color:red;font-weight:bolder;margin-top:300px;">
          <?php if($isHaving==true){
          	   $_SESSION["u_name"]=$u_name;
          	   echo "登录成功,即将跳转到原页面!";
          }else{
          	   echo "用户名或密码错误,请重新登录!";
          }
          ?>
     </div>
</body>
</html>