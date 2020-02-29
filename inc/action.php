<?php
	include "db.php";
	class DataOperation extends Database{
		public function insert_record($table, $fields){

			$sql =	"";
			$sql .= "INSERT INTO ".$table;
			$sql .= " (".implode(",", array_keys($fields)).") VALUES ";	
			$sql .= "('".implode("','", array_values($fields))."')";	
			$query = mysqli_query($this->con, $sql);
			
			if ($query) {
				return true;
			}

		}

	    public function select_where($table_name,$column_name, $where_condition)  
      	{  
           $condition = '';  
           $array = array(); 
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5); 

           $query = "SELECT ".$column_name." FROM ".$table_name." WHERE " . $condition." GROUP BY ".$column_name." HAVING COUNT(".$column_name.")";  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
     	} 
	}

	//To take value form form
	$obj = new DataOperation;
	if (isset($_POST["submit"])) {
		$myArray = array(
			"class" => $_POST["class"],
			"subject" => $_POST["subject"],
			"topic" => $_POST["topic"],
			"sub_topic" => $_POST["sub_topic"]

		);

	if ($obj->insert_record("education", $myArray)
		) {
			// header("location:index.php?msg=Record Inserted");
		    echo "insert scussfully";
		}	
	

	}
?>	