	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$unam;
$umail;
	

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "use project";

if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sql = "SELECT uname,email FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    $uname=$row["uname"];
	$umail=$row["email"];
    }
} else {
    echo "0 results";
}



 
$conn->close();
?>

<html >
<head>
<title>Drishyam</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" >
</head>
<body><div id="header">
<h3 id="hello"> Hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
        <li><a href="index1.php" >HOME</a></li>
		<li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php" class="active">MOVIES</a></li>
        <li><a href="concert.php">CONCERTS</a></li>
        <li><a href="theatre.php">THEATRES</a></li>
        
		<li><a href="fest.php">FESTS</a></li>
		<li><a href="profile.php"> PROFILE</a></li>
        <li><a href="up.php">SIGN UP</a></li>
        <li> <a href="in.php">SIGN IN</a></li>
         <li> <a href="out.php">SIGN OUT</a></li>
      </ul>
    </div>
    <div class="cl">&nbsp;</div>
  
  </div>
</div>
<div id="marq">
<marquee behavior="scroll" scrollamount="10" hspace="10px"><a href="kapil.php"><img src="k.jpg"></a><a href="tamasha.php"><img src="tamasha.jpg"></a><a href="skrillex.php"><img src="Skrillex.jpg"></a><a href="bro.php"><img src="b1.jpg"></a><a href="drishyam.php"><img src="dd.jpg"></a><a href="pkp2.php"><img src="8.jpg"></a><a href="talvar.php"><img src="tl.jpg"></a><a href="kapil.php>"<img src="k.jpg"></a></marquee>
</div>
<div id="main">
<div class="bg-top">
<div class="shell">
<h1> Drishyam</h1><br><br>
<div id="brm">
<IMG SRC="dd.JPG" align="right">
</div>
<p>Drishyam (English: Visual/The Sight) is a 2015 Indian thriller drama film directed by Nishikant Kamat. It features Ajay Devgn, Shriya Saran and Tabu in the lead roles, and produced by Kumar Mangat Pathak, Ajit Andhare and Abhishek Pathak. The film is a remake of Jeethu Joseph's 2013 Malayalam film Drishyam. The film was released 31 July 2015</p>
<br><br>
<ul type="none">
<li><b>Directed by :</b> Nishikant Kamat</li>
<li><b>Produced by :</b> Kumar Mangat Pathak ,Ajit Andhare,Abhishek Pathak</li>
<li><b>Written by : </b>Upendra Sidhaye</li>
<li><b>Story by :</b> Jeethu Joseph, Upendra Sidhaye</li>
<li><b>Starring :</b> Ajay Devgn ,Shriya Saran ,Tabu ,Rajat Kapoor</li>
<li><b>Music by : </b>Songs:Vishal Bhardwaj ,Background Score:Sameer Phatarpekar</li>
<li><b>Cinematography : </b>Avinash Arun</li>
<li><b>Edited by :</b> Aarif Sheikh</li>
<li><b>Production company :</b> Panorama Studios</li>
<li><b>Distributed by : </b>Viacom 18 Motion Pictures</li>
<li><b>Release dates :</b> 31 July 2015</li>
<li><b>Running time :</b> 163 minutes</li>
<li><b>Country : </b>India</li>
<li><b>Language :</b> Hindi</li>
<li><b>Budget :</b> ₹62 crore (US$9.4 million)</li>
<li><b>Box office :</b> est. ₹73.84 crore (US$11 million)</li>
<li>&nbsp;</li><br><br>
</ul>
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
   
  </div>
</div>
</body>
</html>