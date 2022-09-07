<?php 
require_once('koneksi.php');

// Proses Edit Barang
if(!empty($_POST['nama_barang'])) {
     // Menangkap data barang
     $nama_barang = $_POST['nama_barang'];
     $stok = $_POST['stok'];
     $harga = $_POST['harga'];
     $tanggal = $_POST['tanggal'];

     $data[] = $nama_barang;
     $data[] = $stok;
     $data[] = $harga;
     $data[] = $tanggal;

     // Simpan data barang
     $sql = "UPDATE barang SET nama_barang=?,stok=?,harga_barang=?,tgl_masuk=? WHERE id_barang=?";
     $row = $connect->prepare($sql);
     $row->execute($data);
}
?>