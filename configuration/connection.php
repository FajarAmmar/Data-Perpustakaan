<?php 

/**
 * 
 */
class Koneksi
{
	private $host	= 'localhost';
	private $user	= 'root';
	private $pass	= '';
	private $db		= 'db_perpus';

	protected $conn;

	function __construct()
	{
		if(!isset($this->conn)){
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		}

		if (!$this->conn) {
			echo "Koneksi gagal";
		}
		/*
		else{
			echo "Koneksi Berhasi";
		}
		*/
		return $this->conn;
	}
}

$Koneksi = new Koneksi();
 ?>