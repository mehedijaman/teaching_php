<?php 

	/**
	 * Stdent Class
	 */
	class student
	{
		private $id;
		private $name;
		private $roll;
		private $phone;
		private $address;

		public function add($Data)
		{
			$this->name = $Data['name'];
			$this->phone = $Data['phone'];
			$this->roll = $Data['roll'];
			$this->address = $Data['address'];

			$Query = "INSERT INTO students (name, roll, phone, address)";
			$Query .= " VALUES('$this->name', '$this->roll', '$this->phone', '$this->address')";

			$db = new db();

			$db->execute($Query);

			$db->close();
		}

		public function update($Data, $id){
			$this->name = $Data['name'];
			$this->phone = $Data['phone'];
			$this->roll = $Data['roll'];
			$this->address = $Data['address'];

			$this->id = $id;

			$Query = "UPDATE students SET name = '$this->name', roll = '$this->roll', phone = '$this->phone', address = '$this->address'";
			$Query .= " WHERE id = $this->id";

			$db = new db();
			$Result = $db->execute($Query);
			$db->close();

			return $Result;
		}

		public function delete($id)
		{
			$this->id = $id;
			$Query = "DELETE FROM students WHERE id = $this->id";

			$db = new db();
			$Result = $db->execute($Query);
			$db->close();

			return $Result;
		}

		public function getAll()
		{
			$Query = "SELECT * FROM students";

			$db = new db();
			$Data = $db->fetchData($Query);			
			$db->close();
			
			return $Data;
		}

		public function getByPK($id){
			$Query = "SELECT * FROM students WHERE id = $id";

			$db = new db();
			$Data = $db->fetchData($Query);
			$db->close();
			return $Data;
		}
	}

?>