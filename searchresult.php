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

		<div class="main_content center">
			<?php

				$search=$_POST['search'];
				echo "<h1><strong>".$search."</strong>&nbsp;&nbsp;���������Ϊ</h1>";
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
				$con=connect();
				$sql="select * from web_Project where purpose like '%$search%' or background like '%$search%' order by end desc;";
				$result=mysqli_query($con,$sql);
				while(@$row=mysqli_fetch_array($result)){
					$begin=strtotime(date("y-m-d",time()));
					$end=strtotime($row['end']);
					if($begin>$end){
						$finish="";
						$lefttime="�����";
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
										 <td style='width:50%'><p style='margin-top:-10px;margin-left:10px;'>".mb_substr($purpose,0,50,'GBK')."</p></td>
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
