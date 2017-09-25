<html>
	<head>
		<title>MayBe | 创意网-登录</title>
		<?php include 'php/general.html'?>
	</head>

	<body>
		<?php include "header.php"?>
		<img id="login_image" src="image/canvas.jpg"/>
		<div class="login_content transparent70">
		<form action="main.php" method="post">
		<p class="login_text login_location">请输入帐号(skitter)</p>
		<input type="text" name="username" class="login_button login_location" placeholder="Enter your ID" />
		<p class="login_text login_location">请输入密码(12345678)</p>
		<input type="password"  name="password" class="login_button login_location" value="" autocomplete="flase" placeholder="Enter your pass"/> <br />
		<p class="login_link login_location"><input type="checkbox" class="login_checkbox" checked="checked"/>记住我</p>
		<p class="login_link login_location">密码找回</p>
		<button class="login_button_ture" type="submit">登录</button>
		</form>
		</div>
		<?php include "footer.php"?>
  </body>

</html>
