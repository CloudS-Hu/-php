<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<script type="text/javascript">
		var isName=false;
	    var isPswd=false;
	    var isPhone=false;
	    var isEmail=false;
		    window.onload=function(){
		    	document.getElementById("u_name").onblur=function(){
				    if(this.value.length>=20){
					    document.getElementById("u_name1").innerHTML="您输入的用户名太长";
					    document.getElementById("u_name1").style.color="red";
					    isName=false;
					    }else if(this.value==""){
					    	document.getElementById("u_name1").innerHTML="用户名不能为空";
						    document.getElementById("u_name1").style.color="red";
						    isName=false;
						}else{
							var xmlHttp=new XMLHttpRequest();
							xmlHttp.open("POST","u_name_judge.php");
							xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
							xmlHttp.send("u_name="+this.value);
							xmlHttp.onreadystatechange=function(){
								if(xmlHttp.readyState==4){
									var xr=xmlHttp.responseText;
									document.getElementById("u_name1").innerHTML=xmlHttp.responseText;
									if(xr==" 用户名可用"){
										document.getElementById("u_name1").style.color="green";
										isName=true;
									}else{
										document.getElementById("u_name1").style.color="red";
										isName=false;
									}
								}
							}
						}
					
				}
		    	document.getElementById("u_pswd").onblur=function(){
				    if((this.value.length<6||this.value.length>20)&&this.value.length>0){
					    this.value="";
					    document.getElementById("u_pswd1").innerHTML="密码长度在6~20之间";
					    document.getElementById("u_pswd1").style.color="red";
					    isPswd=false;
					    }else if(this.value==""){
					    	document.getElementById("u_pswd1").innerHTML="密码不能为空";
						    document.getElementById("u_pswd1").style.color="red";
						    isPswd=false;
						}else{
					    	document.getElementById("u_pswd1").innerHTML="ok";
						    document.getElementById("u_pswd1").style.color="darkgreen";
						    isPswd=true;
						}
				    }
			    document.getElementById("u_email").onblur=function(){
				    if(escape(this.value).indexOf( "%u" )>=0){
					    this.value="";
				    	document.getElementById("u_email1").innerHTML="邮箱格式有误";
					    document.getElementById("u_email1").style.color="red";
					    isEmail=false;
					    }else if(this.value==""){
					    	document.getElementById("u_email1").innerHTML="邮箱不能为空";
						    document.getElementById("u_email1").style.color="red";
						    isEmail=false;
					    }else{
					    	document.getElementById("u_email1").innerHTML="ok";
						    document.getElementById("u_email1").style.color="darkgreen";
						    isEmail=true;
				        }
				    }
			    function isMobil(s) 
			    { 
			    var patrn=/^[+]{0,1}(\d){1,3}[ ]?([-]?((\d)|[ ]){1,12})+$/; 
			    if (!patrn.exec(s)) 
				    return false;
			    return true;
			    }
			    document.getElementById("u_phone").onblur=function(){
				    if(!isMobil(this.value)){
					    this.value="";
				    	document.getElementById("u_phone1").innerHTML="手机号码格式错误";
					    document.getElementById("u_phone1").style.color="red";
					    isPhone=false;
					    }else if(this.value==""){
					    	document.getElementById("u_phone1").innerHTML="手机号码不能为空";
						    document.getElementById("u_phone1").style.color="red";
						    isPhone=false;
					    }else{
					    	document.getElementById("u_phone1").innerHTML="ok";
						    document.getElementById("u_phone1").style.color="darkgreen";
						    isPhone=true;
				        }
				    }
			    };
			    function check(){
				    if(isName==true&&isPswd==true&&isPhone==true&&isEmail==true){
					    return true;
					}else{
					    alert("注册失败,请更改信息后重新注册");
				        return false;
				    }
				}
		</script>
	</head>
	<body>
	    <div style="margin:auto;width:500px;">
	        <h3>百度贴吧新用 户注册</h3>
		    <form action="postbar_register.php" method="post" onsubmit="return check()">
		        <span>用户名:</span><input type="text" name="u_name" id="u_name"/><span id="u_name1"></span><br><br>
		        <span>登录密码:</span><input type="password" name="u_pswd" id="u_pswd" /><span id="u_pswd1"></span><br><br>
		        <span>手机:</span><input type="text" name="u_phone" id="u_phone" /><span id="u_phone1"></span><br><br>
		        <span>邮箱:</span><input type="text" name="u_email" id="u_email" /><span id="u_email1"></span><br><br>
		        <input type="submit"  value="注册" ><br><br>
		    </form>
	    </div>
	</body>
</html>