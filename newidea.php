<html>
	<head>
		<title>MayBe | 创意网-发起</title>
		<?php include 'php/general.html'?>
	</head>

	<body id="newpro">
		<?php include "header.php"?>
		<div id="main_banner">
	    <img src="image/newpro/banner_newpro.jpg" id="main_banner_image"/>
    </div>
		<p id="newpro_banner_topic">MayBe | 投稿创意 <br /> 您的创意 是否五彩斑斓 </p>

		<div class="main_content_small"></div>
		<div class="main_content center">
			<div class="newpro_content">
				<div class="main_content_inside center center_vertical">
					<form action="publication.php" method="post">
					<table border="0" class="center center_vertical">
						<tr><td colspan="2" height="30px"></td></tr>
							<tr>
			          <td colspan="2"><p class="table_topic">基本信息</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">广告标题</p></td>
			          <td><input name="end" type="text" class="register_input_text" placeholder="请输入您的广告标题"/><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><p class="table_topic">详细</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">设计文案</p></td>
			          <td ><textarea name="background" type="textarea" class="register_input_text textareaidea" placeholder="输入设计文案"></textarea></td>
			        </tr>
							<tr>
			          <td><p class="register_word">设计草图</p></td>
			          <td><input type="file" class="register_input_text"/></td>
			        </tr>
							<tr>
								<td colspan="2"> <img name="showimg" id="showimg" src="" style="display:none;" alt="预览图片" />     </td>
							</tr>
			        <tr>
			          <td colspan="2"><button type＝"submit" class="submit_button">发起项目</button></td>
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
