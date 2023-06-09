
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet"  href="css/codestyle.css">
    
  <script type="text/javascript" src="js/customquize.js"></script> 
   
   
</head>
<body>

<a href='homepage.php'><button class="button aqua">Quit from quiz</button></a>


      
	
       
    <div class="bg"></div>
    
    
    
    <h5 class="system" id="sys" ></h5> 
    
   <h4 id="Answerheading"></h4> 
   
  
  
	


<h4 id="1heading"></h4>
<h4 id="2heading"></h4>
<div class="quiz">
<table   class="table table-bordered table-sm" >
    <thead>
      <tr>
   
      </tr>
    </thead>
    <tbody id="table">

      
    </tbody>
  </table>
<h2 id="4heading">Good Luck !..</h2> 
   
</div>

<div class="class">  </div>



<script>






  $.ajax({
		url: "View_ajax.php",
		type: "POST",
		cache: false,
		success: function(data){
      
        $('#table').html(data); 
      
			
		}
	});




	



  </script>




</body></html>
  