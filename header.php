<div id="topnav" class="transparent60">
	<a href="index.php" class="a_normal black">
		<img src="image/maybe3.jpg" id="topnav_icon"/>
	  <p id="topnav_topic">Maybe | ������ </p>
	</a>

	<a href="main.php" class="a_normal black"> <p id="topnav_link">��ҳ </p> </a>
	<a href="discovery.php" class="a_normal black"> <p id="topnav_link">�����Ŀ </p> </a>
	<a href="newpro.php" class="a_normal black"> <p id="topnav_link">������Ŀ </p> </a>
	<a href="aboutus.php" class="a_normal black"> <p id="topnav_link">�������� </p> </a>


	<?php session_start();
	if(isset($_SESSION['username'])){
		echo '<a href="destory.php" class="a_normal black"> <p id="topnav_button">ע�� </p> </a>
		<a href="login.php" class="a_normal black"> <p id="topnav_button">��ӭ'.$_SESSION['username'].'</p> </a>';
	}
	else {
		if($_POST['username']=='skitter' and $_POST['password']=='12345678'){
			$_SESSION['username']=$_POST['username'];
			echo '<a href="destory.php" class="a_normal black"> <p id="topnav_button">ע�� </p> </a>
			<a href="login.php" class="a_normal black"> <p id="topnav_button">��ӭ'.$_SESSION['username'].'</p> </a>';
		}
		else if($_POST['username']!=null || $_POST['password']!=null){
			echo '<script type="text/javascript"> alert("��¼��Ϣ���������µ�¼") </script>
			<meta http-equiv="refresh" content="0;url=login.php">';
		}
		else{
			echo '<a href="register.php" class="a_normal black"> <p id="topnav_button">ע�� </p> </a>
			<a href="login.php" class="a_normal black"> <p id="topnav_button">��¼ </p> </a>';
		}
	}
	?>
	<form id="topnav_form" action="searchresult.php" method="post">
			<input id="topnav_submit" type="submit" />
	<input id="topnav_search" name="search" type="text" />

</form>
</div>
