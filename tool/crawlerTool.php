<?php
//方法一:getData()=>抓取网页$url内容$str
//方法二:getMatchData($model)=>获取根据正则表达式$model匹配后的数组$arr(包含方法一)
//方法三:getMatchIntoDB($model,$sql)=>根据创建对象时传入的网址$url获取到正则$model匹配后的内容,
//       并根据$sql语句插入到数据库中(包含方法二)
//       $sql参数=>语句格式"insert into tablename(colname1,colname2,...,colnamen) values(data1,data2,...,datan)";
header("Content-Type:text/html;charset=utf-8");
include 'sqlTool.php';
class crawler{
	public $url;
	function __construct($url){
		$this->url=$url;
	}
	function getData(){   
		$handle=fopen($this->url,"r");
		$str=stream_get_contents($handle,1024*1024);
		fclose($handle);
		return $str;
	}
	function getMatchData($model){
		$str=$this->getData();
		preg_match_all($model,$str,$arr);
		array_shift($arr);
		return $arr;
	}
	function getMatchIntoDB($model,$sql){
		$arr=$this->getMatchData($model);
		$newArr=array();		
		for($i=0;$i<count($arr[0]);$i++){
			for($j=0;$j<count($arr);$j++){
				$arr1[$j]='"'.$arr[$j][$i].'"';
			}
			array_push($newArr,$arr1);
		}
		$Pattern=array();
		for($i=0;$i<count($newArr[0]);$i++){
			$Pattern[$i]='/data'.($i+1).'/';
		}
		$myQuery=new sql();
		for($i=0;$i<count($newArr);$i++){
			$newSql=preg_replace($Pattern,$newArr[$i],$sql);
			$myQuery->modify($newSql);
		}
	}
}
//实例::::::
//$url="http://tieba.baidu.com/f?kw=html5&ie=utf-8&pn=0";
//$model="/<a href=\"\/p\/([0-9]{6,})\" title=\"(.*)\" target=\"_blank\" class=\"j_th_tit\">/U";
//$sql="insert into test(a,b) values(data1,data2);";
//$baidu=new crawler($url);
//$baidu->getMatchIntoDB($model, $sql);
//实例::::::
$model="/<a href=\"\/p\/.*\" title=\"(.*)\" target=\"_blank\" class=\"j_th_tit\">.*<a data-field=.*class=\"j_user_card.*target=\"_blank\">.*<\/a>.*<div class=\"threadlist_abs threadlist_abs_onlyline\">(.*)<\/div>/U";
$url="http://tieba.baidu.com/f?kw=html5&ie=utf-8&pn=300";
$sql="insert into post(p_title,p_content) values(data1,data2);";
$baidu=new crawler($url);
$baidu->getMatchIntoDB($model, $sql);


?>