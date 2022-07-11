<?php 
include('connection.php');

/**
 * 
 */
class config extends Koneksi
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function read_data($table,$id,$id_value)
	{
		$query = "SELECT * FROM $table";
		if ($id!=null) {
			$query .= " WHERE $id='".$id_value."'";
		}

		$hasil = $this->conn->query($query);

		if(!$hasil)
		{
			return "Error on query!";
		}

		$rows = array();
		while ($row = $hasil->fetch_assoc()) 
		{
			$rows[] = $row;
		}
		return $rows;
	}

	public function save_data($table,$data){
		$column = implode(", ",array_keys($data));
		$escaped_values = array_map('htmlspecialchars', array_values($data));
		foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";
		$values = implode(", ", $escaped_values);
		$query = "INSERT INTO $table ($column) VALUES ($values)";

		$hasil = $this->conn->query($query);
		if($hasil){
			return true;
		}
		else{
			return false;
		}
		
	}

	public function update_data($table,$data,$id,$id_value)
	{
		$query = "UPDATE $table SET ";
		$query .= implode(',', $data);
		$query .= " WHERE $id='".$id_value."'";
		$hasil = $this->conn->query($query);
		if ($hasil) {
			return true;
		}
		else{
			return false;
		}
	}
	
	public function delete_data($table,$id,$id_value)
	{
		$query = "DELETE FROM $table WHERE $id='".$id_value."'";
		$hasil = $this->conn->query($query);
		if ($hasil) {
			return true;
		}
		else{
			return false;
		}
	}

}

?>

