<?php 
include('config.php');

$config = new config();

$id = $_GET['kode_pinjam'];

$hasil = $config->delete_data('tbl_pinjam','kode_pinjam',$id);

  if ($hasil) {
	header('Location: ../data_pinjam.php');
}
else{
	echo "Gagal Menyimpan!!";
}
?>