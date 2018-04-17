<?php
	define('HOST','localhost');
	define('USERNAME','root');
	define('PASSWORD','');
	define('DBNAME','myselfweb');

	$con = new mysqli(HOST,USERNAME,PASSWORD,DBNAME,3306);
		if($con->connect_error){
   		 echo "连接失败";
   		 exit();
		}
	$con->set_charset('utf8');

	$names = @ $_POST["names"];
    $email = @ ($_POST["email"]);
    $tel = @ $_POST["tel"];
    $liuyan = @ ($_POST["connet"]);
    // var_dump($names);
    $sql = "insert into `submit`(`names`,`email`,`phone`,`liuyan`)VALUES ('$names','$email','$tel','$liuyan')";
	$con->query($sql);
	if($con->affected_rows>0){
    $message = "添加成功";
    include_once '../html/message.html';
    exit();
	}else{
    $message = "添加失败";
    include_once '../html/message.html';
    exit();
	}
