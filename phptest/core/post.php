<?php

class Post
{
		private $con;
		private $tb ='student_data';
		
		public $id;
		public $name;
		public $mobile;
		public $branch;
		public $date;
		
		
		public function __construct($db)
		{
	
			$this->con=$db;
		}

		public function read()
		{
			$query ='SELECT id, name, mobile, branch, date FROM '.$this->tb.' ORDER BY date DESC';
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			return $stmt;
		}
		public function insert_data()
		{
			$query='INSERT into '.$this->tb.' set name= :name, mobile= :mobile, branch= :branch';
			$stmt = $this->con->prepare($query);
			$this->name 	=htmlspecialchars(strip_tags($this->name));
			$this->mobile   =htmlspecialchars(strip_tags($this->mobile));
			$this->branch   =htmlspecialchars(strip_tags($this->branch));
			
			//binding the paramaeters
			
			$stmt->bindParam(':name', $this->name);
			$stmt->bindParam(':mobile', $this->mobile);
			$stmt->bindParam(':branch', $this->branch);
			if($stmt->execute())
			{
				
				return true;
			}
			else
			{
				//echo "something goes wrong";
				printf("Error %s. \n", $stmt->error);
				return false;
			}
		}
	
}

?>