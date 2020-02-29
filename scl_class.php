
<?php 

 require_once('inc/db.php');
 echo $class=$_POST['scl_class'];
 
// $query=mysqli_query($conn,"select * from states where country_id='$country_id'");
 // select subject from education where class=1 group by subject having count(subject)>1  
 $query=mysqli_query($obj->con,"select subject from education where class=$class group by subject having count(subject)");
while ($row=mysqli_fetch_array($query)) {
     echo " 
 
         <option value='" .$row['subject']."'>". $row['subject'] ."</option>";
}
 ?>