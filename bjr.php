
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
   ow
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
<html>
<head>
<title>Bajirao Mastani</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<body><div id="header">
<h3 id="hello"> Hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
        <li><a href="index1.php" class="active" >HOME</a></li>
		<li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php">MOVIES</a></li>
        <li><a href="concert.php" >CONCERTS</a></li>
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
<h1> Bajirao Mastani</h1><br><br>
<div id="brm">
<IMG SRC="BR.JPG" align="right">
</div>
<p>Bajirao Mastani is an Indian historical romance film produced and directed by Sanjay Leela Bhansali. The film narrates the story of the Maratha warrior Peshwa (Prime Minister) Bajirao I of the Maratha Empire and his second wife Mastani. Ranveer Singh and Deepika Padukone portray the titular protagonists, and Priyanka Chopra plays Bajirao's first wife Kashibai. The film is scheduled to be released on 18 December 2015.</p>
<br><br>
<ul type="circle">
<li><B>Directed by	:</B> Sanjay Leela Bhansali</li>
<li><B>Screenplay by :</B> Prakash Kapadia</li>
<li><B>Story by : </B>Prakash Kapadia</li>
<li><B>Music by : Original songs:</B>
				Sanjay Leela Bhansali
				<B>Background Score:</B>
				Sanchit Balhara</li>
<li><B>Cinematography :</B> Sudeep Chatterjee</li>
<li><B>Edited by :</B> Rajesh G. Pandey</li>
<li><B>Production company : </B>SLB Films</li>
<li><B>Distributed by :</B> Eros International</li>
<li><B>Release dates :</B> 18 December 2015</li>
<li><B>Running time : </B>256 news</li>
<li><B>Country :</B> India</li>
<li><B>Language : </B>Hindi</li>
<li><B>Budget :</B> ₹120 crore (US$18 million)</li>
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
              <p><a href="bjr..php">BAJIRAO MASTANI</a> Bajirao Mastani is an Indian historical romance film produced and directed by Sanjay Leela Bhansali</p>
              
            </li>
            <li>
              <p><a href="airlft..php">AIRLIFT</a> Airlift is an upcoming Indian film directed by Raja Krishna Menon, and starring Akshay Kumar and Nimrat Kaur in lead roles, and is scheduled for release on 22 January 2016.</p>
              
            </li>
            <li>
              <p><a href="badi..php">World Superseries Finals 2015</a>The 2015 BWF Season is the overall badminton circuit organized by the Badminton World Federation (BWF) for the 2015 badminton season to publish and promote the sport.</p>
             
            </li>
            <li>
              <p><a href="skrillex..php">Skrillex</a> Sonny John Moore,known professionally as Skrillex, is an American electronic music producer, DJ, singer and songwriter.</a></p>
              
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