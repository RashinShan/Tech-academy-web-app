<?php
	include 'database.php';
	if($_POST['type']==0){
	$id=$_POST['id'];
	
	$sql = "DELETE FROM quiz1 WHERE id=$id";
	
    $result=mysqli_query($conn, $sql);
   
	if ($result==true) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
}


if($_POST['type']==1){
	$id=$_POST['id'];
	$q=$_POST['q'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$ans=$_POST['ans'];
	$ansval=$_POST['ansval'];
  
	$sql = "INSERT INTO `quiz1`( `id`,`q`, `a`, `b`, `c`,`d`, `ans`, `ansval`) 
	VALUES ('$id','$q','$a','$b','$c','$d','$ans','$ansval')";
	

$duplicate=mysqli_query($conn,"SELECT * FROM quiz1 where id =$id");
if(mysqli_num_rows($duplicate)>0){
	
	echo json_encode(array("statusCode"=>202));
}else{
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
		
	} 
	else {
		echo json_encode(array("statusCode"=>201));
		
	}
}
mysqli_close($conn);

}

if($_POST['type']==2){
	$id=$_POST['id'];
	$q=$_POST['q'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$ans=$_POST['ans'];
	$ansval=$_POST['ansval'];
  
	$sql = "UPDATE `quiz1`
   SET `q`='$q', `a`='$a', `b`='$b', `c`='$c',`d`='$d', `ans`='$ans', `ansval`='$ansval'
	WHERE `id`='$id'";
	

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
		
	} 
	else {
		echo json_encode(array("statusCode"=>201));
		
	}

mysqli_close($conn);
}

?>