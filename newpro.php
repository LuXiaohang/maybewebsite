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
		<p id="newpro_banner_topic">MayBe | ������Ŀ <br /> ������Ŀ ���ǰ���ʵ�� </p>

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
			          <td><p class="register_word">�������</p></td>
			          <td>
									<select name="theme" type="text" class="register_input_text">
									<option>��ѡ���������</option>
									<option value="1">��Ȼ��������</option>
									<option value="2">�������¹淶</option>
									<option value="3">��ѧ������ҵ</option>
									<option value="4">����ȵ�����</option>
									<option value="5">������������</option>
									<option value="6">�ذ���������</option>
									<option value="7">������ֵȡ��</option>
									<option value="8">����������ҵ</option>
								</select><br /></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����ʱ��</p></td>
			          <td><input name="end" type="text" class="register_input_text" placeholder="����2015-12-12"/><br /></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">���ý��</p></td>
			          <td><input name="media" type="password" class="register_input_text" placeholder="����/����"/><br /></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">����</p></td>
			          <td><input name="award" type="password" class="register_input_text" placeholder="����ң���λ/Ԫ"/><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><p class="table_topic">��ϸ</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">��汳��</p></td>
			          <td><textarea name="background" type="textarea" class="register_input_text textarea" placeholder="�����汳��"></textarea></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">���Ŀ��</p></td>
			          <td><input name="purpose" type="text" class="register_input_text" placeholder="������Ŀ��"/><br /></td>
			        </tr>
							<tr>
			          <td><p class="register_word">������</p></td>
			          <td><input name="object" type="text" class="register_input_text" placeholder="���������û�"/><br /></td>
			        </tr>
							<tr>
			          <td><p class="register_word">����ͼƬ</p></td>
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
