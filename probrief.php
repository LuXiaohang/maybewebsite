<html>
	<head>
		<title>MayBe | ������-����ҳ</title>
		<?php include 'php/general.html'?>
		<?php require_once('php/function.php');?>
	</head>

	<body>
		<?php include 'header.php'?>

	<div class='prof_main'>
		<div class='main_content_small'></div>
<?php
		$projectid=$_POST['id'];
		$con=connect();
		$sql="select * from web_Project where projectid=$projectid";
		$result=mysqli_query($con,$sql);
		@$row=mysqli_fetch_array($result);
		//echo $row['end'];
		$begin=strtotime(date("y-m-d",time()));
		$end=strtotime($row['end']);
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
		if($begin>$end){
			$sqll="select * from web_Idea,web_Relation where web_Idea.ideaid=web_Relation.ideaid and web_Relation.projectid=$projectid;";
			//echo $sqll."<br />";
			$resultidea=mysqli_query($con,$sqll);
			@$rowidea=mysqli_fetch_array($resultidea);
			//var_dump($rowidea);
			$sqll="select * from web_Person,web_Relation where web_Person.personid=web_Relation.personid and web_Relation.projectid=$projectid;";
			$resultperson=mysqli_query($con,$sqll);
			@$rowperson=mysqli_fetch_array($resultperson);
			$sqll="select * from web_Project x, web_Project y where x.theme=y.theme and y.projectid=$projectid;";
			$resulttheme=mysqli_query($con,$sqll);
			@$rowtheme1=mysqli_fetch_array($resulttheme);
			@$rowtheme2=mysqli_fetch_array($resulttheme);
			@$rowtheme3=mysqli_fetch_array($resulttheme);
			$title=$rowidea['title'];
			$document=$rowidea['document'];
			$designimage=$rowidea['designimage'];
			$name=$rowperson['name'];
			$sex=$rowperson['sex'];
			$introduction=$rowperson['introduction'];

		echo "
		<div class='prof_head center'>
			<h1>".$title."</h1>
      <p>���⣺".$theme."</p>
      <p class='chuangyizhe'>�����ߣ�".$name."</p>
		</div>
    <div class='probrief_content'>
    	<div class='prof_show'>
    	 <div class='vedio'>
    		<p><img src='".$designimage."' class='design-wh' alt='���ͼ'></p>
    	 </div>
    	 <div class='share'>
    	 	<div> <img src='image/heart.png' class='heart-wh' alt='����'>&nbsp;&nbsp;ϲ����͵��ް�</div>
    	 </div>
    	</div>
      <div class='info'>
      	<div class='info_detail'>
      	<p><span class='item'>����ʱ�䣺</span>".$row['end']."</p>
        <p><span class='item'>���Ŀ�ģ�</span>".$row['purpose']." </p>
        <p><span class='item'>Ŀ�����</span>".$row['object']." </p>
        <p><span class='item'>�����ߣ�</span>".$name."</p>
        <p><span class='item'>����İ���</span>".$document."</p>
        </div>
        <hr class='pop_line'/>
        <div class='encourage'>
        	 <p><span class='number'>321</span>������������</p>
           <p><span class='number'>16992</span>λ�����ѹۿ�</p>
        	<input type='button' class='submit_button' id='encourage_button' value='��Ҳ����������'>
        </div>
       </div>
    </div>

    <div class='left_panel'>
     <div class='comment'>
    	<h3>����</h3>
    	<hr class='pop_line'/>
    	<div class='comment_entry'>
    	 <div class='comment_image'>
    		<p><img src='image/newpro/banner_newpro.jpg' class='comment_image' /></p>
    	 </div>
    	 <div class='comment_info'>
    	   <div class='commentor'>
    	 		<p>��Ψ</p>
    	 	 </div>
    	 	 <div class='comment_content'>
    	 		<p>��������ÿ�</p>
    	 	 </div>
    	 </div>

      </div>
      <div class='comment_entry'>
    	 <div class='comment_image'>
    		<p><img src='image/newpro/banner_newpro.jpg' class='comment_image' /></p>
    	 </div>
    	 <div class='comment_info'>
    	   <div class='commentor'>
    	 		<p>��Ψ</p>
    	 	 </div>
    	 	 <div class='comment_content'>
    	 		<p>��������ÿ�</p>
    	 	 </div>
    	 </div>

      </div>
      <div class='comment_entry'>
    	 <div class='comment_image'>
    		<p><img src='image/newpro/banner_newpro.jpg' class='comment_image' /></p>
    	 </div>
    	 <div class='comment_info'>
    	   <div class='commentor'>
    	 		<p>��Ψ</p>
    	 	 </div>
    	 	 <div class='comment_content'>
    	 		<p>��������ÿ�</p>
    	 	 </div>
    	 </div>

      </div>
      <div class='reply'>
      	<h3>��������</h3>
      	<textarea name='background' type='textarea' class='register_input_text textarea' id='comment_reply' placeholder='�����������濴�����'></textarea>
        <input type='button' class='submit_button center' id='comment_button' value='�ύ'>
      </div>
     </div>
    </div>
    <div class='right_panel'>
     <div class='creator'>
    	<h3>������</h3>
    	<hr class='pop_line'/>
    	<div class='creator_info'>
    	<p id='creator_name'>".$name."</p>
    	<p><span class='item'>��飺</span>".$introduction."</p>
    	<p><a href='#'>�鿴������Ʒ</a></p>
    	<p><a href='#'>��ϵ��</a></p>
    	</div>
    	<div class='creator_image'>
    		<p><img src='image/newpro/banner_newpro.jpg' id='creator_photo' /></p>
    	</div>
     </div>
     <div class='relevant'>
    	<h3>���������Ŀ</h3>
    	<hr class='pop_line'/>
    	<div class='relevant_entry'>
    	 <div class='work_image'>
    		<a href='#'><img src='".$rowtheme1['image']."' class='comment_image' /></a>
    	 </div>
    	 <div class='work_info'>
    	   <h4><a href='#' class='work_title'>".mb_substr($rowtheme1['purpose'],0,8,'GBK')."</a></h4>
    	   <p>".mb_substr($rowtheme1['background'],0,18,'GBK')."</p>
    	 </div>

      </div>
     <div class='relevant_entry'>
    	 <div class='work_image'>
    		<a href='#'><img src='".$rowtheme2['image']."' class='comment_image' /></a>
    	 </div>
    	 <div class='work_info'>
    	   <h4><a href='#' class='work_title'>".mb_substr($rowtheme2['purpose'],0,8,'GBK')."</a></h4>
    	   <p>".mb_substr($rowtheme2['background'],0,18,'GBK')."</p>
    	 </div>

      </div>
      <div class='relevant_entry'>
    	 <div class='work_image'>
    		<a href='#'><img src='".$rowtheme3['image']."' class='comment_image' /></a>
    	 </div>
    	 <div class='work_info'>
    	   <h4><a href='#' class='work_title'>".mb_substr($rowtheme3['purpose'],0,8,'GBK')."</a></h4>
    	   <p>".mb_substr($rowtheme3['background'],0,18,'GBK')."</p>
    	 </div>

      </div>
      <p class='seemore'><a href='#'>�鿴���������Ʒ</a></p>
     </div>
    </div>
		";
	}
	else{

		echo "
		<div class='prof_head center'>
			<h1>".$theme."</h1>
      <p>Ŀ��Ⱥ�ڣ�".$row['object']."</p>
		</div>
    <div class='probrief_content'>
    	<div class='prof_show'>
    	 <div class='vedio'>
    		<p><img src='".$row['image']."' class='design-wh' alt='����ͼ'></p>
    	 </div>
    	 <div class='share'>
    	 	<p>���ý�壺".$row['media']."</p>
    	 </div>
    	</div>
      <div class='info'>
      	<div class='info_detail'>
      	<p><span class='item'>��ֹʱ�䣺</span>".$row['end']."</p>
        <p><span class='item'>���Ŀ�ģ�</span>".$row['purpose']." </p>
        <p><span class='item'>���⽱����</span>".$row['award']." Ԫ</p>
        <p><span class='item'>��汳����</span>".$row['background']."</p>
        </div>
        <hr class='pop_line'/>
        <div class='encourage'>
        	<a href='newidea.php'><input type='button' class='submit_button' id='encourage_button' value='�ύ����'></a>
        </div>
       </div>
    </div>

		";
	}
		?>

  </div>
		<?php include 'footer.php'?>
  </body>

</html>
