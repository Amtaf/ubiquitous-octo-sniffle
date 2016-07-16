<?php
session_start();
require_once 'connection.php';

$username = $_POST['username'];
$message = $_POST['message'];
$recipient = $_POST['recipient'];

$sql = "INSERT INTO user_chat_messages
	(username,
	message_content,
	message_time,recipient)
	VALUES
	(:a,:b,:c,:d)";
$qry = $con->prepare($sql);
$qry->execute(array(':a'=>$username,':b'=>$message,':c'=>'now()',':d'=>$recipient));
?>