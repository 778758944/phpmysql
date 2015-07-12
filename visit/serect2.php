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
<form action="serect2.php" method="post">
	<p>name:<input type="text" name="name"/></p>
	<p>password:<input type="password" name="password"></p>
	<p><input type="submit" value="submit"></p>
</form>
<?php
}
else{
	//解决密码明文传输问题
	$pass=sha1($pass);
	//解决用户名密码的硬编码问题
	$db=mysqli_connect("localhost","root","root","user");
	if(mysqli_connect_error()){
		echo "can not connect to database";
		exit;
	}
	$query="select count(*) from user where name='".$name."' and password='".$pass."'";
	$result=$db->query($query);

	if(!$result){
		echo "can not run query";
		exit;
	}
	$row=mysqli_fetch_row($result);
	$count=$row[0];

	if($count>0){
		echo "<h1>here it is</h1>";
		echo "<p>welcome to serect page</p>";
	}else{
		echo "<h1>go Away</h1>";
	}
}













