<?php
	$file=$_FILES['imagefile'];
	$target="images/".$file["name"];
	echo $file['tmp_name'];
	
	if($file['error']==0){
		echo "上传成功";
		move_uploaded_file($file['tmp_name'],$target);		
	}else{
		echo '<p class="error">上传出错</p>';
	}
?>