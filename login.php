<?php
session_start();
require 'conn.php';

$myemailid = $_POST['email'];
$mypassword = $_POST['password'];
$password22= password_hash($mypassword,PASSWORD_DEFAULT);
$query = "SELECT uname,upwd FROM users WHERE uname =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$myemailid;
$g->execute();
$g->store_result();
$g->get_result();
$count= $g->num_rows;
if($count==1){
     /* bind result variables */
    $g->bind_result($id,$password);

    /* fetch values */
    while ($g->fetch()) {
        $id1 =  $id;
		$password1=$password;
    }
	if(password_verify($mypassword,$password1)){

	echo "Successfully Logged</h3>";
$_SESSION['chat1']=$myemailid;
$_SESSION['chat2']=$mypassword;

	header('Location: ex.php?id=77');}
	else{
	echo '<h1>Incorrect Username or Password </h1> ';

}
}
else {
	echo '<h1>This email id is not registered</h1> ';

}






?>