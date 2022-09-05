<?php 
     $username = 'root';
     $password = '';

     try {
          // Membuat koneksi database
          $connect = new PDO('mysql:host=localhost;dbname=tbl_barang;',$username,$password);
     } catch (PDOException $e) {
          // Kirim pesan jika koneksi database gagal
          print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>>";
          die();
     }
?>
