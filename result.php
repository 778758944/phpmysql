<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-24 19:38:07
 * @version $Id$
 */
$searchtype=$_POST["searchtype"];
$keyword=trim($_POST['key']);//去除字符串首位空格
if(!$searchtype||!$keyword){
	echo "please entered the search details";
	exit;
}
//判断是否已经开启自动转义
if(!get_magic_quotes_gpc()){
	$searchtype=addslashes($searchtype);//认为将一些符号转移
	$keyword=addslashes($keyword);
}
// echo "jjj";
// phpinfo();

$db=mysqli_connect("localhost","root","root","books");//连接数据库

if(mysqli_connect_error()){
	echo "error:could not connect to database";
	exit;
}else{
}

// print_r($db);
// echo "jaja";

$query="select * from books";
$result=$db->query($query);
$row=$result->fetch_assoc();
print_r($result)."<br/>";
print_r($row)."<br/>";
print_r(mysqli_fetch_fields($result));

//获取字段个数




$num=$result->num_rows;

echo "<p>number of books found:$num</p>";

for($i=0;$i<$num;$i++){
	$row=$result->fetch_assoc();
	echo "<p><strong>".($i+1)."title: ";
	echo htmlspecialchars(stripslashes($row["title"]));
	echo "</strong><br/>Author: ";
	echo stripslashes($row["author"]);
	echo "<br/>ISBN: ";
	echo stripcslashes($row["isbn"]);
	echo "<br/>price: ";
	echo stripslashes($row["price"]);
	echo "</p>";
}

$result->free();
$db->close();

//mysql_fetch_row();索引数组，第一列下标为0
//mysql_fetch_assoc();关联数组，下标为列名
//mysql_fetch_array();返回以上两个组合
//mysql_fetch_object();以对象形式返回
?>




























