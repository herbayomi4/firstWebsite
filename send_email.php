<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cancer_immunotherapy_our_community</title>
	</head>
  <body style="background:#d5d5d5;">
  <form action="send_email.php" method="post"> 
		<label>Subject of email:</label><br><input type="text" name="subject" id="subject"><br> 
		<label>Body of email:</label><br><textarea cols="35" rows="10" name="Comments"></textarea><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
<?php 
	
		$user = "root";  
		$password = "";  
		$host = "localhost";  
		$dbase = "newsletter";  
		$table = "community_members";  
 
$from= "cancerimmunotherapybyadeyemi@gmail.com";//specify here the address that you want email to be sent from 
if(isset($_POST['submit'])){
$subject= $_POST['subject']; 
$body= $_POST['Comments']; 
 
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
$query= "SELECT * FROM $table"; 
$result= mysqli_query ($dbc, $query)  
or die ('Error querying database.'); 
 
while ($row = mysqli_fetch_array($result)) { 
$first_name= $row['firstname']; 
$last_name= $row['lastname']; 
$email= $row['email']; 
 echo $first_name;
//$msg= "Dear $first_name $last_name,\n$body"; 
//mail($email, $subject, $msg, 'From:' . $from); 
echo 'Email sent to: '.$email.'<br>'; 
} 
mysqli_close($dbc);  
}
?>
</body>
</html>