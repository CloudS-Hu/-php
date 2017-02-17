 <?php
        
    $u_name=$_POST["u_name"];
	$user=mysql_connect("localhost","root","");
	mysql_select_db("baidu_postbar",$user);
	mysql_query("set names 'utf8'");	
	$query=mysql_query("select u_name from user where u_name='$u_name';");
	$isRepeat=false;
	while($result=mysql_fetch_array($query)){
		$isRepeat=true;
	}	
	mysql_close($user);
	if($isRepeat==true){
		echo"用户名重复";
	}else{
		echo"用户名可用";
	}
?>