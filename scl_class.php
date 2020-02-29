
<?php 


require_once('inc/action.php');
 $where = array(  
              'class'     =>    $_POST['scl_class']
               );  
              
   $single_data = $obj->select_where("education","subject", $where);  

     // var_dump($single_data);
   foreach($single_data as $row)  
   { 
       echo " 

			<option value='" .$row['subject']."'>". $row['subject'] ."</option>";
     }  
 ?>