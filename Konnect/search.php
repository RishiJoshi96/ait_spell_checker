

<?php
$dbname = "logindatabase";
$output = '';
$conn=mysqli_connect("localhost","root","",$dbname);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	/*$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);*/
	
	$query = "SELECT * FROM file 
	WHERE header LIKE '$searchq'";


/* query the database */
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);

if($count == 0){
	echo "NO RESULTS";
}else {
	while($row = mysqli_fetch_array($result)){
		$author = $row['author'];
		$header = $row['header'];
		
	$output .= '<div>'.$author.' '.$header.'</div>';
		
	}
}
	
	
}





?>







<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>
search
</title>
</head>
<body>
<form action="search.php" method="POST">

<input type="text" name="search" placeholder="Search here">
<input type="submit" value=">>" >
</form>
<?php print("$output"); ?> 

</body>
</html>