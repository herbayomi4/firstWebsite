<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cancer_immunotherapy_our_community</title>
	<link href="fonts.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background:#d5d5d5;">
  
<?php
		$user = "root";  
		$password = "";  
		$host = "localhost";  
		$dbase = "newsletter";  
		$table = "community_members";  

		// Connection to DBase  
		$dbc= mysqli_connect($host,$user,$password, $dbase)  
		or die("Unable to select database"); 
	
		$firstname=$_POST['first_name'];
		$lastname=$_POST['last_name'];
		$email= $_POST['email']; 
		$sql= "INSERT INTO $table (firstname, lastname, email)
				VALUES('$firstname', '$lastname', '$email')"; 
 
		if(mysqli_query($dbc, $sql)){
			print '<header>
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="home.php"><img src="images/download.jpg" style="height:35px; width:70px; margin-top:none;"></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a href="home.php">Cancer</a></li>
		<li><a href="immunotherapy.html">Immunotherapy</a></li>
		<li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="news.html">News & Updates</a></li>
      </ul>
	  <form class="navbar-form navbar-right" method="get" action="search.php" name="searchform" onsubmit="return validateSearch()">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <input type="submit" class="btn btn-default" value="Go">
      </form>
		</div>
		</div>
	</nav>
	<img src= "images/1.jpg" id= "img1" style= "width:100%; height:300px; margin-top:50px; margin-bottom:20px;" >
  </header>
  
	<main class="container-fluid">
	<div class="row">
	<div class="col-md-7 col-xs-12">
		<div class="alert alert-success" role="alert">
			<h3 class="alert alert-info" role="alert">Welcome to our community!</h3>
			<p class="text text-justify">Dear '.$firstname.', your sign up was successful. You are now a member of this great community of people of like minds interested in equipping themselves 
			with right infos about cancer immunotherapy. </br></br> You will receive mails from us about important updates, news and links to download research articles.</p>
		</div>
	</div>
	
	
	<section class="col-md-5 col-xs-12">
			<div class="thumbnail">
				<h3 id="topic">News Update</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.cancer.gov/about-cancer/treatment/types/immunotherapy/bio-therapies-fact-sheet">Biological Therapies for Cancer</a></li>
					<li class="list-group-item"><a href="https://www.cancer.gov/about-cancer/treatment/research/car-t-cells">CAR T-Cell Therapy: Engineering Patients\' Immune Cells to Treat Their Cancers</a></li>
					<li class="list-group-item"><a href="https://www.cancer.gov/news-events/press-releases/2013/PediatricImmunotherapy">Cancer Immunotherapy in Children: How does it differ from approaches in Adults</a></li>
				</ul>
			</div>
			
		</section>
	</div></main>
			<footer class="site-footer">
		<div class="container"> 
		<p>For further enquries Please contact us via adeyemioluwaseun47@gmail.com</p>
			<div class="bottom-footer">
			<div class="row"><div class="col-md-7">
				<ul class="footer-nav">
						<li><a href="home.php">Cancer</a></li>
						<li><a href="immunotherapy.html">Immunotherapy</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="news.html">News & Updates</a></li>
				</ul><p>This site was designed and built by AOSweb (+2349034582835, +234811467502)</p></div>
				<div class="col-md-5"><p>© Copyright Cancer_Immunnotherapy Tutors 2017.</p></div></div>
		
			</div></div>
		</footer>
	';
		}else{
			print "Error: " . $sql . "<br>" . mysqli_error($dbc);
		}
		mysqli_close($dbc); 
	
  ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
	setInterval(imgChange, 1500);
		var imgs=["images/1.jpg", "images/2.jpg"];
		var i=0;

    	function imgChange() {
		var img=document.getElementById('img1');
		i++
		if(i>=imgs.length){
			i=0;
		}
		img.src=imgs[i];
}
    </script>
	</body>
	</html>