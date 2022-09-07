<?php 
require_once('koneksi.php');

// Menghapus data berdasarka id
$id  = $_GET['id'];
$sql = "DELETE FROM barang WHERE id_barang= ?";
$row = $connect->prepare($sql);
$row->execute(array($id));

?>