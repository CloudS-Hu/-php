<?php
    header("Content-type:text/html;charset=utf-8");
    $u_id=$_GET["u_id"];
    $p_id=$_GET["post_id"];
    $t_content=$_POST["t_content"];
    $thread=mysql_connect("localhost","root","");
    mysql_query("set names 'utf8'");
    mysql_select_db("baidu_postbar",$thread);
    $query=mysql_query("insert into thread(u_id,p_id,t_content,t_time) values('$u_id','$p_id','$t_content',now());");
    mysql_close($thread);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>threadAction</title>
	<script type="text/javascript">
	    setTimeout(function(){
            window.location.href="post_page.php?post_id=<?php echo $p_id ?>";
	    },0);
	</script>
</head>
<body>

</body>
</html>