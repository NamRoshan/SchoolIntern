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