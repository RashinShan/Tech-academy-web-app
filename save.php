<?php
	include 'database.php';
	
	session_start();
	

	if($_POST['type']==1){
	$name=md5($_POST['name']);
	
	$password=md5($_POST['password']);
	$email=md5($_POST['email']);
	$phone=md5($_POST['phone']);
	$address=md5($_POST['address']);

   
	$sql2 = "INSERT INTO `user_data`( `name`,`password`, `email`, `phone`, `address`) 
	VALUES ('$name','$password','$email','$phone','$address')";
	$duplicate=mysqli_query($conn,"SELECT * FROM user_data where name ='$name'");
	if(mysqli_num_rows($duplicate)>0){
		
		echo json_encode(array("statusCode"=>202));
	}else{

	
		if (mysqli_query($conn, $sql2)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
	}
	mysqli_close($conn);
}

if($_POST['type']==2){
	$uname1=$_POST['uname'];
	$uname2=md5($_POST['uname']);
	$upassword=md5($_POST['upassword']);
	
	$_SESSION['uname']=$uname1;
		
	$duplicate=mysqli_query($conn,"SELECT * FROM user_data where name ='$uname2' && password='$upassword'");
	if(mysqli_num_rows($duplicate)>0){
		if($uname2=="21232f297a57a5a743894a0e4a801fc3"){
			echo json_encode(array("statusCode"=>205));
		}
		if($uname2!="21232f297a57a5a743894a0e4a801fc3"){
		echo json_encode(array("statusCode"=>202));
		}
       
	}else{

	
		
			echo json_encode(array("statusCode"=>201));
		
	}
	mysqli_close($conn);
}





?>

