<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$unam;
$umail;
	
// Create connection
$conn = new mysqli($servername, $username, $password);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "use project";

if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sql = "SELECT uname,email FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $uname=$row["uname"];
	$umail=$row["email"];
    }
} else {
    echo "0 results";
}
if($uname==="NULL")
{
	header('location: check.php');
}



 
$conn->close();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Movies</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="css/images/favicon.ico" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="header">
<h3 id="hello"> hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
         <li><a href="index1.php" >HOME</a></li>
		 <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php" >MOVIES</a></li>
        <li><a href="concert.php">CONCERTS</a></li>
        
        <li><a href="sport.php" class="active">SPORTS</a></li>
		<li><a href="fest.php">FESTS</a></li>
        <li><a href="in.php">SIGN UP</a></li>
        <li> <a href="up.php">SIGN IN</a></li>
		<li> <a href="out.php">SIGN OUT</a></li>
 
		
      </ul>
	   
    </div>
    <div class="cl">&nbsp;</div>
    <div class="socials"> <a href="#" class="socials-facebook">facebook</a> <a href="#" class="socials-twitter">twitter</a> </div>
  </div>
</div>
<div id="slider">
  <div class="shell">
    <ul>
      <li>
        <div class="image"> <img src="2.jpg" alt="" height="300px" width="300px"/> </div>
        <div class="data">
          <h2 class="slider-h">Nam quis nisi nisi quis.</h2>
          <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&quot;</p>
          <a href="#" class="button">SEE THE PROJECT &gt;</a> </div>
      </li>
      <li>
        <div class="image"> <img src="css/images/slide-1.jpg" alt="" /> </div>
        <div class="data">
          <h2 class="slider-h">Nam quis nisi nisi quis.</h2>
          <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&quot;</p>
          <a href="#" class="button">SEE THE PROJECT &gt;</a> </div>
      </li>
      <li>
        <div class="image"> <img src="css/images/slide-1.jpg" alt="" /> </div>
        <div class="data">
          <h2 class="slider-h">Nam quis nisi nisi quis.</h2>
          <p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&quot;</p>
          <a href="#" class="button">SEE THE PROJECT &gt;</a> </div>
      </li>
    </ul>
  </div>
</div>
<br><br>
<div id="main">
<div class="bg-top">
<div class="shell">
<h1>SPORTS</h1><br><br>

<table>
<tr>

</table>
</div>

</div>
</div>
<div id="footer">
  <div class="shell">
    <div class="top">
  <div id="twitter">
        <h2>COMING SOON</h2>
        
        <div class="cl">&nbsp;</div>
        <div class="twitter-posts">
          <ul>
            <li>
              <p><a href="bjr.php">BAJIRAO MASTANI</a> Bajirao Mastani is an Indian historical romance film produced and directed by Sanjay Leela Bhansali</p>
              
            </li>
            <li>
              <p><a href="airlft.php">AIRLIFT</a> Airlift is an upcoming Indian film directed by Raja Krishna Menon, and starring Akshay Kumar and Nimrat Kaur in lead roles, and is scheduled for release on 22 January 2016.</p>
              
            </li>
            <li>
              <p><a href="badi.php">World Superseries Finals 2015</a>The 2015 BWF Season is the overall badminton circuit organized by the Badminton World Federation (BWF) for the 2015 badminton season to publish and promote the sport.</p>
             
            </li>
            <li>
              <p><a href="skrillex.php">Skrillex</a> Sonny John Moore,known professionally as Skrillex, is an American electronic music producer, DJ, singer and songwriter.</a></p>
              
            </li>
          </ul>
        </div>
      </div>
	
	
      <div id="flickr">
        
      
        <div class="cl">&nbsp;</div>
        <div class="flickr-pics">
          <ul>
            <li> <a href="ashwin.php"><img src="ashwin.jpg" alt="Ashwin shines as India clinch series with third Test win" ></a> </li>
            <li> <a href="sun.php"><img src="sun.jpg" alt="Sunburn Festival 2015" ></a> </li>
            
            <li class="last"> <a href="rd.php"><img src="rd.jpg" alt="Deepika Padukone, Ranbir Kapoor starrer ‘Tamasha’ earns Rs. 24.04 cr in two days" ></a> </li>
            <li> <a href="starc.php"><img src="starc.jpg" alt="Injured Starc unsure when he'll bowl again for Australia" ></a> </li>
            <li> <a href="rs.php"><img src="rs.jpg" alt="Why Is Ranveer Singh Not Worried About ‘Dilwale-Bajirao Mastani’ Clash?" ></a> </li>
            
            <li class="last"> <a href="tamasha.php"><img src="tamasha.jpg" alt="Deepika Padukone And Ranbir Kapoor Create More Tamasha At College Festival!" ></a> </li>
            <li> <a href="sa.php"><img src="sa.jpg" alt="Awesome threesome have made SA batsmen look club class" ></a> </li>
            <li> <a href="narine.php"><img src="narine.jpg" alt="Sunil Narine suspended from international cricket for illegal bowling action" ></a> </li>
            
            <li class="last"> <a href="ns.php"><img src="ns.jpg" alt="Naseeruddin Shah To Be Honoured At Dubai International Film Festival" ></a> </li>
          </ul>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div class="footerlink">
      <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="rf"><a href="http://all-free-download.com/free-website-templates/">Free CSS Templates</a> by <a href="http://chocotemplates.com/">ChocoTemplates.com</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>