<head>
	<style type="text/css">
			.bg1{
background: url(bg.jpg) repeat center center/cover;
  background-attachment:fixed; 
  background-size:auto*1.5rem auto;
  height: 40em;

}
	</style></head>
<?php
include "navbar.php";
?>
<html>
<head>
</head>
<title>
</title>
<body>
	
    	<div class="bg1" style="height: 40em; width: 100%; ">

<div class="container " style="padding-top: 5em; margin-left: 25em" >
  
	<div class="row">
		<div class="col-md-6">
			<div class="card">
  <div class="card-header">
    <strong>New User</strong>
  </div>
  <div class="card-body">
  	
    <p class="card-text">
    	<form method="POST" action="newuser.php">
      
  <div class="row">
  	<div class="col-sm-6">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="username"placeholder="username" required >
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="pass" placeholder="password" required >
  </div>
</div>
</div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form></p>
    
  </div>
</div>
		</div>

</div>
</div>

</body>
</html>