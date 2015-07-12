<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-24 19:38:07
 * @version $Id$
 */
$searchtype=$_POST["searchtype"];
$keyword=trim($_POST['key']);//去除字符串首位空格
echo $searchtype;
echo $keyword;
if(!$searchtype||!$keyword){
	echo "please entered the search details";
	exit;
}
//判断是否已经开启自动转义
if(!get_magic_quotes_gpc()){
	$searchtype=addslashes($searchtype);//认为将一些符号转移
	$keyword=addslashes($keyword);
}
echo "jjj";
// phpinfo();

$db=mysqli_connect("localhost","root","root","books");//连接数据库

if(mysqli_connect_error()){
	echo "error:could not connect to database";
	exit;
}else{
	echo "connect success";
}


$query="select * from books where ".$searchtype."=".$keyword;
$stm=$db->prepare($query);
$stm->bind_result($isbn,$title,$price,$author);
$stm->execute();

echo $stm->num_rows;

?>