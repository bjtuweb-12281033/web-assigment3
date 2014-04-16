<?php
$username = $_POST["name"];
$password = $_POST["password"];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hmj_db", $con);

$result_name = mysql_query("SELECT * FROM Users WHERE Name='$username'");
$result_password = mysql_query("SELECT * FROM Users WHERE Password='$password'");
if($row_name = mysql_fetch_array($result_name))
  {  
  echo $row["Name"];
  if($row_password =  mysql_fetch_array($result_password))
  {
  	echo "用户登录成功!";
  	echo "<br />";
  	setcookie("mycookie_name", $username);
  }
  else{
  echo "您的用户名或密码错误！";
  }
  }
  else{
  echo "用户不存在，请先注册！";
  }
?>

<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<a href="logout.php">返回</a>
</body>
</html>

