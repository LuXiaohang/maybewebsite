<html>
	<head>
		<title>MayBe | ������-���</title>
		<?php include 'php/general.html'?>
		<?php require_once('php/function.php');?>
	</head>

	<body>
		<?php include "header.php"?>
		<div id="main_banner">
	    <img src="image/discovery/banner_dis.jpg" id="main_banner_image"/>
    </div>

		<p id="discover_banner_topic">MayBe | ��Ŀ��� <br />ǧ��ǧ�� �������ڲ�ͬ</p>

		<div class="discover_guide">
			<form action="discoveryresult.php" method="post">
				<h2>�������</h2>
				<div class="catologe" id="process">
				 <p class="catologe_title">����</p>
			   <p class="catologe_link">
         <input type="radio" name="finish" class="button_link" id="finished" value="1" />�����
         </p>
			   <p class="catologe_link">
         <input type="radio"  name="finish" class="button_link" id="unfinished" value="0" />δ���
         </p>
				</div>
				<div class="pipe">|</div>
				<div class="catologe" id="media">
				 <p  class="catologe_title">����</p>
			    <p class="catologe_link">
         <input type="radio" name="media" class="button_link" id="finished" value="1" />����
         </p>
			   <p class="catologe_link">
         <input type="radio" name="media" class="button_link" id="finished" value="2" />·��
         </p>
				</div>
				<div class="catologe" id="theme">
				 <p class="catologe_title" >����</p>
			   <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="1" />��Ȼ��������
         </p>
			  <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="2" />�������¹淶
         </p>
         <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="3" />��ѧ������ҵ
         </p>
         <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="4" />����ȵ�����
         </p>
         <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="5" />������������
         </p>
				 <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="6" />�ذ���������
         </p>
         <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="7" />������ֵȡ��
         </p>
         <p class="catologe_link">
         <input type="radio" name="theme" class="button_link" id="finished" value="8" />����������ҵ
         </p>
				</div>
				<div class="catologe_submit">
					<p><input type="submit" class="button_submit" value="�ύ" /></p>
				</div>
			</form>
			</div>

		<div class="main_content center">
			<?php
			$finish=$_POST['finish'];
			if($finish){$finish1="�����";}
			else {$finish1="δ���";}
			$end=date("y-m-d",time());
			$theme=$_POST['theme'];
			switch($theme)
			{
				case "1":
					$theme1="��Ȼ��������";
					break;
				case "2":
					$theme1="�������¹淶";
					break;
				case "3":
					$theme1="��ѧ������ҵ";
					break;
				case "4":
					$theme1="����ȵ�����";
					break;
				case "5":
					$theme1="������������";
					break;
				case "6":
					$theme1="�ذ���������";
					break;
				case "7":
					$theme1="������ֵȡ��";
					break;
				case "8":
					$theme1="����������ҵ";
					break;
			}
			$media=$_POST['media'];
			if($media=="1"){$media="����";}
			else{$media="·��";}
			echo "<h3>".$finish1."&nbsp;&nbsp;".$media."&nbsp;&nbsp;".$theme1."</h3>";
				$i=1;
				while($i>0){
					echo"<div class='discover_content center'>
						   <div class='discover_content_inside'>
								 <div class='shadow center center_vertical'>
									 <form action='probrief.php' method='post'>
										 <p class='center_vertical white lighter shadow_text'>ʣ��ʱ�䣺12��<br />�˽�����
											 <input type='image' src='image/whitetriangle.png' class='shadow_link_img ml50'>
	                     <input type='text' name='id' value='a' class='none'>
										 </p>
	                   </form>
								 </div>
								 <img class='half' src='image/canvas.jpg'/>
								 <table border='0' style='position:absolute;top:50%;width:100%;height:50%'>
									 <tr>
										 <td colspan='2'>Mac����Ϳѻ���</td>
									 </tr>
									 <tr>
										 <td><p style='font-size:32px;margin-left:20px'>5000$</p></td><td><p style='position:relative;width100%;text-align:right;margin-right:10px;color:green'>�б�ing</p></td>
									 </tr>
									 <tr>
										 <td colspan='2'>
											 <hr style='width:95%'/>
										 </td>
									 </tr>
									 <tr>
										 <td colspan='2'>
											 <p style='margin-top:-10px;margin-bottom:10px;margin-left:10px;color:gray'>��Ʒ����</p>
										 </td>
									 </tr>
									 <tr>
										 <td style='width:50%'><p style='margin-top:-10px;margin-left:10px;'>�������</p></td>
										 <td style='width:50%'><p style='margin-top:-10px;margin-left:10px;margin-right:20px;text-align:right'>��Ŀ���ڣ�20��</p></td>
									 </tr>
								 </table>
							 </div>
							 </div>";
					$i=$i-1;
				}

				$q="20";
				$con=connect();
				if($finish="1"){$sql="select * from web_Project where theme='$theme' and media='$media' and end<'".$q."$end';";}
				else{$sql="select * from web_Project where theme='$theme' and media='$media' and end>'".$q."$end';";}
				//echo $sql;
				$result=mysqli_query($con,$sql);
				while(@$row=mysqli_fetch_array($result)){
					$begin=strtotime(date("y-m-d",time()));
					$end=strtotime($row['end']);
					if($begin>$end){
						$finish="�����";
						$lefttime="0";
					}
					else{
						$finish="�б�ing";
						$res=timediff($begin,$end);
						$lefttime=$res['day'];
					}
					switch($row['theme'])
					{
						case "1":
							$theme="��Ȼ��������";
							break;
						case "2":
							$theme="�������¹淶";
							break;
						case "3":
							$theme="��ѧ������ҵ";
							break;
						case "4":
							$theme="����ȵ�����";
							break;
						case "5":
		  				$theme="������������";
							break;
						case "6":
							$theme="�ذ���������";
							break;
						case "7":
							$theme="������ֵȡ��";
							break;
						case "8":
							$theme="����������ҵ";
							break;
					}
					$award=$row['award'];
					$purpose=$row['purpose'];
					$object=$row['object'];
					$begin=strtotime($row['begin']);
					$res=timediff($begin,$end);
					$cycletime=$res['day'];
					$image=$row['image'];
					echo"<div class='discover_content center'>
							 <div class='discover_content_inside'>
								 <div class='shadow center center_vertical'>
									 <form action='probrief.php' method='post'>
  									 <p class='center_vertical white lighter shadow_text'>ʣ��ʱ�䣺".$lefttime."��<br />�˽�����
                     <input type='image' src='image/whitetriangle.png' class='shadow_link_img ml50'>
                     <input type='text' name='id' value='".$row['projectid']."' class='none'>
  									 </p>
                     </form>
								 </div>
								 <img class='half' src='".$image."'/>
								 <table border='0' style='position:absolute;top:50%;width:100%;height:50%'>
									 <tr>
										 <td colspan='2'>".$theme."</td>
									 </tr>
									 <tr>
										 <td><p style='font-size:32px;margin-left:20px'>".$award."Ԫ</p></td><td><p style='position:relative;width100%;text-align:right;margin-right:10px;color:green'>".$finish."</p></td>
									 </tr>
									 <tr>
										 <td colspan='2'>
											 <hr style='width:95%'/>
										 </td>
									 </tr>
									 <tr>
										 <td colspan='2'>
											 <p style='margin-top:-10px;margin-bottom:10px;margin-left:10px;color:gray'>����:".$object."</p>
										 </td>
									 </tr>
									 <tr>
										 <td style='width:50%'><p style='margin-top:-10px;margin-left:10px;'>".mb_substr($purpose,0,8,'GBK')."��"."</p></td>
										 <td style='width:50%'><p style='margin-top:-10px;margin-left:10px;margin-right:20px;text-align:right'>��Ŀ���ڣ�".$cycletime."��</p></td>
									 </tr>
								 </table>
							 </div>
							 </div>";
				}



			?>
		</div>

		<?php include "footer.php"?>
  </body>

</html>
