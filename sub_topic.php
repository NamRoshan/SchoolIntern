
<?php 
 require_once('inc/action.php');
 $where = array(  
              'class'     =>    $_POST['scl_class'],
              'topic'   =>     $_POST['topic']
               );  
              
   $single_data = $obj->select_where("education","sub_topic", $where);  

     // var_dump($single_data);
   foreach($single_data as $row)  
   { 
       echo " 

			<option value='" .$row['sub_topic']."'>". $row['sub_topic'] ."</option>";
     }  
 ?>