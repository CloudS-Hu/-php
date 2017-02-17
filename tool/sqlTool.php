<?php
//自动连接数据库,执行完自动关闭数据库,包括查询方法query($sql)\更改方法modify($sql)
    header("Content-Type:text/html;charset=utf-8");
	class sql{
	    public $conn;
	    function __construct(){
	    	$this->conn=mysql_connect("localhost","root","");
	    	mysql_select_db("baidu_postbar",$this->conn);
	    	mysql_query("set names 'utf8'");
	    }
	    //执行删除更改插入操作
	    function modify($sql){
	    	mysql_query($sql,$this->conn);
	    }
	    //执行查询操作
	        function query($sql){
	    	return mysql_query($sql,$this->conn);
	    }
	    function close(){
	    	mysql_close($this->conn);
	    }
	    function __destruct(){
	    	$this->close();
	    }   	
	}
?>