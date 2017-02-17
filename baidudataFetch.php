<?php
//获取网页数据
header("Content-Type:text/html;charset=utf-8");
//$handle=fopen("http://tieba.baidu.com/f?kw=html5&ie=utf-8&pn=100","r");
//$str=stream_get_contents($handle,1024*1024);
//fclose($handle);

//$handleFile=fopen("E:\PHP\baidudata\postdata.txt","w");
//fwrite($handleFile,$str);
//fclose($handleFile);
//获取网页数据并写入文档中
//function fetchFile($url,$addr){
//    $handle=fopen($url,"r");
//    $str=stream_get_contents($handle,1024*1024);
//    fclose($handle);
//    $handleFile=fopen($addr,"w");
//    fwrite($handleFile,$str);
//    fclose($handleFile);
//} 
//获取网页数据并返回需要获取的数据;
//function fetchFile($url){
//    $handle=fopen($url,"r");
//	$str=stream_get_contents($handle,1024*1024);
//	fclose($handle);
//    return $str;
//} 
//$urls=array();
//for($i=0;$i<118;$i++){
//	$j=$i*50;
//	$urls[$i]="http://tieba.baidu.com/f?kw=html5&ie=utf-8&pn=$j";
//}
//$titles=array();$authors=array();$contents=array();
//for($i=0;$i<count($urls);$i++){
//	$titleModel="/<a href=\"\/p\/[0-9]{6,}\" title=\"(.*)\" target=\"_blank\" class=\"j_th_tit\">/U";
//	$authorModel="/<span.*title=\"主题作者:(.*)\".*>/U";
//	$contentModel="/<div class=\"threadlist_abs threadlist_abs_onlyline\">(.*)<\/div>/U";
//	preg_match_all($titleModel,fetchFile($urls[$i]),$title);
//	preg_match_all($authorModel,fetchFile($urls[$i]),$author);
//	preg_match_all($contentModel,fetchFile($urls[$i]),$content);
//	$titles[$i]=$title[1];
//	$authors[$i]=$author[1];
//	$contents[$i]=$content[1];
//}
//print_r($authors);
//<a data-field="{}" class="j_user_card  " href="" target="_blank">甜甜的杨梅活宝</a>
//<a class="j_click_stats" href="" target="_blank" data-locate="f">大皇帝</a>
//$handleFile=fopen("E:\PHP\baidudata\title.txt","w");
//fwrite($handleFile,$titles);
//fclose($handleFile);
//$handleFile=fopen("E:\PHP\baidudata\author.txt","w");
//fwrite($handleFile,$authors);
//fclose($handleFile);
//$handleFile=fopen("E:\PHP\baidudata\content.txt","w");
//fwrite($handleFile,$contents);
//fclose($handleFile);
//$handleFile=fopen("E:\PHP\baidudata\postdata.txt","w");
//fwrite($handleFile,$strs);
//fclose($handleFile);
//
//<a href="/p/4308945962" title="人生有多少机会被错过" target="_blank" class="j_th_tit">人生有多少机会被错过</a>
//
//<span class="tb_icon_author no_icon_author" title="主题作者: 初生的牛犊1319" data-field="{&quot;user_id&quot;:2267848500}">
//
//<div class="threadlist_abs threadlist_abs_onlyline">上世纪70年代初，回祖籍老家，那时爷爷还健在，我在他老屋厅堂的条桌上看见一个半米高的瓷花瓶，看着</div>

//获取网页中的分页链接
//"www.tieba.baidu.com/f?kw=html5&ie=utf-8&pn=50"
//<a href="/f?kw=html5&ie=utf-8&pn=100">
//$model="/href=\"(\/f\?kw=html5&ie=utf-8&pn=[0-9]{2,})\"/";
$titleModel="/\[[0-9]{1,}\] => (.*)/U";
$handleTitle=fopen("E:\PHP\baidudata\title.txt","r");
$strTitle=fread($handleTitle,filesize("E:\PHP\baidudata\title.txt"));
fclose($handleTitle);
preg_match_all($titleModel,$strTitle,$title);
$conn=mysql_connect("localhost","root","");
mysql_select_db("baidu_postbar",$conn);
mysql_query("set names 'utf8'");
for($i=0;$i<count($title);$i++){
	
}
//
?>