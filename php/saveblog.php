<?php
	$html=$_POST["html"];
	$dbc=mysqli_connect("www.editor.com","root","root","editormd") or die("失败");
	$query="insert into editor (html) values('$html') ";
	mysqli_query($dbc,$query) or die("查询失败");
?>