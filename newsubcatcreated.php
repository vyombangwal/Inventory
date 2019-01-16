<?php
include "navbar.php";
$catid=$_POST['catid'];
$subname=$_POST['subcatname'];
$subquan=$_POST['subcatquan'];
$des=$_POST['des'];


$sql="INSERT INTO subcategory(name,description,quantity,catid) VALUES('$subname','$des','$subquan','$catid')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "inserted succesfully";?>
	<html>
	<head></head>
	<title></title>
	<body><a href=index.php><button>go back</button></a>
	</body>
	</html>
<?php }
else{
	echo "failed with stupid error";
}
?>
