<!DOCTYPE html>
 <!--tech acadamy-->
<html>
<head>
    <link rel="shortcut icon" type="png" href="img\clip-304.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Tech Acadamy</title>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
	
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
    
</head>
    
<body>
	

<a href="homepage.php"><button class="button aqua" >Quit</button></a><br><br>
	<h1>quize maker</h1>
    <p>Now you can custermize your own quizes in our databases so try it now</p>
	<h3>Delete quiz</h3>
	<div>
	<form id="fupForm" name="form1" method="post">
		
			<label for="id">Quize Id:</label>
			<input type="text" class="form-control" id="id" placeholder="enter quize id" name="id">
		
		
		<input type="submit" name="del" class="btn btn-primary" value="delete" id="del">
	</form>
	
</div>



<h3>Insert a quiz</h3>
	<div>
	<form id="fupForm" name="form2" method="post">
		
			
			<input type="text" class="input-field" id="id2" name="id" placeholder="Id" required="required"></td></tr>
<tr><td>Question</td><td><input type="text" class="input-field"  id="q" placeholder="Question" required="required"></td></tr>
<tr><td>Answer a</td><td><input type="text" class="input-field" id="a" placeholder="answer a" name="a" required="required"></td></tr>
<tr><td>Answer b</td><td><input type="text" class="input-field" id="b" placeholder="answer b" name="b" required="required"></td></tr>
<tr><td>Answer c</td><td><input type="text" class="input-field" id="c" placeholder="answer c" name="c" required="required"></td></tr>
<tr><td>Answer d</td><td><input type="text" class="input-field" id="d" placeholder="answer d" name="d" required="required"></td></tr>
<tr><td>Correct Answer stored letter</td><td> <input type="text" class="input-field" id="ans" placeholder="answer" name="ans" required="required"></td></tr>
<tr><td>Correct Answer value</td><td> <input type="text" class="input-field" id="ansval" placeholder="answer value" name="ansval" required="required"></td></tr>
<input type="submit" name="inbtn" class="btn btn-primary" value="add" id="inbtn">

		
	</form>
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
</div>


<h3>Update a quiz</h3>
	<div>
	<form id="fupForm" name="form2" method="post">
		
			
			<input type="text" class="input-field" id="id3" name="id" placeholder="Id" required="required"></td></tr>
<tr><td>Question</td><td><input type="text" class="input-field"  id="q3" placeholder="Question" required="required"></td></tr>
<tr><td>Answer a</td><td><input type="text" class="input-field" id="a3" placeholder="answer a" name="a" required="required"></td></tr>
<tr><td>Answer b</td><td><input type="text" class="input-field" id="b3" placeholder="answer b" name="b" required="required"></td></tr>
<tr><td>Answer c</td><td><input type="text" class="input-field" id="c3" placeholder="answer c" name="c" required="required"></td></tr>
<tr><td>Answer d</td><td><input type="text" class="input-field" id="d3" placeholder="answer d" name="d" required="required"></td></tr>
<tr><td>Correct Answer stored letter</td><td> <input type="text" class="input-field" id="ans3" placeholder="answer" name="ans" required="required"></td></tr>
<tr><td>Correct Answer value</td><td> <input type="text" class="input-field" id="ansval3" placeholder="answer value" name="ansval" required="required"></td></tr>
<input type="submit" name="upbtn" class="btn btn-primary" value="add" id="upbtn">

		
	</form>
	
</div>


    
    
    
    
  
	<script>




$(document).ready(function() {
$('#del').on('click', function() {

var id = $('#id').val();

if(id!="" ){
	$.ajax({
		url: "quizehandeler.php",
		type: "POST",
		data: {
			type:0,
			id: id
						
		},
		cache: false,
		success: function(dataResult){
            alert("hhhhh");
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				
				
				
				alert('Data delete successfully !'); 
				window.location.reload();						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
				window.location.reload();
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
////////////////////////////

$('#inbtn').on('click', function() {

var id = $('#id2').val();
var q = $('#q').val();
var a =$('#a').val();
var b = $('#b').val();
var c = $('#c').val();
var d = $('#d').val();
var ans = $('#ans').val();
var ansval= $('#ansval').val();

if(id!="" && q !="" && a !="" && b!=""&& c!=""&& d!=""&& ans!=""&& ansval!="" ){
	$.ajax({
		url: "quizehandeler.php",
		type: "POST",
		data: {
			type: 1,
			id: id,
			q:q,
			a: a,
			b: b,
			c: c,
			d: d,
			ans: ans,
			ansval: ansval	
		},
		cache: false,
		success: function(dataResult){
            alert(dataResult);
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
			
				
			
				alert('Data inserted successfully !'); 	 
				window.location.reload();						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
				window.location.reload();
			}else if(dataResult.statusCode==202){
				alert("There is same id in database !");
				window.location.reload();
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
/////////////////////////////////

$('#upbtn').on('click', function() {

var id = $('#id3').val();
var q = $('#q3').val();
var a =$('#a3').val();
var b = $('#b3').val();
var c = $('#c3').val();
var d = $('#d3').val();
var ans = $('#ans3').val();
var ansval= $('#ansval3').val();

if(id!="" && q !="" && a !="" && b!=""&& c!=""&& d!=""&& ans!=""&& ansval!="" ){
	$.ajax({
		url: "quizehandeler.php",
		type: "POST",
		data: {
			type: 2,
			id: id,
			q:q,
			a: a,
			b: b,
			c: c,
			d: d,
			ans: ans,
			ansval: ansval	
		},
		cache: false,
		success: function(dataResult){
            alert(dataResult);
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
			
				
			
				alert('Data updated successfully !'); 	
				window.location.reload(); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
				window.location.reload();
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
		window.location.reload();
	}
});

////////////////////////////////

$('#butlogout').on('click', function() {

$.ajax({
   
    url: "logout.php",
		type: "POST",
	
		cache: false,
        success: function(dataResult){
            location.href = "index.php";	
        }
        
		
    });
	});

});


</script>
</body>
</html>