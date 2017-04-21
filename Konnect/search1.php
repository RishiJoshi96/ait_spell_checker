<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--  <link rel="stylesheet" type="text/css" href="style.css"/>-->
	
	
	
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
   














    <form action="search1.php" method="GET">
	<center>
       <span style="width: 50%;
    padding: 12px 20px;
    
    display: inline-block;
    
    box-sizing: border-box;"> <input  type="text" name="query" /></span>
        <br>
	
		<input class="plans btn btn-primary1 btn-normal btn-inline" style=" background-color:#264068; width:auto; padding:2%; " type="submit" name="submit" value="Search" />
		</center>
		
    </form>





	
	
	











<div class="header_bot_grid">
<?php

$dbname = "logindatabase";

$conn=mysqli_connect("localhost","root","",$dbname);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	
if(isset($_GET['submit'])){



$query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($conn,"SELECT * FROM file
            WHERE (`author` LIKE '%".$query."%') OR (`header` LIKE '%".$query."%')") or die(mysqli_error($conn));
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
		
    
            while($results = mysqli_fetch_array($raw_results)){
				$name = $results['name'];
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<div class='table'><center><table style='border-collapse: collapse;
    width: 50%;     border: 1px solid #ddd;
    text-align: left;'><tr style='    border: 1px solid #ddd;
    text-align: left; padding: 15px'><td ><p><h3>".$results['author']."</h3></td><td style='border: 1px solid #ddd; padding: 15px;'>".$results['header']."</p> </td><td style='padding: 15px; border: 1px solid #ddd;'><a href=\"search1.php?name=\$name\">Download</a></td></tr></table></div></center>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
}	
	
    if(isset($_GET['name'])){
        $name    = $_GET['name'];   
        $query = "SELECT name, mime, size, data FROM file WHERE name = '$name'";       
        $result = mysqli_query($conn,$query) or die('Error, query failed');
        list($name, $type, $mime, $data) =  mysqli_fetch_row($result);
        header("Content-Disposition: attachment; filename=\"$name\"");
        header("Content-type: $type");
        header("Content-length: $mime");
        print $data;
    }

		 
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