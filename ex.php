<html><head>
	
<?php
session_start();
require "conn.php";
	$idea=$_GET['id'];
	$query = "SELECT uname,uid,uimg FROM users WHERE uid=?";
			$stmt=$conn->prepare($query);
			$stmt->bind_param('i',$a);
			$a=$idea;
			$stmt->execute();
			$result= $stmt->get_result();
if(!$result){
	die(mysqli_error($conn));
}else{
while($arry = mysqli_fetch_array($result)){
	$goid=$arry["uid"];
	$goname=$arry["uname"];
	$goimg=$arry["uimg"];
		
	
}
}
		$query ="SELECT uname,uid,uimg FROM users WHERE uname = ?";
			$stmt=$conn->prepare($query);
			$stmt->bind_param('s',$a);
			$a=$_SESSION['chat1'];
			$stmt->execute();
			$result= $stmt->get_result();
if(!$result){
	die(mysqli_error($conn));
}else{
while($arry = mysqli_fetch_array($result)){
	$myid=$arry["uid"];
	$myname=$arry["uname"];
	$myimg=$arry["uimg"];

}
}
echo '<div type="hidden" style="font-size:1px" id="i1">'.$goid.'</div><div type="hidden" style="font-size:1px" id="i2">'.$myname.'</div>';
echo '
<link rel="stylesheet" type="text/css" href="styl.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>';?>
<script>
		function ajax(){
		var u = getElementById('i1').text;
		var my = getElementById('i2').text;
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('ajaxing').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php?myname='+my+'goid='+u,true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>

<?php echo '</head>';?>
	<body onload="ajax();">
<?php echo'
<div id ="ajaxing" class="content container-fluid bootstrap snippets">
</div>
	</body><div type="hidden" id="i1">'.$goid.'</div><div type="hidden" id="i2">'.$myname.'</div>
	</html>';
	?>