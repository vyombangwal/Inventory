<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="inventory";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$catid=$_POST['catid'];	
$subname=$_POST['datapost'];
$user=$_SESSION["user"];
$sql1="SELECT name FROM category WHERE catid='$catid'";

$result1=mysqli_query($conn,$sql1);

$sql2="SELECT quantity FROM subcategory WHERE catid='$catid' AND name='$subname' AND user='$user'";
$result2=mysqli_query($conn,$sql2);
$sql3="SELECT unitcost FROM stockin WHERE catid='$catid' AND subcat='$subname' AND user='$user'";
$result3=mysqli_query($conn,$sql3);


  $sql4="SELECT name,quantity FROM subcategory WHERE catid='$catid' AND user='$user'";
$result4=mysqli_query($conn,$sql4);
$sql="DELETE FROM subcategory WHERE catid='$catid' AND user='$user' AND name='$subname'";
$result=mysqli_query($conn,$sql);
?>


<tr>
    <?php
      if(mysqli_num_rows($result2)==0)
        { if (mysqli_num_rows($result1)>0){

          while ($row1=mysqli_fetch_array($result1)) 
          { while( $row4=mysqli_fetch_array($result4)){
           $sql5="SELECT unitcost FROM stockin WHERE catid='$catid' AND user='$user' AND subcat='$row4[0]'";
          
$result5=mysqli_query($conn,$sql5);
 $row5=mysqli_fetch_row($result5);
        ?>
        <td id="catid"><?php echo $catid;?></td>
        <td><?php echo $row1[0];?></td>
        <td id="subcat"><?php echo $row4[0];?><button class="btn btn-outline" style="padding-top:1px;"><i class="fas fa-trash-alt" onclick="myfun()"></i></button></td>
        <td><?php echo $row4[1];?></td>
        

    </tr>
    <?php
}
}}
} else{  if(mysqli_num_rows($result2)>0){
         if(mysqli_num_rows($result1)>0)
         {
          while($row1=mysqli_fetch_array($result1))
          {       
            $row2=mysqli_fetch_row($result2);
            $row3=mysqli_fetch_row($result3);
           ?>
        <td id="catid"><?php echo $catid;?></td>
        <td><?php echo $row1[0];?></td>
        <td id="subcat"><?php echo $subname;?><button class="btn btn-outline" style="padding-top:1px;"><i class="fas fa-trash-alt" onclick="myfun()"></i></button></td>
        <td><?php echo $row2[0];?></td>
         
        

    </tr>
    <?php
}}}}
?>
</tr>


