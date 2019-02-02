<head>
	<style type="text/css">
			.bg1{
background: url(bg.jpg) repeat center center/cover;
  background-attachment:fixed; 
  background-size:auto*1.5rem auto;
  height: 40em;
   }
	</style></head><div class="bg1">
<?php
include "navbar.php";
session_start();
$user=$_POST['username'];
$pass=$_POST['pass'];



$sql="INSERT INTO users(username,password) VALUES('$user','$pass')";
$result=mysqli_query($conn,$sql);
if($result){
	?>
	<div class="container  " style="padding-top:5em;">
  <div class="jumbotron " style="color:white;background-color:rgba(0,6,1,0.5);">
    <h1>SUCCESS</h1> 
    <p>User Added successfully</p> 
  </div>
  
</div>
	<?php
}
	 
else{
	?>
	<div class="container  " style="padding-top:5em;">
  <div class="jumbotron " style="color:white;background-color:rgba(0,6,1,0.5);">
    <h1>ERROR</h1> 
    <p>Failed to create</p> 
  </div>
  
</div><?php
}
?>
</div>