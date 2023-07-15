<?php 
	class income_category
	{
		private $name;

		public function create($data)
		{
			$this->name = $data['name'];
			$query = "INSERT INTO income_category (name)";
			$query.= " VALUES('$this->name')";

			$DB = new db();

			if(!$DB->execute($query))
				throw new Exception('Create Error');

			$DB->close();
		}

		public function update($data,$id)
		{

		}

		public function delete()
		{

		}

		public function delete_by_pk($id)
		{

		}

		public function get_all()
		{
			$query = "SELECT * FROM income_category";

			$DB = new db();

			$result = $DB->fetch_result($query);

			$DB->close();

			return $result;

		}

		public function get_by_pk($id)
		{

		}
	}
?>