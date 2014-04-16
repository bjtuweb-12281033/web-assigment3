<?php
$con = mysql_connect("localhost","root","");
if (!$con)
 {
  die('Could not connect: ' . mysql_error());
 }
if (mysql_query("CREATE DATABASE hmj_db",$con))
 {
  echo "Database created";
 }
 //连接数据库
mysql_select_db("hmj_db", $con);
$sql = "CREATE TABLE Users
(
	Name varchar(15),
	Password varchar(15)
)";
mysql_query($sql,$con);
mysql_close($con);
?>

<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<fieldset>
<legend>用户注册页面</legend>
<form action="insert.php" method="post">
用户名 : <input name="name" type="text" /></br>
密码 : &nbsp; <input name="password" type="password" /></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Submit" value="提交"></td>
<a class="back" href="index.php">返回</a>
</form>
</body>
</html>