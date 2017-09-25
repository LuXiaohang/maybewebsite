<div id="topnav" class="transparent60">
	<a href="index.php" class="a_normal black">
		<img src="image/maybe3.jpg" id="topnav_icon"/>
	  <p id="topnav_topic">Maybe | 创意网 </p>
	</a>

	<a href="main.php" class="a_normal black"> <p id="topnav_link">主页 </p> </a>
	<a href="discovery.php" class="a_normal black"> <p id="topnav_link">浏览项目 </p> </a>
	<a href="newpro.php" class="a_normal black"> <p id="topnav_link">发起项目 </p> </a>
	<a href="aboutus.php" class="a_normal black"> <p id="topnav_link">关于我们 </p> </a>


	<?php session_start();
	if(isset($_SESSION['username'])){
		echo '<a href="destory.php" class="a_normal black"> <p id="topnav_button">注销 </p> </a>
		<a href="login.php" class="a_normal black"> <p id="topnav_button">欢迎'.$_SESSION['username'].'</p> </a>';
	}
	else {
		if($_POST['username']=='skitter' and $_POST['password']=='12345678'){
			$_SESSION['username']=$_POST['username'];
			echo '<a href="destory.php" class="a_normal black"> <p id="topnav_button">注销 </p> </a>
			<a href="login.php" class="a_normal black"> <p id="topnav_button">欢迎'.$_SESSION['username'].'</p> </a>';
		}
		else if($_POST['username']!=null || $_POST['password']!=null){
			echo '<script type="text/javascript"> alert("登录信息错误，请重新登录") </script>
			<meta http-equiv="refresh" content="0;url=login.php">';
		}
		else{
			echo '<a href="register.php" class="a_normal black"> <p id="topnav_button">注册 </p> </a>
			<a href="login.php" class="a_normal black"> <p id="topnav_button">登录 </p> </a>';
		}
	}
	?>
	<form id="topnav_form" action="searchresult.php" method="post">
			<input id="topnav_submit" type="submit" />
	<input id="topnav_search" name="search" type="text" />

</form>
</div>
