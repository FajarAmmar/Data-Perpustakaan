<?php 
include('config.php');

$config = new config();

$id = $_GET['id_buku'];

$hasil = $config->delete_data('tbl_buku','id_buku',$id);
var_dump($id);

  if ($hasil) {
	echo "Data berhasil";
}
else{
	echo "Gagal Menyimpan!!";
}
?>