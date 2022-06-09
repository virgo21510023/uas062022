<?php

if (isset($_POST['tambahproduk'])) {
	$nama_produk = $_POST['nama_produk'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$stock = $_POST['stock'];

	$insert = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, deskripsi, harga, stock) VALUES ('$nama_produk', '$deskripsi', '$harga', '$stock')");

	if ($insert) {
		header('location:stock.php');
	} else {
		echo"
			<script> 
				alert('Gagal Tambah Produk')
				window.location.href='stock.php'
			</script>
		"
	}
}

?>