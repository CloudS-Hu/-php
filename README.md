# baidu-postbar
项目开发说明书
一、概要
--
* 项目名称：百度贴吧
* 项目开发人员：胡云南
* 项目完成时间：2014年1月26 日
* 技术：CSS+DIV,HTML,JavaScript,Ajax,json,MySQL,PHP

二、项目功能介绍
--
该贴吧项目包含如下操作：
  用户注册、登录、注销、发帖、回帖、评论功能以及帖子分页；
三、数据库设计
--
1. 创建数据库，并根据业务需要建表，经分析需要如下几张表：
     用户表：user
     发帖表：post
     回帖表：thread
     评论表：comment
2. 表结构展示
（1）user表，如图1-1所示：
 
图1-1  用户表user
（2）post表，如图1-2所示：
      
图1-2 发帖表 post
（3）thread表，如图1-3所示：
  
图1-3 回帖表 thread
（4）comment表，如图1-4所示：
  
图1-4 评论表 comment

3. 表关联说明：
（1）根据业务逻辑，post表中u_id与user表中的u_id关联；
（2）thread表中的p_id与post表中的p_id关联；
（3）comment表中t_id与thread表中的t_id关联，comment表中的u_id与user表中的u_id关联；

四、项目功能展示与说明
--

1. 注册功能：此功能运用MySQL、PHP、Javascript、Ajax等技术实现	了以下效果：
    （1）在点击注册时运用JavaScript及Ajax、正则等技术对不符合规范的用户名、密码、手机和邮箱进行过滤，如图2-1所示：
                   
 图2-1

（2）当用户注册成功后运用$_session[“u_name”]显示当前用户的用户名，并且切换为登录状态,如图2-2所示：
 
         
                 
图2-2

2. 登录功能：此功能运用javascript等技术实现了以下效果：
（1）在点击注册时运用JavaScript技术判断用户名或密码不能			为空，如图3-1所示：
                      
图3-1
 	（2）当用户输入用户名和密码后运用PHP+MySQL判断用户名或密码是否正确，如果正确则提示“登录成功！”，并跳回首页，如图3-2所示，如果失败则提示“用户名或密码有误”并返回登录界面，如图3-3所示；
 
图3-2
 
图3-3
（3）当用户注册成功后运用$_session[“u_name”]显示当前用		户的用户名，如图3-4所示：
 
              图3-4
              
3. 发帖功能：运用php和js实现，如图4-1、4-2所示：
      
图4-1

 
图4-2

4. 回帖功能：通过点击发帖表中帖子的主题访问回帖页，如果5-1、5-2所示：
 
图5-1
（1）运用PHP和JS实现回帖功能，如图5-2、5-3所示：
                     
图5-2

             
图5-3

6. 评论功能,运用PHP和JS的Ajax+Json实现,如图6-1所示：
 
7. 注销：运用 PHP+JS实现，如图7-1所示：
                 

图7-1
   
                                         
