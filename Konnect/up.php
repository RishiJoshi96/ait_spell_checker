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
   











      <div class="header_bot_grid">






<?php


$header = $_POST["header"];
$desc = $_POST["desc"];
$dbname = "logindatabase";
$conn=mysqli_connect("localhost","root","",$dbname);
$author = $_POST["user"];
	if (!$conn) {
		echo "conn failed";
    die("Connection failed: " . mysqli_connect_error());
}


   
		$name = mysqli_real_escape_string($conn,$_FILES['uploaded_file']['name']);
        $mime = mysqli_real_escape_string($conn,$_FILES['uploaded_file']['type']);
        $data = mysqli_real_escape_string($conn,file_get_contents($_FILES['uploaded_file']['tmp_name']));
        $size = mysqli_real_escape_string($conn,intval($_FILES['uploaded_file']['size']));
 
        // Create the SQL query
        $query = "
            INSERT INTO `file`(
             `author`, `header`, `desc`, `name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
             '{$author}', '{$header}', '{$desc}', '{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 

        // Execute the query
        $result = mysqli_query($conn,$query);

        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$conn->error}</pre>";
        }
    
	
	$show = "SELECT * from file where author='$author' ";
$result = mysqli_query($conn,$show);
echo "<h1 style='color:white'>Your uploads <br></h1>";
 while ($row = mysqli_fetch_array($result)) {
	 echo "<center>";
	 
	 echo "<table style='border: 1px solid #ddd;
    text-align: left;
	padding: 15px;
	border-collapse: collapse;
    width: 50%;
	color: white;' ><div class='table'>";
	 echo "<tr>";
	 echo "<td><h3>";
	 echo $row["header"];
	 echo "</td></h3>";
	 echo "<td>";
	 echo $row["created"];
	 echo "</td>";
	  echo "</center>";
	  echo "</tr></div></table>";
 }
    // Close the mysql connection
    $conn->close();


   
   
   
     
 ?>
 
 
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    
   </body>
   
   </html>