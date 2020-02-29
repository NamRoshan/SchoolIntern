
<?php 

require_once('inc/action.php');
 $where = array(  
              'class'     =>    $_POST['scl_class'],
              'subject'   =>     $_POST['subject']
               );  
              
   $single_data = $obj->select_where("education","topic", $where);  

     // var_dump($single_data);
   foreach($single_data as $row)  
   { 
       echo " 

			<option value='" .$row['topic']."'>". $row['topic'] ."</option>";
     }  
 ?>