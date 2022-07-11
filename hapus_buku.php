<?php
include('configuration/config.php');
$config = new config()

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>HOMEPAGE</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PERPUSTAKAAN FAJAR</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Data Master
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="data_buku.php">Buku</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="data_pinjam.php">Pinjaman</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Transaksi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="form_pinjam.php"
                      >Peminjaman</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="form_kembali.php"
                      >Pengembalian</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>



	<div class="container">
		<div class="row">
			<div class="col-lg-12 mt-5 mb-5">
				<div class="card">
  <div class="card-header">
    Edit Data Buku Perpustakaan
  </div>
  <div class="card-body">
    <h1>Informasi Buku</h1><br>
      <table>
        <?php

    if (isset($_GET['id'])) {
		$id = $_GET['id'];
      
		$buku = $config->read_data('tbl_buku','id_buku',$id);
		foreach ($buku as $bk) {
        ?>
        <tr>
			<td>ID Buku</td>
			<td>&nbsp;:&nbsp; </td>
			<td>
				<div class="card">
          
  <div class="card-body bg-dark text-white" name="id_buku">
    <?php echo $bk['id_buku'] ?>
  </div>
</div>
			</td>
		</tr>
    <tr>
			<td>Judul Buku</td>
			<td>&nbsp;:&nbsp; </td>
			<td>
				<div class="card">
  <div class="card-body">
    <?php echo $bk['judul_buku'] ?>
  </div>
</div>
			</td>
		</tr>
    <tr>
			<td>Penulis Buku</td>
			<td>&nbsp;:&nbsp; </td>
			<td>
				<div class="card">
  <div class="card-body">
    <?php echo $bk['penulis_buku'] ?>
  </div>
</div>
			</td>
		</tr>
    <tr>
			<td>Penerbit Buku</td>
			<td>&nbsp;:&nbsp; </td>
			<td>
				<div class="card">
  <div class="card-body">
    <?php echo $bk['penerbit_buku'] ?>
  </div>
</div>
			</td>
		</tr>
    <?php }
    }?>
      <br>
      <tr>
        <td><br><h2 class="bg-warning">Hapus Data?</h2><br></td>
      </tr>
        <tr>
          <td>
            <input type="hidden" name="action" value="<? php echo $bk['id_buku']; ?>">
            <a href="configuration/delete_buku.php.?id=<?php echo $bk['id_buku']; ?>" class="btn btn-warning">Edit</a>
						<a href="hapus_buku.php.?id=<?php echo $bk['id_buku']; ?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      </table>
  </div>
</div>
</div>
	</div>
		</div>
<footer class="mt-2 bg-dark p-3 text-center" style="color: white">
      <p>Perpustakaan &copy;2021</p>
      <p>UTS Pemograman Web Lanjut</p>
      <p>Fajar Ammar Maulana - 201931166</p>
    </footer>

    <!-- -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>