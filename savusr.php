<?php 
session_start();
require 'conn.php';
$email = $_POST['email'];
$password1 = $_POST['password1'];
echo'
<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">';
function changeimage($email,$filetemp,$file_extn){

	$file_path = 'images/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	 move_uploaded_file($filetemp, $file_path);

$username = "niteesh";
$password = "abcd12345";
$hostname = "localhost";


$conn = mysqli_connect($hostname, $username, $password,"chat");
// Check connection
if (!$conn) {
	 echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	         $strg = mysqli_real_escape_string($conn, $file_path);
			 $sql1="SELECT uid from users where uname=?";
			 $g=$conn->prepare($sql1);
$g->bind_param('s',$a);
$a=$email;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
	$g->bind_result($id);
    /* fetch values */
    while ($g->fetch()) {
	$id1=$id;
	}
            $updt = "UPDATE users SET uimg = '" . $strg . "' WHERE uid = " . (int)$id1;
mysqli_query($conn, $updt);

$_SESSION['chat1']=$email;
$_SESSION['chat2']=$password;
}

	else{
		echo "error";
	}
}


$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password22= password_hash($password2,PASSWORD_DEFAULT);
if(!$_POST['submit']){
echo "Please fill out the form";
} 
if(!(password_verify($password1,$password22)))
{
echo "Passwords didnot match";
} 
else {

	if(isset($_POST["submit"])){
if(isset($_FILES['image1'])){
if(empty($_FILES['image1']['name'])=== true){
	echo "choose a FILE !";
	
}else{
	$allowed= array('jpg','jpeg','png','gif');
   $filename= $_FILES['image1']['name'];
   $file_extn1=explode('.',$filename);
   $file_extn=strtolower(end($file_extn1));
      $filetemp= $_FILES['image1']['tmp_name'];
	  if(in_array($file_extn,$allowed))
	  {
		  $filesize= $_FILES['image1']['size'];
		  if(($filesize!=0) && ($filesize <= 1000000)){
		  	$sql="INSERT INTO users (uname,upwd) VALUES (?,?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$a,$b);
		$a=$email;
		$b=$password22;
		$result=$stmt->execute();
		if($result){
					changeimage($email,$filetemp,$file_extn);
							$querya = "SELECT uid,uname FROM users";

$result = mysqli_query($conn,$querya);
if(!$result){
	die(mysqli_error($conn));
}else{
while($arry = mysqli_fetch_array($result)){
if ($email==$arry["uname"]){
		$ids=$arry["uid"];
}
}
}

$sql3 = "CREATE TABLE chat".$ids."(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
src INT(6),
dest INT(6), 
mess VARCHAR(100)
)ENGINE = INNODB";
$retval = mysqli_query($conn, $sql3);
if(! $retval )
{
  die('Could not create table: ' . mysqli_error($conn));
}


	header('Location: ex.php?id=77');
	ob_end_flush();	}
		else{ echo " This Email-id is already registered ";}
	  }
	  else{
		  echo "Choose a different file";
	  }
	  }else{
		  echo"Choose a different file extention.( jpeg, jpg,png,gif  only are allowed) ";
	  }
}
}
else{
	echo"please choose a file ";
}
}

}
?>
</div>
</h1>
</div>