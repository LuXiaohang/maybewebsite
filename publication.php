<html>
	<head>
		<title>MayBe | ������-����</title>
		<?php include 'php/general.html'?>
		<?php require_once('php/function.php');?>
	</head>

	<body id="newpro">
		<?php
		$theme=$_POST['theme'];
		$begin=date("y-m-d",time());
		$end=$_POST['end'];
		$media=$_POST['media'];
		$award=$_POST['award'];
		$background=$_POST['background'];
		$purpose=$_POST['purpose'];
		$object=$_POST['object'];
		$image="1.jpg";
		$con=connect();
		$sql="insert into web_Project(theme,begin,end,media,award,background,purpose,object,image) values ('$theme','$begin','$end','$media','$award','$background','$purpose','$object','$image');";
		//mysqli_query($con,$sql);

		?>
		<?php include "header.php"?>
		<div id="main_banner">
	    <img src="image/newpro/banner_newpro.jpg" id="main_banner_image"/>
    </div>
		<p id="newpro_banner_topic">MayBe | ������Ŀ <br /> ��Ŀ�����ɹ� �������� </p>

		<div class="main_content_small"></div>
		<div class="main_content center">
			<div class="newpro_content">
				<div class="main_content_inside center center_vertical">
					<form action="publication.php" method="post">
					<table border="0" class="center center_vertical">
						<tr><td colspan="2" height="30px"></td></tr>
							<tr>
			          <td colspan="2"><p class="table_topic">������Ϣ</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">��������</p></td>
			          <td><p class="register_input_text"><?php echo $_POST['theme'];?></p></td>
			        </tr>
							<tr>
			          <td><p class="register_word">��ʼʱ��</p></td>
			          <td><p class="register_input_text"><?php echo date("y-m-d",time());?></p></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����ʱ��</p></td>
			          <td><p class="register_input_text"><?php echo $_POST['end'];?></p></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����ý��</p></td>
			          <td><p class="register_input_text"><?php echo $_POST['media'];?></p></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����</p></td>
			          <td><p class="register_input_text"><?php echo $_POST['award'];?></p></td>
			        </tr>
			        <tr>
			          <td colspan="2"><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><p class="table_topic">��ϸ</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">���汳��</p></td>
			          <td><textarea type="textarea" class="register_input_text textarea"><?php echo $_POST['background'];?></textarea></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����Ŀ��</p></td>
			          <td><p class="register_input_text"><?php echo $_POST['purpose'];?></p></td>
			        </tr>
							<tr>
			          <td><p class="register_word">��������</p></td>
			          <td><p class="register_input_text"><?php echo $_POST['object'];?></p></td>
			        </tr>
					</table>
				</form>
				</div>
			</div>
		</div>
		<div class="main_content_small"></div>
		<?php include "footer.php"?>
  </body>

</html>
