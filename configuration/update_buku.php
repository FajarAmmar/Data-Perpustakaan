<?php 
include('config.php');

$config = new config();
	$arrData = array("id_buku='".$_POST['id_buku']."'",
					"judul_buku='".$_POST['judul_buku']."'",
					"penulis_buku='".$_POST['penulis_buku']."'",
          "penerbit_buku='".$_POST['penerbit_buku']."'",
          "kategori_buku='".$_POST['kategori_buku']."'",
          "status_buku='".$_POST['status_buku']."'",);
	$id_value = $_POST['id_buku'];
	$hasil = $config->update_data('tbl_buku',$arrData,'id_buku',$id_value);

if ($hasil) {
	header('Location: ../data_buku.php');
}
else{
	echo "Gagal Menyimpan!!";
}
?>