<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-27 20:38:33
 * @version $Id$
 */
$db=mysql_connect("localhost","root","root");
if(!$db){
	echo mysql_error();
}

mysql_select_db("books");
$sql="create table user (id int)";
$result=mysql_query($sql);
var_dump($result);
mysql_close();

echo mysql_affected_rows();//影响的行数
?>