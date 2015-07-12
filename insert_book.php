<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-25 18:11:44
 * @version $Id$
 */
$isbn=$_POST["isbn"];
$author=$_POST["author"];
$title=$_POST["title"];
$price=$_POST["price"];

//首先判断有没有
if(!$isbn||!$author||!$title||!$price){
	echo "enter all form please";
}

//检查用户输入
if(!get_magic_quotes_gpc()){
	$isbn=addslashes($isbn);
	$author=addslashes($author);
	$title=addslashes($title);
	$price=addslashes($price);
}

//建立数据库连接
$db=mysqli_connect("localhost","root","root","books");
// print_r($db);
if(mysqli_connect_error()){
	echo "can not connect database";
}

$query="insert into books values 
       ('".$title."', '".$author."', '".$isbn."', '".$price."')";//具体的数据需要添加引号

$result=$db->query($query);
if($result){
	echo $db->affected_rows."books inserted into database";
}else{
	echo "an error occured item not added";
}

// print_r($result);
//关闭与数据库的连接
$db->close();




?>