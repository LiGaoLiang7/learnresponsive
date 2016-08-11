<?php
	header("Content-Type: text/plain");
	date_default_timezone_set("Asia/Shanghai");
	include 'conn.php';
	$comment  = $_POST['comment'];
	$comment = str_replace("'","\'",$comment);
	$nickname  = $_POST['nickname'];
	$nickname = str_replace("'","\'",$nickname);
	$email  = $_POST['email'];
	$email = str_replace("'","\'",$email);
	$url  = $_POST['url'];
	$url = str_replace("'","\'",$url);
	$datatime = date("Y:m:d")."-".date("h:i:sa");
	if($comment != "" && $email != ""){
		$Sql = "INSERT INTO myWork (comment, nickname, email, url, datetime) VALUES ('".$comment."','".$nickname."','".$email."','".$url."','".$datatime."');";
		if(mysql_query($Sql)){
				echo 'add accomplish';
			}else{
				echo $Sql;
			}
	}

?>