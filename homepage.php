<!DOCTYPE html>
 <!--tech acadamy-->
<html>
<head>
    <link rel="shortcut icon" type="png" href="img\clip-304.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Tech Acadamy</title>
  
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>


<script>
         function slide(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }else {
               var xmlhttp = new XMLHttpRequest();
					
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "search.php?q=" + str, true);
               xmlhttp.send();
            }
         }


      </script>

    
</head>
    
<body>
	
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="img\Colorful-removebg-preview.png" alt="logo"></div>
            <ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#about_section">About</a></li>
				<li><a href="#services_section">Course</a></li>
				<li><a href="quiz.php">Quiz</a></li>
				<li><a href="chat.php">Chat</a></li>
                <li><a href="#contactus_section">Contact</a></li>				
			</ul>
			<form id="serchForm" name="form2" method="post">
            <div class="srch"><input type="text" name="keyword" class="search" placeholder="Search here..." onkeyup=slide(this.value)><button type="submit" name="keys_submit" ><img src="img\juicy-magnifier.png"   alt="search"  ></button></div>
			<p> <a href><span id="txtHint"></span></a></p>
			</form>
			<br>
			
			
			<?php   
$base="w3schools";
$search_URL="http://www.google.com/search?q=";   
if(isset($_POST['keys_submit'])){ 
$keywords=$_POST['keyword'];

 header("location: ".$search_URL.' '.$keywords.' '.$base);
 

}
?>
			<form id="finForm" name="form1" method="post">
	
	<input  class="get-started" type="button" name="butlogout" class="btn btn-primary" value="logout" id="butlogout">
	</form>
			<img src="img\user.png" class="menu" onclick="sideMenu(0)" alt="menu">
			
        </nav>
        
        <div class="head-container">
			<div class="quote">
				<p>Connecting Technology and Innovation: Discover the Future with our </p><p style="color: #6C63FF;">TECH ACADAMY</p>
				<h5>Empower Your Mind with Knowledge, Innovate the Future: Unleash Your Potential with our Website.
                    Our Educational Website would provide all the education related stuffs,Notes, Sample Papers, Online Video Lectures and courses etc.
                 </h5>	
			</div>
            <div class="svg-image">
				<img src="img\undraw_online_learning_re_qw08.svg" alt="svg">
			</div>
		</div>
        
    </header>
	
    <!-- Some Popular Subjects in tech acadamy -->
	<div class="title">
		<br><br>
		<span style="color: #6C63FF;">Popular Subjects On Tech Acadamy </span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		
		<div class="det"><a href="subjects/jee.html#sample_papers"><img src="img\paper.png">Sample Papers</a></div>
        <div class="det det-last"><a href="subjects/computer_courses.html#projects"><img src="img\projects.png">Assignments</a></div>
		
		</div></center>
		<div class="cbox">
		<div class="det"><a href="subjects/computer_courses.html"><img src="img\computer.png">Computer Languages</a></div>
            <div class="det"><a href="subjects/jee.html"><img src="img\book.png">Web development</a></div>
		<div class="det"><a href="subjects/computer_courses.html#data"><img src="img\data.png">Data Structures</a></div>
		
		</div>
	</div>
        <!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px ;color: #6C63FF">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="img\paper.png">
				</div>
				<div class="side-text">
					<h2>What you think about us?</h2>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age. <br>✔ We have made this website as responsive website so, students or users can  
   easily access our website from  any device.  <br>
✔ Quiz Section is an interesting feature for students which provide them with  
   lots of questions. They can view their scores easily and solutions of every questions. <br> 
✔ Assignments – in this we have added a project section where students from schools and  
   colleges </p>
				</div>
           
		</div>
	</div>
        

    
    <!-- Courses -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #6C63FF;">Courses</p></center>
		</div>
		<a href="subjects/computer_courses.html"><div class="s-card"><img src="img/icon/computer-courses.png"><p>Free Online Computer Courses</p></div></a>
		<a href="subjects/jee.html"><div class="s-card"><img src="img/icon/brainbooster.png"><p>Building Concepts for Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/online-tutorials.png"><p>Online Video Lectures</p></div></a>
		<a href="subjects/jee.html#sample_papers"><div class="s-card"><img src="img/icon/papers.jpg"><p>Sample Papers of Various Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/p3.png"><p>Performance and Ranking Report</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="img/icon/discussion.png"><p>Discussion with Our Tutors & Mentors</p></div></a>
		<a href="subjects/quiz.html"><div class="s-card"><img src="img/icon/q1.png"><p>Daily Brain Teasing Questions to Improve IQ</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="img/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>
    
    <!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="color: #6C63FF;font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:shankumarasinha6@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>
    
    
    <!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span style="color: #6C63FF"; >Give Feedback</span>
		<div class="shortdesc2">
        <p style="color: #6C63FF";>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:jayapradha316@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>
    
    <!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #9999B5, #6C63FF); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="img\Colorful-removebg-preview.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="img/icon\fb.png"></a>
					<a href="#"><img src="img/icon\insta.png"></a>
					<a href="#"><img src="img/icon\tt.png"></a>
					<a href="#"><img src="img/icon\ytube.png"></a>
					<a href="#"><img src="img/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By Group-09 All Rights Reserved.</p>
				<br><p><img src="img/icon/location.png"> University of Vavuniya <br>  Vavuniya,Srilanka</p><br>
			
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
	<script>


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
</script>
</body>
</html>