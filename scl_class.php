
<?php 

 include('db.php');
 echo $class=$_POST['scl_class'];
 
// $query=mysqli_query($conn,"select * from states where country_id='$country_id'");
 $query=mysqli_query($conn,"SELECT * FROM education WHERE class=$class");
while ($row=mysqli_fetch_array($query)) {
     echo " 
 
         <option value='" .$row['subject']."'>". $row['subject'] ."</option>";
}
 ?>