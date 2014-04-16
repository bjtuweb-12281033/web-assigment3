<html>
<head>
<meta charset="utf-8"/>
<title>登录主页</title>
<script type="text/javascript">
function validate() {
	var name = document.getElementById("name");
	if (!name.value) {
		alert("请输入用户名！");
		return (false);
		}
	 var password = document.getElementById("password");
	 if (!password.value) {
	 	alert("请输入密码！");
        return (false);
		}
}
</script>
</head>
<body>
<fieldset>
<legend>用户登录页面</legend>
<form action="login.php" method="post">
用户名 : <input id="name" type="text" name="name"/></br>
密码 : &nbsp; <input id="password" type="password" name="password"/></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="Submit" onClick="return validate()">登录</button>
<a href="register.php">注册</a>
</fieldset>
</form>
</body>
</html>
