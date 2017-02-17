<?php
    header("Content-type:text/html;charset=utf-8");
	$p_title=$_POST["p_title"];
	$p_content=$_POST["p_content"];
	$post=mysql_connect("localhost","root","") or die("数据库连接出错1".mysql_error());
	mysql_select_db("baidu_postbar",$post) or die("数据库连接出错2".mysql_error());
	mysql_query("set names 'utf8'") or die("数据库连接出错3".mysql_error());
	$post_name=$_SESSION["u_name"] or die("数据库连接出错4".mysql_error());
	$u_id=$_SESSION["id"];
	$query=mysql_query("insert into post(u_id,p_title,p_content,p_time) values($u_id,'$p_title','$p_content',now())") or die("数据库连接出错6".mysql_error());
	mysql_close($post) or die("数据库连接出错7".mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript">
	setTimeout(function(){
	    window.location.href="postbar.php";
	},0);
</script>
</head>
<body>

</body>
</html>