<?php
session_start();
require "conn.php";
	$idea=$_GET['goid'];
	$yoman=$_GET['myname'];
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
			$a=$yoman;
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
      <div class="row row-broken">
        <div class="col-sm-3 col-xs-12" id="yo1">
          <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
            <div class="chat-users">
              <h6>Online</h6>';
$query = "SELECT uname,uid,uimg FROM users ";

$result = mysqli_query($conn,$query);
if(!$result){
	die(mysqli_error($conn));
}else{
while($arry = mysqli_fetch_array($result)){
if (yoman==$arry["uname"]){
		echo '';
	}
	else{
$goto=$arry["uid"];
	echo '

                <div class="user" >
				
                    <div class="avatar">
						
                    <img src='. $arry["uimg"].' width="50px">
                    <div class="status online"></div>
					
                    </div>
                    <div class="name"><a href="ex.php?id='.$arry["uid"].'">'. $arry["uname"].'</a></div>
                </div>';
				
	
	}
	}
	}
	echo '
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-xs-12 chat" style="overflow: hidden; outline: none;" tabindex="5001" id="yo2">
          <div class="col-inside-lg decor-default">
            <div class="chat-body">
              <h6>'.$goname.'</h6>';
 $query1 = "SELECT id,src,dest,mess FROM chat".$myid."";

$result1 = mysqli_query($conn,$query1);
if(!$result1){
	die(mysqli_error($conn));
}else{ while($array = mysqli_fetch_array($result1)){
if ($myid==$array['src']){
if ($goid==$array['dest'])	{
	$name3=$myname;
	$img3=$myimg;
	$class3='class="answer right"';
	$message=$array['mess'];

			echo'  <div '.$class3.'>
                <div class="avatar">
                  <img src="'.$img3.' "width="50px"  alt="User name">
                  <div class="status offline"></div>
                </div>
                <div class="name">'.$name3.'</div>
                <div class="text">
                  '.$array["mess"].'
                </div>
              </div>';
}}else if($goid==$array['src']){
	if($myid==$array['dest']){
		$name3=$goname;
	$img3=$goimg;
	$class3='class="answer left"';
	$message=$array['mess'];

			echo'  <div '.$class3.'>
                <div class="avatar">
                  <img src="'.$img3.' "width="50px"  alt="User name">
                  <div class="status offline"></div>
                </div>
                <div class="name">'.$name3.'</div>
                <div class="text">
                  '.$array["mess"].'
                </div>
</div>';}}

}
}
 echo '
              <div class="answer-add" action="add.php">
			  <form class="form-horizontal" action="add.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
      <input type="text" id="1" class="form-control" name="message" id="email" placeholder="Enter message">
	  	  <input name="submit" id="2" type="submit" value="submit" class="btn btn-primary">
    </div>
	  <input type="hidden" name="fromos" value='.$myid.'>
	  <input type="hidden" name="toos" value="'.$idea.'">
  </form>
               
              </div>
            </div>
          </div>
        </div>

    </div>';?>