
<?php 
 $conn=mysqli_connect("localhost","root","Roshan12!@","dev_school");
 echo $subject=$_POST['subject'];
 echo $scl_class=$_POST['scl_class'];
 echo $topic=$_POST['topic'];
// $query=mysqli_query($conn,"select * from states where country_id='$country_id'");
 $query=mysqli_query($conn,"SELECT * FROM education WHERE subject='$subject' AND class=$scl_class AND topic='$topic'");
while ($row=mysqli_fetch_array($query)) {
     echo " 
 
         <option value='" .$row['sub_topic']."'>". $row['sub_topic'] ."</option>";
}
 ?>