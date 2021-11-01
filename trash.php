<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OUI STAFF PORTAL</title>
		
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="new.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">      
        <center>
          <h2>OUI STAFF RESULT PORTAL</h2>
          <h4>Welcome</h4>
        </center>
  </div>
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="co_portal.php">College Officer</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="co_portal.php">Upload Senate List</a></li>
        <li><a href="co_get_result">Get Result</a></li>
        <li><a href="co_upload_result.php">Upload Result</a></li>
        <li><a href="register.php">Staff Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

	<main class="row">
  <div class="col-md-1"></div>
  <section class="col-md-10 col-xs-12">
    <h3><center>Register New Staff</center></h3>
    <form method="post" action="register.php" class = "form-group">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">OFFICE</span>
  <select type="text" class="form-control" name="officer" aria-describedby="basic-addon1">
    <option>Lecturer</option>
    <option>Departmental Officer</option>
  </select>
</div>
<!--use form-grou[p on every page-->
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">USERNAME</span>
<input type="text" class="form-control" name="username" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">EMAIL</span>
  <input type="text" class="form-control" name="email" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">PASSWORD</span>
  <input type="text" class="form-control" name="password_1" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">CONFIRM PASSWORD</span>
  <input type="text" class="form-control" name="password_2" aria-describedby="basic-addon1">
</div>
<input type="submit" class="btn" name="register_btn" value="Register"/>

</form>
</section>
</main>
<footer class="site-footer navbar navbar-inverse">
  <h5><center>Developed by <font style="font-style: italic;">herbeysoftweb solutions</font><br><br>Contact: adeyemioluwaseun47@gmail.com<br>+234 9034582835</center></h5>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>