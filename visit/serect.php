<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-27 19:25:26
 * @version $Id$
 */
$name=$_POST['name'];
$pass=$_POST['password'];
if(!isset($name)||!isset($pass)){
?>
<h2>登入</h2>
<form action="serect.php" method="post">
	<p>name:<input type="text" name="name"/></p>
	<p>password:<input type="password" name="password"></p>
	<p><input type="submit" value="submit"></p>
</form>
<?php
}
else if($name=="user"&&$pass="pass"){
	
	echo "<h1>here it is</h1>";
	echo "<p>welcome to serect page</p>";
}else{
	echo "<h1>go away</h1>";
}

//问题
//只对一个用户名和密码进行了硬编码
//将密码以普通文本的形式保存
//只保护了一个页面
//以普通文本形式传输密码
?>



























