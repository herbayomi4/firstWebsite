<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cancer_immunotherapy_symptoms</title>
	<link href="fonts.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background:#d5d5d5;">
  <header>
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
        <li class="active dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cancer <span class="caret"></span><span class="sr-only">(current)</span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php">What is Cancer?</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="symptoms.php">Symptoms</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="causes.php">Causes of Cancer</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="diagnosis.php">Diagnosis</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="treatments.php">Treatments</a></li>
		</ul>
		</li>
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
  
	<main class="container">
	<div class="row">
	<div class="col-md-9"><h2 id="topic"><b>Symptoms of Cancer</b></h2>
		<div class="col-md-4 col-xs-12"><img src= "images/Symptoms.png" alt= ""></div>
		<div class="col-md-8 co-xs-12">
			<p class="text text-justify">When cancer begins, it produces no symptoms. Signs and symptoms appear as the mass grows or ulcerates. The findings that result depend on the cancer's type and location. Few symptoms are specific. Many frequently occur in individuals who have other conditions. Cancer is a "great imitator". Thus, it is common for people diagnosed with cancer to have been treated for other diseases, which were hypothesized to be causing their symptoms. 
			People may become anxious or depressed post-diagnosis. The risk of suicide in people with cancer is approximately double.</p> 
			</div>
			<h3><b>Local Symptoms</b></h3>
			<p class="text text-justify">Local symptoms may occur due to the mass of the tumor or its ulceration. For example, mass effects from lung cancer can block the bronchus resulting in cough or pneumonia; esophageal cancer can cause narrowing of the esophagus, making it difficult or painful to swallow; and colorectal cancer may lead to narrowing or blockages in the bowel, affecting bowel habits. Masses in breasts or testicles may produce observable lumps. Ulceration can cause bleeding that, if it occurs in the lung, will lead to coughing up blood, in the bowels to anemia or rectal bleeding, in the bladder to blood in the urine and in the uterus to vaginal bleeding. Although localized pain may occur in advanced cancer, the initial swelling is usually painless. Some cancers can cause a buildup of fluid within the chest or abdomen.</p>
			<h3><b>Systemic Symptoms</b></h3>
			<p class="text text-justify">General symptoms occur due to effects that are not related to direct or metastatic spread. These may include: unintentional weight loss, fever, excessive fatigue and changes to the skin. Hodgkin disease, leukemias and cancers of the liver or kidney can cause a persistent fever.<br>Some cancers may cause specific groups of systemic symptoms, termed paraneoplastic syndrome. Examples include the appearance of myasthenia gravis in thymoma and clubbing in lung cancer.</p>
			<h3><b>Metastasis</b></h3>
			<p class="text text-justify">Cancer can spread from its original site by local spread, lymphatic spread to regional lymph nodes or by hematogenous spread via the blood to distant sites, known as metastasis. When cancer spreads by a hematogenous route, it usually spreads all over the body. However, cancer 'seeds' grow in certain selected site only ('soil') as hypothesized in the soil and seed hypothesis of cancer metastasis. The symptoms of metastatic cancers depend on the tumor location and can include enlarged lymph nodes (which can be felt or sometimes seen under the skin and are typically hard), enlarged liver or enlarged spleen, which can be felt in the abdomen, pain or fracture of affected bones and neurological symptoms.</p>
	</div>
					
		<section class="col-md-3 col-xs-12">
			<div class="thumbnail">
				<h3>Join our community</h3>
				<div class="thumbnail">
				<p class="alert alert-info" role="alert">Have you read through our informative articles and you loved it? </p>
				<p class="text-justify">You can join our community and receive free emails on news, reviews 
				from World important cancer conferences and relevant updates on cancer treatments and research.</p> <p>Please fill the form below to join our community</p></div> 
				<p class="alert alert-danger" role="alert">NB: Our members will automatically receive our newsletters!</p>
				<form name="community" method="post" action="our_community.php" onsubmit="return validateForm()">
					<input type="text" class="form-control" placeholder="First Name" name="first_name">
					<input type="text" class="form-control" placeholder="Last Name" name="last_name" >
					<input type="email" class="form-control" placeholder="Email" name="email" >
					<input type="submit" name="submit" value="Sign up">
				</form>
				
			</div>
			<div class="thumbnail">
				<h3>News Update</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.cancer.gov/about-cancer/treatment/types/immunotherapy/bio-therapies-fact-sheet">Biological Therapies for Cancer</a></li>
					<li class="list-group-item"><a href="https://www.cancer.gov/about-cancer/treatment/research/car-t-cells">CAR T-Cell Therapy: Engineering Patients' Immune Cells to Treat Their Cancers</a></li>
					<li class="list-group-item"><a href="https://www.cancer.gov/news-events/press-releases/2013/PediatricImmunotherapy">Cancer Immunotherapy in Children: How does it differ from approaches in Adults</a></li>
				</ul>
			</div>
		</section>
		</div>

		</main>
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
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
function validateForm() {
    var x = document.forms["community"]["first_name"].value;
	var y = document.forms["community"]["last_name"].value;
	var z = document.forms["community"]["email"].value;
    if ((x == null || x == "")&&(y == null || y == "")&&(z == null || z == "")) {
        return false;
    }
}
    </script>
	
	
  </body>
</html>