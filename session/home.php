<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-06-28 19:00:33
 * @version $Id$
 */
session_start();
if(isset($_POST["user"])&&isset($_POST["password"])){
	$user=$_POST["user"];
	$password=$_POST["password"];
	$db=mysqli_connect("localhost","root","root","user");

	if(mysqli_connect_error()){
		echo "can not connect database";
		exit;
	}

	$query="select * from user where name='".$user."' and password=sha1(".$password.")";
	$result=$db->query($query);

	print_r($result);


	if($result->num_rows){

		$_SESSION["user"]=$user;
	}
	$db->close();
}
?>
<html>
	<head></head>
	<body>
		<h1>home page</h1>
		<?php
		if(isset($_SESSION["user"])){
			echo "<p>hello ".$_SESSION["user"]."</p>";
			echo "<p>welcome to my site</p>";
			echo "<a href='logout.php'>log out</a>";
		}
		else{
			if(isset($_POST["user"])){
				echo "you made a mistake in your username or password";
			}
			else{
				echo "you are not log in";
			}
		?>
		<form action="home.php" method="post">
			<p>user:<input type="text" name="user"/></p>
			<p>password:<input type="password" name="password"></p>
			<p><input type="submit" value="submit"></p>
		</form>
		<?php
		}
		?>
		<a href="member_only.php">member section</a>
	</body>
</html>


























