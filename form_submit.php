
<?php
include('index.php');
if ($_POST) {
	$user= $_POST['username'];
	$pass= $_POST['psw'];
	$mail= $_POST['email'];
	$sex= $_POST['sex'];
	 $cat=$_POST['category'];
	 $msg=$_POST['message'];
	
	  if(mysql_query("insert into personal_information(username,psw,email,sex,category,message)values
		('$user','$pass','$mail','$sex','$cat','$msg')")){
 	echo "submitted";
	 }  
	 header("Location: form_submit.php"); 
}

?>
