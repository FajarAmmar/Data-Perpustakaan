<?php 
include 'connection.php';
 
$user_id = $_POST['user_id'];
$password = $_POST['password'];
 
$query = mysql_query("select * from tbl_user where user_id='$user_id' and password='$password'");
$hasil = mysql_num_rows($query);
if ($hasil) {
	header('Location: ../index.php');
}
else{
	echo "Gagal Menyimpan!!";
}
?>