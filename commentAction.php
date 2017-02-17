<?php
	$c_content=$_POST["c_content"];
	$u_id=$_SESSION["id"];
	$t_id=$_GET["t_id"];
	$comment=mysql_connect("localhost","root","");
	mysql_query("set names 'utf8';");
	mysql_select_db("baidu_postbar",$comment);
	$query=mysql_query("insert into comment(u_id,t_id,c_content,c_time) values('$u_id','$t_id','$c_content',now());");
	mysql_close($comment);
?>
<?php
    $t_id=$_GET["t_id"];
    $post_id=$_GET["post_id"];
	$comment=mysql_connect("localhost","root","");
	mysql_query("set names 'utf8'");
	mysql_select_db("baidu_postbar",$comment);
?>
<?php $c_query=mysql_query("select u.u_name,c.c_content,c.c_time from user u,comment c where c.u_id=u.u_id and c.t_id='$t_id'");?>
<?php $i=0;?>
<?php while($c_result=mysql_fetch_array($c_query)){?>
		<div style="border-bottom: 1px dashed rgb(222, 222, 222);">
			<div class="comment_reply1"><span style="font-weight: bolder; color: darkgreen;"><?php echo $c_result[0]?>:</span><span><?php echo $c_result[1]?></span></div>
			<div class="comment_reply2"><span style="font-size: 10px; color: rgb(163, 160, 150);"><?php echo $c_result[2]?></span>
<!--			<button id="comment<?php echo $j.$i;?>" onclick="comment_reply(this)">回复</button>-->
			</div>
		</div>
<?php $i++;}?>
<?php mysql_close($comment);?>