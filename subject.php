
<?php 
 $conn=mysqli_connect("localhost","root","Roshan12!@","dev_school");
 echo $subject=$_POST['subject'];
 echo $scl_class=$_POST['scl_class'];
// $query=mysqli_query($conn,"select * from states where country_id='$country_id'");
 $query=mysqli_query($conn,"SELECT * FROM education WHERE subject='$subject' AND class=$scl_class");
while ($row=mysqli_fetch_array($query)) {
     echo " 
 
         <option value='" .$row['topic']."'>". $row['topic'] ."</option>";
}
 ?>