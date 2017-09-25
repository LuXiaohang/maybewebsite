<?php
require "db2.php";
 $sql="SELECT word1 FROM gu_word WHERE wo_ID='1'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	echo $row['word1']."<br>";
}


?>