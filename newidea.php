<html>
	<head>
		<title>MayBe | ������-����</title>
		<?php include 'php/general.html'?>
	</head>

	<body id="newpro">
		<?php include "header.php"?>
		<div id="main_banner">
	    <img src="image/newpro/banner_newpro.jpg" id="main_banner_image"/>
    </div>
		<p id="newpro_banner_topic">MayBe | Ͷ�崴�� <br /> ���Ĵ��� �Ƿ���ʰ�� </p>

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
			          <td><p class="register_word">������</p></td>
			          <td><input name="end" type="text" class="register_input_text" placeholder="���������Ĺ�����"/><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><p class="table_topic">��ϸ</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����İ�</p></td>
			          <td ><textarea name="background" type="textarea" class="register_input_text textareaidea" placeholder="��������İ�"></textarea></td>
			        </tr>
							<tr>
			          <td><p class="register_word">��Ʋ�ͼ</p></td>
			          <td><input type="file" class="register_input_text"/></td>
			        </tr>
							<tr>
								<td colspan="2"> <img name="showimg" id="showimg" src="" style="display:none;" alt="Ԥ��ͼƬ" />     </td>
							</tr>
			        <tr>
			          <td colspan="2"><button type��"submit" class="submit_button">������Ŀ</button></td>
			        </tr>
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
