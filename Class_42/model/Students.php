<?php 
	/**
	 * Students Class
	 */
	class Students
	{
		public $Id;
		public $Name;
		public $Roll;
		public $Phone;
		public $Address;

		function add($Data)
		{
			$Db = new Db();

			$this->Name = $Data['Name'];
			$this->Roll = $Data['Roll'];
			$this->Phone = $Data['Phone'];
			$this->Address = $Data['Address'];

			$Query = "INSERT INTO students (name, roll, phone, address)";
			$Query .= " VALUES('$this->Name', '$this->Roll', '$this->Phone', '$this->Address')";

			$Db->execute($Query);

			$Db->close();
		}

		function edit($Data, $Id)
		{
			$Db = new Db();

			$this->Name = $Data['Name'];
			$this->Roll = $Data['Roll'];
			$this->Phone = $Data['Phone'];
			$this->Address = $Data['Address'];

			$Query = "UPDATE students SET name = $this->Name, roll = $this->Roll, phone = $this->Phone, address = $this->Address WHERE id = $this->Id";

			$Db->execute($Query);
			$Db->close();
		}

		function delete($Id)
		{
			$Db = new Db();
			$this->Id = $Id;
			$Query = "DELETE FROM students WHERE id = $this->Id";
			$Db->execute($Query);
			$Db->close();
		}
	}
 ?>