<!DOCTYPE HTML>
<html>
<head>
<title>Konnect A Hosting Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Konnect Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!-- webfonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!-- webfonts -->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->


<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
		
		
		
	
		
		
		
</head>



<body>
<div class="header">
<div class="container">
      <div class="header_bottom"> 
       <div class="col-xs-3 logo">
   	   	 <a href="index.html"><img src="images/logo.png" alt=""/></a>
   	   </div>
   	   <div class="col-xs-9 header_nav">
	   	   <div class="col-xs-9 menu">
					<a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
					  <li class="current"><a href="index.html">Home</a></li>
					  <li><a href="about.html">Why Konnect</a></li>
					  <li><a href="services.html">Services</a></li>
					  <li><a href="404.html">Feedback</a></li>
					  <li><a href="blog.html">Blog</a></li>
					  <li><a href="support.html">Support</a></li>								
					</ul>
					<script type="text/javascript" src="js/responsive-nav.js"></script>
		  </div>
		  
	      <div class="clearfix"></div>		
   	  </div>
   	  <div class="clearfix"></div>
   	  </div>
   </div>
   
   
   <?php
/* get the incoming ID and password hash */
$user = $_POST["Name"];
$pass = $_POST["Password"];
$dbname = "logindatabase";

$conn=mysqli_connect("localhost","root","",$dbname);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
/* SQL statement to query the database */
$query = "SELECT * FROM users WHERE Name = '$user' AND Password = '$pass'";


/* query the database */
$result = mysqli_query($conn,$query);
?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <?php if (mysqli_fetch_row($result)):?>
   
   
   <div class="header_bot_grid">
   <h1><?php echo "Welcome $user";?>
      <h1>Konnect with us for better Experience</h1>
   <div class="header-btns">
	<button class="plans btn btn-primary1 btn-normal btn-inline"  onclick="document.getElementById('upload').style.display='block'" style="width:auto; padding:2% ">Upload</button>
	
	<button class="plans btn btn-primary1 btn-normal btn-inline"  onclick="window.location.assign('search1.php').style.display='block'" style="width:auto; padding:2%">Search</button>

	<button class="plans btn btn-primary1 btn-normal btn-inline"  onclick="window.location.assign('../JavaScriptSpellCheck/SpellCheck.html').style.display='block'" style="width:auto; padding:2% ">Spell Checker</button>
	
		 <!--<a class="plans btn btn-primary1 btn-normal btn-inline" href="plans.html">Log In</a>
		 <a class="plans btn btn-primary2 btn-normal btn-inline" href="SpellCheck.html">Spell Check</a>
		 -->
	    
	  </div>
   </div>
   
   <?php else: ?>

<div class="header_bot_grid">
<h2>Invalid Credentials .Seems like you entered either wrong Username or Password.Try Again!</h2>
   <div class="header-btns">
	<button class="plans btn btn-primary1 btn-normal btn-inline"  onclick="document.getElementById('id01').style.display='block'" style="width:auto; padding:2% ">LOG In</button>
	
	<button class="plans btn btn-primary1 btn-normal btn-inline"  onclick="document.getElementById('id02').style.display='block'" style="width:auto; padding:2%">SIGN UP</button>
	
		 <!--<a class="plans btn btn-primary1 btn-normal btn-inline" href="plans.html">Log In</a>
	    <a class="plans btn btn-primary2 btn-normal btn-inline" href="domain.html">Sign Up</a>-->
	  </div>
	  	
	  

<?php 
endif;
mysqli_close($conn);  
?>

	
	  
	  <span> </span>
   </div>
   
   
   <div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="uv.php">
    

    <div class="container123">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Name" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <button type="submit" style="background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container123" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<div id="id02" class="modal">
  
  <form class="modal-content animate" method="POST" action="signup.php">
    

    <div class="container123">
	<div class=" container123" style="background-color:#f1f1f1"><h2>Sign Up For Konnect!</h2></div>
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Name" required>
	  
	  <label><b>Email</b></label>
      <input type="email" placeholder="Enter Your Email" name="Email" required>


      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
	  
	  <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="cPassword" required>
        
      <button type="submit" style="background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;">Sign UP</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container123" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>



<div id="upload" class="modal">
  
  <form class="modal-content animate" method="POST" enctype="multipart/form-data" action="up.php">
    

    <div class="container123">
      <label><b>File Header</b></label>
      <input type="text" placeholder="Enter File Header" name="header" required>
<br>
      <label><b>File Description</b></label>
      <input type="textarea" placeholder="Enter Short Description of Your Article" name="desc" required>
	  <br><label><b>Choose Your File</b></label>
        <input type="file" name="uploaded_file" />
	<input type="hidden" name="user" value="<?php echo "$user"; ?>"  >
      <button type="submit" name="upload" style="background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;">Upload</button>
      <!--<input type="checkbox" checked="checked"> Remember me
    </div>-->

    <div class="container123" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('upload').style.display='none'" class="cancelbtn">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </form>
</div>




   
   
     
 



















<div class="contact_index">
	<div class="container">
		<div class="col-md-8 contact_index-left">
			<h3>Send Us A Message</h3>
			<div class="contact-form">
				<form>
					<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<input type="submit" value="Send Now">
				</form>
			</div>
		</div>
		<div class="col-md-4 contact_index-right">
			<h3>Quick Links</h3>
			<ul class="footer_social">
			  <li><a href="#"> <i class="email"> </i> </a></li>
			  <li><a href="#"> <i class="chat"> </i> </a></li>
			  <li><a href="#"> <i class="report"> </i></a></li>
			  <li><a href="#"> <i class="phone"> </i></a></li>
			</ul>
		</div>
	</div>
</div>
   
   <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
 <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   </body>
   
   </html>