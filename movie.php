
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
if($uname==="NULL")
{
	header('location: check.php');
}



 
$conn->close();
?>
<html >
<head>
<title>Movies</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
<h1> MOVIES</h1><br><br>

<table>
<tr>
<td><a href="bro.php"><img src="b1.jpg"></a></td>
<td><b>BROTHERS</b>:This movie is about the relationship between two brothers and the problems between them due to their personal problems. Both the stars are playing the role of Boxers in the movie. Our very own Khiladi is looking very handsome while wearing the Boxing gloves while Sidharth is looking charming in it.</td>
</tr>
<tr>
<td><a href="talvar.php"><img src="t1.jpg"></a></td>
<td><b>TALVAR</b>: The film is based on the 2008 Noida double murder case, in which a teenage girl and her family servant were found murdered, and her parents were convicted for the murders. The film stars Irrfan Khan, Konkona Sen Sharma, Neeraj Kabi and Sohum Shah in leading roles[5] and Tabu in a guest appearance.</td>
</tr>
<tr>
<td><a href="baahu.php"><img src="b.jpg"></a></td>
<td><b>BAAHUBALI</b>:Baahubali: The Beginning is a 2015 Indian bilingual epic historical fiction film directed by S. S. Rajamouli. Produced by Shobu Yarlagadda and Prasad Devineni, it is the first of two cinematic parts. . A fictional story of two warring brothers fighting for control of an ancient Indian kingdom, it stars Prabhas, Rana Daggubati, Tamannaah and Anushka Shetty in lead roles. </td>
</tr>
<tr>
<td><a href="martin.php"><img src="m1.jpg"></a></td>
<td><b>THE MARTAIN</b>:The Martian is a 2015 American science fiction film directed by Ridley Scott and starring Matt Damon. The film is based on Andy Weir's 2011 novel of the same name, which was adapted into a screenplay by Drew Goddard. Damon stars as an astronaut who is mistakenly presumed dead and left behind on Mars, depicting his struggles to survive and others' efforts to rescue him.</td>
</tr>
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
   
  </div>
</div>
</body>
</html>