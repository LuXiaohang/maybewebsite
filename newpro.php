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
		<p id="newpro_banner_topic">MayBe | 发起项目 <br /> 您的项目 我们帮您实现 </p>

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
			          <td><p class="register_word">广告主题</p></td>
			          <td>
									<select name="theme" type="text" class="register_input_text">
									<option>请选择你的主题</option>
									<option value="1">自然环境问题</option>
									<option value="2">公共道德规范</option>
									<option value="3">科学教育事业</option>
									<option value="4">社会热点问题</option>
									<option value="5">政治政策宣传</option>
									<option value="6">关爱个体生命</option>
									<option value="7">公共价值取向</option>
									<option value="8">其他公益事业</option>
								</select><br /></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">结束时间</p></td>
			          <td><input name="end" type="text" class="register_input_text" placeholder="例：2015-12-12"/><br /></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">广告媒体</p></td>
			          <td><input name="media" type="password" class="register_input_text" placeholder="电视/车牌"/><br /></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">奖励</p></td>
			          <td><input name="award" type="password" class="register_input_text" placeholder="人民币，单位/元"/><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><br /></td>
			        </tr>
			        <tr>
			          <td colspan="2"><p class="table_topic">详细</p> <hr class="table_hr"/></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">广告背景</p></td>
			          <td><textarea name="background" type="textarea" class="register_input_text textarea" placeholder="输入广告背景"></textarea></td>
			        </tr>
			        <tr>
			          <td><p class="register_word">广告目的</p></td>
			          <td><input name="purpose" type="text" class="register_input_text" placeholder="输入广告目的"/><br /></td>
			        </tr>
							<tr>
			          <td><p class="register_word">广告对象</p></td>
			          <td><input name="object" type="text" class="register_input_text" placeholder="输入面向用户"/><br /></td>
			        </tr>
							<tr>
			          <td><p class="register_word">宣传图片</p></td>
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
