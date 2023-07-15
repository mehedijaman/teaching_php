<?php 
	
	/**
	 * Students Class
	 */
	class Students
	{
		function __construct()
		{
			$Host = 'localhost';
			$User = 'phpmyadmin';
			$Pass = 'Q1w2e3r4t5!';
			$DB   = 'demo';

			$Connection = new mysqli($Host, $User, $Pass, $DB);
		}
		
		// This function is used to add new Student
		function add($Data)
		{
			$Name 	 = $Data['name'];
			$Roll 	 = $Data['roll'];
			$Phone 	 = $Data['phone'];
			$Address = $Data['address'];

			$Query = "INSERT INTO students (name, roll, phone, address)";
			$Query .= " VALUES($Name, $Roll, $Phone, $Address)";

			$Result = $Connection->execute_query($Query);
			return $Result;
		}

		// This function is used to delete a specific Student
		function delete($StudentID)
		{
			$Query = "DELETE FROM students where id = $StudentID";

			$Result = $Connection->execute_query($Query);
			return  $Result;
		}

		// Used to edit a specific Student
		function edit($Data, $StudentID)
		{
			$Name = $Data['name'];
			$Roll = $Data['roll'];
			$Phone = $Data['phone'];
			$Address = $Data['address'];

			$Query = "UPDATE students SET name = $Name, roll = $Roll, phone = $Phone, address = $Address WHERE id = $StudentID";

			$Result = $Connection->execute_query($Query);

			return $Result;
		}

		// Used to get details of a specific Student
		function get($StudentID)
		{
			$Query = "SELECT * FROM students WHERE id = $StudentID";
			$Result = $Connection->execute_query($Query);
			return $Result;
		}

		// USed to get all students 
		function getAll()
		{
			$Query = "SELECT * FROM students";
			$Result = $Connection->execute_query($Query);
			return $Result;
		}
	}

 ?>