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

		public function delete($id)
		{
			$this->id = $id;
			$Query = "DELETE FROM students WHERE id = $this->id";

			$db = new db();
			$db->execute($Query);
			$db->close();
		}

		public function getAll()
		{
			$Query = "SELECT * FROM students";

			$db = new db();
			$Data = $db->execute($Query);
			while ($Row = mysqli_fetch_assoc($Data)){
				$Student[] = $Row;
			}
			$db->close();
			return $Student;
		}
	}

?>