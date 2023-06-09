
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="png" href="img\clip-304.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  </script>
     <style>
      body {
        background-image: url("img\secure_login_pdn4.png");
      }
    </style>
</head>
<body >
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="img/icon/fb2.png">
				<img src="img/icon/insta2.png">
				<img src="img/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" method="post">
				<div class="inp">
					<img src="img/icon/user.png"><input type="text" id="uname" class="input-field" placeholder="Username " style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="img/icon/password.png"><input type="password" id="upassword" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" id="loginbtn" class="submit-btn">Log In</button>
			</form>


			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="img/icon/google.png"><span>Sign in with Google</span>
				</button> 
			</div>
			
			<!-- Registration Form -->
			<form id="register" class="input-group" method="post">
				<input type="text" class="input-field" id="name" placeholder="Full Name" required="required">
				<input type="email" class="input-field"  id="email" placeholder="Email Address" required="required">
				<input type="password" class="input-field" id="password" placeholder="Create Password" name="psame" required="required">
				<input type="password" class="input-field" id="re-password" placeholder="Confirm Password" name="psame" required="required">
				<input type="text" class="input-field" id="address" placeholder="Address" name="address" required="required">
				<input type="text" class="input-field" id="phone" placeholder="phone number" name="phone" required="required">
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
				
			</form>
			
		</div>

<script>
$(document).ready(function() {
$('#btnSubmit').on('click', function() {

var name = $('#name').val();
var password = $('#password').val();
var repassword =$('#re-password').val();
var email = $('#email').val();
var phone = $('#phone').val();
var address = $('#address').val();
if(name!="" && password !="" && email!="" && phone!="" && address!="" && password==repassword){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			type: 1,
			name: name,
			password: password,
			email: email,
			phone: phone,
			address: address				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				
				$('#fupForm').find('input:text').val('');
				$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}else if(dataResult.statusCode==202){
				alert("this username is already taken by someone !");
			
				window.location.reload();
			}
			
		}
	});
	}
	else{
		if(password != repassword){
			alert('password not match  !');
			$('#fupForm').find('input:text').val('');
	
		}
		alert('Please fill all the field !');

		window.location.reload();
	}
});



////////////


$('#loginbtn').on('click', function() {
$("#loginbtn").attr("disabled", "disabled");
var uname = $('#uname').val();
var upassword = $('#upassword').val();

if(uname!="" && upassword !=""){
	
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			type: 2,
			uname: uname,
			upassword: upassword,
						
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==202){
				$("#loginbtn").removeAttr("disabled");
			
				location.href = "homepage.php";								
			}
			else if(dataResult.statusCode==201){
				alert("Password or username wrong please try again !");
				window.location.reload();
			}else if(dataResult.statusCode==205){
				
				location.href = "quizadd.php";		
			}
			
		}
	});
	}
	else{
		if(uname=="" && upassword ==""){
			alert('password not match  !');
			alert('Please fill all the field !');
			window.location.reload();
		}
		
		
	}
});





});




</script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>