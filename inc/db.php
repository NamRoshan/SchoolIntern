<?php
	class DB{
		public $con;
		public function __construct(){
			$this->con = mysqli_connect("localhost","root","Roshan12!@","dev_school");
			// if ($this->con) {
			// 	echo "Connected";
			// }
			// else
			// {
			// 	echo "Not Connected";
			// }
		}
	}
	// $obj = new Database;
?>