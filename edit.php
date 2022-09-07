<?php 
require_once('koneksi.php');

// Proses Edit Barang
if(!empty($_POST['nama_barang'])) {
     // Menangkap data barang
     $nama_barang = $_POST['nama_barang'];
     $stok = $_POST['stok'];
     $harga = $_POST['harga'];
     $tanggal = $_POST['tanggal'];
}
?>