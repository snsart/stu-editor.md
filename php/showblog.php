<?php
	
	$dbc=mysqli_connect("www.editor.com","root","root","editormd") or die("失败");
	$query="select html from editor where id=2";
	$data=mysqli_query($dbc,$query) or die("查询失败");
	
	if(mysqli_num_rows($data)==1){
		$row=mysqli_fetch_array($data);
		$html=$row['html'];
	}
	
	echo $html;
?>