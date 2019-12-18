<?php
session_start();
require "conn.php";
$message = $_POST['message'];
$froms = $_POST['fromos'];
$tos = $_POST['toos'];
echo $tos;
echo $froms;
echo $message;
$sql="INSERT INTO chat".$froms." (src, dest, mess)
		VALUES (?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('iis',$a,$b,$c);
		$a=$froms;
		$b=$tos;
		$c=$message;
		$result=$stmt->execute();
		if($result){
			$sql="INSERT INTO chat".$tos." (src, dest, mess)
		VALUES (?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('iis',$a,$b,$c);
		$a=$froms;
		$b=$tos;
		$c=$message;
		$result=$stmt->execute();
			header('Location: ex.php?id='.$tos.'');
		}
?>